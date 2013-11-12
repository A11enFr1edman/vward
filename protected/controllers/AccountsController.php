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

    /**
     * 
     */
    public function actionRegister(){
        //登录用户跳回
        if(!Yii::app()->user->isGuest){
            $this->redirect(Yii::app()->user->returnUrl);
        }

        $this->render('register');
    }


    /**
     *
     */
    public function actionRecover(){

        $sent = false;
        if(Yii::app()->request->isPostRequest){
            $user = AuthUser::model()->FindByAttributes(array('username'=>Yii::app()->request->getParam('user')));
            if(!empty($user)){
                # Force overwrite recover recover record if exists
                $m = Lostpasswordhash::model()->FindByAttributes(array('user_id'=>$user->id));

                $m->user_id = $user->id;
                $m->hash = md5(uniqid());
                $m->date_added = date('Y-m-d H:i:s');

                if($m->save()){
                    $sent = true;
                }else{
                    Yii::app()->user->setFlash('error','Unable to recover your password!');
                }
            }else{
                Yii::app()->user->setFlash('error','We were unable to find a matching user.');
            }
        }

        $this->render('recover', array('sent' => $sent));
    }


    /**
     * @param $user_id
     * @param $hash
     */
    public function actionRecover_confirm($user_id, $hash){
        $error = true;
        //TODO: add hash expire check in sql
        $m = Lostpasswordhash::model()->FindByAttributes(array('id'=> $user_id,'hash' => $hash));
        if(!empty($m)){
            $error = false;
        }
        if(Yii::app()->request->isPostRequest){
            $user = AuthUser::model()->FindByPk($user_id);
            $user->password = $user->hashPassword(Yii::app()->request->getParam('password'));

        }
        $this->render('recover_confirm', array('error'=>$error));
    }


    /**
     * Displays the login page
     */
    public function actionLogin()
    {
        //登录用户跳回
        if(!Yii::app()->user->isGuest){
            $this->redirect(Yii::app()->user->returnUrl);
        }

        $this->class='windowed';
        Yii::app()->user->setFlash('info', "请登录以继续操作");

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
            if($model->validate() && $model->login()){
                $this->redirect(Yii::app()->user->returnUrl);
            }else{
                Yii::app()->user->setFlash('error','Please enter a correct username and password. Note that both fields may be case-sensitive.');
            }
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