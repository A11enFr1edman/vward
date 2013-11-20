<?php
/**
 * Created by PhpStorm.
 * User: allanwang
 * Date: 13-11-11
 * Time: 下午7:00
 */

class GenericController extends Controller{

    public $class = 'windowed';

    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow',
                'actions'=>array('error'),
                'users'=>array('*'),
            ),
            array('allow', // allow authenticated users to access all actions
                'users'=>array('@'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }

    /**
     * Dashboard
     */
    public function actionDashboard(){
        $teamMember = Teammember::model()->with('team')->FindAllByAttributes(array('user_id'=>Yii::app()->user->id));
        $this->render('dashboard', array('teamMember'=>$teamMember));
    }

    /**
     * Error pages
     */
    public function actionError()
    {
        if($error=Yii::app()->errorHandler->error)
        {
            if(Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

} 