<?php
/**
 * Created by PhpStorm.
 * User: allanwang
 * Date: 13-11-11
 * Time: 下午4:53
 */

class AccountsController extends Controller{

    public $class="windowed";
    public $title = 'Account';

    public function actionRegister(){
        $this->class='windowed';

        $this->render('register');
    }

    public function actionRecover(){
        $this->class='windowed';

        $this->render('recover');
    }

    public function actionRecover_confirm(){

    }


    /**
     * Displays the login page
     */
    public function actionLogin()
    {
        $this->class='windowed';
        Yii::app()->user->setFlash('info', "请登录以继续操作");
        if (!defined('CRYPT_BLOWFISH')||!CRYPT_BLOWFISH)
            throw new CHttpException(500,"This application requires that PHP was compiled with Blowfish support for crypt().");

        $model=new LoginForm;

        // if it is ajax validation request
        if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if(isset($_POST['login']))
        {
            $model->attributes=$_POST['login'];
            // validate user input and redirect to the previous page if valid
            if($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login',array('model'=>$model));
    }

    public function actionLogin_redirect(){

    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    public function actionSettings(){

        $this->render('settings');
    }

    public function actionAppearance_settings(){

        $this->render('appearance');
    }

    public function actionNotification_settings(){

        $this->render('notifications');
    }

    public function actionList_identities(){

        $this->render('identities');
    }

} 