<?php
/**
 * Created by PhpStorm.
 * User: allanwang
 * Date: 13-11-11
 * Time: 下午7:05
 */

class GroupsController extends Controller {


    public function actionGroup_list($team_slug, $project_id){

        $project = $this->getProject($team_slug, $project_id);

        $event_list = Groupedmessage::getList($team_slug, $project['project']);

        $this->render('group_list', array('event_list' => $event_list));
    }

    public  function actionGroup($team_slug, $project_id){
        $this->team_slug = $team_slug;
        $this->project_id = $project_id;
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