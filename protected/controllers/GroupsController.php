<?php
/**
 * Created by PhpStorm.
 * User: allanwang
 * Date: 13-11-11
 * Time: 下午7:05
 */

class GroupsController extends Controller {

    protected function beforeAction($action){
        //TODO load All my team and project

        $this->project = Project::load(Yii::app()->request->getParam('team_slug'), Yii::app()->request->getParam('project_id'));
        $this->team_slug = Yii::app()->request->getParam('team_slug');
        $this->project_id = Yii::app()->request->getParam('project_id');

        return parent::beforeAction($action);
    }


    public function actionGroup_list(){

        $event_list = Groupedmessage::getList($this->project);

        $this->render('group_list', array('event_list' => $event_list));
    }

    public  function actionGroup($team_slug, $project_id){
        $this->team_slug = $team_slug;
        $this->project_id = $project_id;

        //TODO: Get All teams and projects


        $this->render('group');
    }

    public function actionSearch(){

        $this->redirect('group');
    }


    public function actionDashboard($team_slug){
        $this->team_slug = $team_slug;



        $this->render('dashboard');
    }

    public function actionWall_display($team_slug){

        $this->render('wall');
    }

}