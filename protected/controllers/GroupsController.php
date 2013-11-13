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

        $team = Team::model()->FindByAttributes(array('slug'=>$team_slug));
        $project = 'SELECT "id", "slug", "name", "owner_id", "team_id", "public", "date_added", "status", "platform" FROM "sentry_project" WHERE ("slug" = sentry  AND "team_id" = 1 )';



        $sql = 'SELECT ((julianday(sentry_groupedmessage.last_seen) - 2440587.5) * 86400.0) AS "sort_value", "id", "project_id", "logger", "level", "message", "view", "checksum", "num_comments", "platform", "status", "times_seen", "last_seen", "first_seen", "resolved_at", "active_at", "time_spent_total", "time_spent_count", "score", "is_public", "data" FROM "sentry_groupedmessage" WHERE ("project_id" = 1  AND "status" = 0  AND "last_seen" >= "2013-11-08 14:50:02.497290") ORDER BY "last_seen" DESC LIMIT 20';

        $criteria = new CDbCriteria;

        $criteria->addCondition("project_id = :project_id");
        $criteria->params[':project_id'] = 1;
        $criteria->addCondition("status = :status");
        $criteria->params[':status'] = 0;
        $criteria->addCondition("last_seen >= :last_seen");
        $criteria->params[':last_seen'] = "2013-11-08 14:50:02";

        $criteria->order = 'last_seen DESC';
        $criteria->limit = 20;

        $messages = Groupedmessage::model()->findAll($criteria);
        foreach($messages as $row){
            $m = $row->getAttributes();
            //print_r($m);
            //die;
        }

        $this->render('group_list', array('messages'=>$messages));
    }

    public  function actionGroup(){

        $this->render('group');
    }

    public function actionSearch(){

        $this->redirect('group');
    }


    public function actionDashboard($team_slug){
        $this->team_slug = $team_slug;

        $this->render('dashboard');
    }


}