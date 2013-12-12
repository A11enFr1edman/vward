<?php

class ApiController extends AController
{

	public function actionStore($project_id='')
	{
        if(Yii::app()->request->isPostRequest){
            $data = file_get_contents("php://input");
            $event_id = $this->process($data, $project_id);
            $this->response(200, array('id'=> $event_id));
        }else{

            //$event_id = $this->process($_GET,$project_id);
            $event_id = 234234234234234234234564456456345;
            header("X-Sentry-ID: $event_id");
            $this->response(200, base64_decode('R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs='), 'image/gif');
        }
    }

    public function actionGet_group_trends(){
        $ret ='[{"version": 1384169220.505725, "timeSpent": null, "lastSeen": "2013-11-11T19:09:44.269984+08:00", "historicalData": [], "isResolved": false, "levelName": "error", "title": "django.http.request in get_host", "id": "1", "score": 1384171670, "logger": "root", "canResolve": true, "annotations": [{"count": 30, "label": "users"}], "tags": [], "isPublic": false, "hasSeen": true, "firstSeen": "2013-10-29T00:43:05.271389+08:00", "count": "335", "permalink": "/sentry/sentry/group/1/", "level": 40, "message": "SuspiciousOperation: Invalid HTTP_HOST header (you may need to set ALLOWED_HOSTS): www.qq.com", "versions": [], "isBookmarked": false, "project": {"name": "Sentry", "slug": "sentry"}}]';
        $this->response(200,$ret);
    }


    public function actionGet_new_groups(){
        $ret ='[]';
        $this->response(200,$ret);
    }

    /**
     * Get events chart
     * @param $team_slug
     * @throws CHttpException
     */
    public function actionChart($team_slug){
        $days = Yii::app()->request->getParam('days', 1);

        $team = Team::model()->FindByAttributes(array('slug'=>$team_slug));
        if(empty($team)){
            throw new CHttpException(404,'The specified team cannot be found.');
        }

        $projects = Project::model()->FindByAttributes(array('team_id'=> $team->id));


        $yesterday = strtotime('-1 day');
        /*
        $criteria = new CDbCriteria;
        $criteria->select = 'times_seen';

        $criteria->addCondition("project_id IN (:project_ids)");
        $criteria->params[':project_ids'] = $team->id;

        $criteria->addCondition("datetime >= :days");
        $criteria->params[':last_seen'] = date('Y-m-d H:i:s', $yesterday);
        $messages = Groupedmessage::model()->findAll($criteria);
        */
        for($i=$yesterday; $i <= $yesterday + 86400;$i=$i+3600){
            $ret[] = array(
                $i*1000, rand(0,99)
            );
        }

        $this->response(200, $ret);
    }

    public function actionBookmark(){
        $ret ='[]';
        $this->response(200,$ret);
    }
    public function actionResolve_group(){
        $ret ='[]';
        $this->response(200,$ret);
    }

    public function actionPoll($team_slug, $project_id){
        $cursor = Yii::app()->request->getParam('cursor',0);

        $param = ctype_digit($project_id) ? array('id'=>$project_id) : array('slug'=>$project_id);
        $project = Project::model()->with('team')->FindByAttributes($param);
        if(empty($project) || $project->team->slug != $team_slug){
            $this->response(404, 'The specified project cannot be found.');
        }

        $events = Groupedmessage::getList($project, $cursor);

        $this->response(200, $events);
    }

    public function actionResolve(){
        $ret ='[]';
        $this->response(200,$ret);
    }

    public function actionRemove_group(){
        $ret ='[]';
        $this->response(200,$ret);
    }

    public function actionClear(){
        $ret ='[]';
        $this->response(200,$ret);
    }

    public function actionGet_resolved_groups(){
        $ret ='[]';
        $this->response(200,$ret);
    }

    private function process($data, $project_id=''){
        if('' == $project_id){
            $xAuth = $this->extract_auth_vars();

            $projectKey = ProjectKey::model()->findByAttributes(array('public_key'=> $xAuth['sentry_key'], 'secret_key'=>$xAuth['sentry_secret']));

            if(!empty($projectKey)){
                $project_id = $projectKey->id;
            }else{
                $this->response(200, 'Invalid api key');
            }
        }

        $project = Project::model()->findByPK($project_id);

        #过载保护
        /**
         * Return True if this project (or the system) is over any defined quotas.
         * TODO: 过载保护
         *
        if (Quota::is_rate_limited){
            $this->response('API RateLimited');
        }*/



        #处理数据
        try{
            # mutates data
            $event_id = Store::save_data($project, $data);
        } catch (Exception $e) {
            throw $e;
        }

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
