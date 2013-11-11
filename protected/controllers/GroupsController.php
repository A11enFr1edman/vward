<?php
/**
 * Created by PhpStorm.
 * User: allanwang
 * Date: 13-11-11
 * Time: 下午7:05
 */

class GroupsController extends Controller {

    public function actionGroup_list($team_slug, $project_id){
        $this->team_slug = $team_slug;
        $this->project_id = $project_id;

        $this->render('group_list');
    }

    public  function actionGroup(){

        $this->render('group');
    }

    public function actionSearch(){

        $this->redirect('group');
    }


    public function actionDashboard(){

        $this->render('dashboard');
    }


}