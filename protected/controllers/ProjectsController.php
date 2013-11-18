<?php

class ProjectsController extends Controller
{
	public $title='Sentry';

	public function actionSettings()
	{
        $this->render('settings');
	}

    public function actionManage_project_keys($team_slug, $project_id){

        $project = $this->getTeamAndProject($team_slug, $project_id);

        $keys = Projectkey::model()->with('user')->FindAllByAttributes(array('project_id'=>$project['project']->id));

        $protocol = Yii::app()->request->isSecureConnection == true ? 'https':'http';

        $this->render('manage_project_keys', array('keys'=>$keys, 'protocol'=>$protocol));
    }


}
