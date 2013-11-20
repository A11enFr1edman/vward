<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{


	public $menu=array();
	public $breadcrumbs=array();

	public $team_slug;
	public $project_id;

	public $title;
	public $class;

    /**
     *
     * @param $team_slug
     * @return mixed
     * @throws CHttpException
     */
    protected function getTeam($team_slug){
        $this->team_slug = $team_slug;

        $team = Team::model()->FindByAttributes(array('slug'=>$team_slug));
        if(empty($team)){
            throw new CHttpException(404,'The specified team cannot be found.');
        }

        return $team;
    }

    /**
     * @param $team_slug
     * @param $project_id
     * @return mixed
     * @throws CHttpException
     * TODO: use Yii ActiveRecord relations to fetch team or project with team
     */
    protected function getProject($team_slug, $project_id){
        $this->team_slug = $team_slug;
        $this->project_id = $project_id;

        $ret['team'] = Team::model()->FindByAttributes(array('slug'=>$team_slug));
        if(empty($ret['team'])){
            return false;
        }

        if($project_id){
            $ret['project'] = Project::model()->findByAttributes(array('slug'=>$project_id, 'team_id'=>$ret['team']->id));
            if(empty($ret['project'])){
                return false;
            }
        }

        return $ret;
    }

}