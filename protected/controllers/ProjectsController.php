<?php

class ProjectsController extends Controller
{
	public $title='Sentry';

    /**
     * 根据传入 action 的参数，预加载 project 对象
     *
     * @param CAction $action
     * @return bool
     */
    protected function beforeAction($action){
        //TODO load All my team and project

        $this->project = Project::load(Yii::app()->request->getParam('team_slug'), Yii::app()->request->getParam('project_id'));
        $this->team_slug = Yii::app()->request->getParam('team_slug');
        $this->project_id = Yii::app()->request->getParam('project_id');

        return parent::beforeAction($action);
    }


    public function actionSettings()
    {
        $this->render('settings');
    }

    /**
     * API 密钥管理页面
     */
    public function actionKeys(){

        $keys = Projectkey::model()->with('user')->FindAllByAttributes(array('project_id'=>$this->project->id));

        $protocol = Yii::app()->request->isSecureConnection == true ? 'https':'http';

        $this->render('keys', array('keys'=>$keys, 'protocol'=>$protocol));
    }


}
