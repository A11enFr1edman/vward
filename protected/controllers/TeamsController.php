<?php

class TeamsController extends Controller
{
    public $class = 'windowed';
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl',
		);
	}

	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated users to access all actions
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionManage_team()
	{
		$this->render('manage_team');
	}

	public function actionCreate_new_team_project(){
		
		$this->render('create_new_team_project');
	}

	public function actionNew()
	{
        if(!empty($_POST)){
            $this->redirect('/teams/ecc/projects/new/');
        }
		$this->render('new');
	}

    public function actionProjects()
    {
        $this->class='';
        $this->render('projects');
    }

    public function actionSettings(){
        $this->render('settings');
    }

    public function actionMembers(){
        $this->render('members');
    }

    public function actionGroups(){
        $this->render('groups');
    }
}