<?php

class ApiController extends Controller
{


	public function actionStore($project_id)
	{
        if(Yii::app()->request->isPostRequest){
            $response_or_event_id = $this->process($_GET,$project_id);
            $this->response(200, array('id'=> $response_or_event_id));
        }else{
            $this->process($_GET,$project_id);
            header('X-Sentry-ID: response_or_event_id');
            $this->response(200, base64_decode('R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs='), 'image/gif');
        }
    }


    private function process($data, $project_id){

        $project = Project::model()->findByPK($project_id);

        if ($project::is_rate_limited){
            $this->response('API RateLimited');
        }

        $result = Plugins::first('has_perm', request.user, 'create_event', $project);
        if ($result == false){
            $this->response('Creation of this event was blocked');
        }

        try{
            # mutates data
            Store::validate_data($project, $data, $auth['client']);
        } catch (Exception $e) {
            throw $e;
        }

        # mutates data
        Store::normalize_event_data($data);

        # insert IP address if not available
        if (auth::is_public){
            Store::ensure_has_ip($data, $_SERVER['REMOTE_ADDR']);
        }

        $event_id = $data['event_id'];

        # mutates data (strips a lot of context if not queued)
        Stroe::insert_data_to_database($data);

        Yii::trace(sprintf('New event from project %s/%s (id=%s)', $project->team->slug, $project->slug, $event_id),'api');

        return $event_id;
    }


    private function response($status = 200, $body = '', $content_type = 'application/json') {
        $status_header = 'HTTP/1.1 '.$status.' '.$this->getStatusCodeMessage($status);
        header($status_header);
        header('Content-type: '.$content_type);
        if(is_array($body)){
            echo CJSON::encode($body);
        }else{
            echo $body;
        }
        Yii::app()->end();
    }

    private function getStatusCodeMessage($status) {
        $codes = array(
            200 => 'OK',
            400 => 'Bad Request',
            401 => 'Unauthorized',
            402 => 'Payment Required',
            403 => 'Forbidden',
            404 => 'Not Found',
            410 => 'Gone',
            429 => 'Creation of this event was denied due to rate limiting',
            500 => 'Internal Server Error',
            501 => 'Not Implemented');
        return (isset($codes[$status])) ? $codes[$status] : '';
    }

}
