<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Summic
 * Date: 11/12/13
 * Time: 1:26 AM
 * To change this template use File | Settings | File Templates.
 */

class HttpRequest extends CHttpRequest{

    private $_csrfToken;
    public $noCsrfValidationRoutes = array();

    public function getCsrfToken()
    {
        if($this->_csrfToken===null)
        {
            $session = Yii::app()->session;
            $csrfToken=$session->itemAt($this->csrfTokenName);
            if($csrfToken===null)
            {
                $csrfToken = sha1(uniqid(mt_rand(),true));
                $session->add($this->csrfTokenName, $csrfToken);
            }
            $this->_csrfToken = $csrfToken;
        }

        return $this->_csrfToken;
    }


    public function validateCsrfToken($event)
    {
        if($this->getIsPostRequest() && false === $this->checkCurrentRoute())
        {
            // only validate POST requests
            $session = Yii::app()->session;
            if($session->contains($this->csrfTokenName) && isset($_POST[$this->csrfTokenName]))
            {
                $tokenFromSession=$session->itemAt($this->csrfTokenName);
                $valid=$tokenFromSession===$_POST[$this->csrfTokenName];
            }
            else
            {
                $valid=false;
            }

            if(!$valid){
                throw new CHttpException(400,Yii::t('yii','The CSRF token could not be verified.'));
            }
        }
    }

    private function checkCurrentRoute() {
        foreach ($this->noCsrfValidationRoutes as $checkPath)
        {
            if (($pos = strpos($checkPath, "*")) !== false)
            {
                $checkPath = substr($checkPath, 0, $pos - 1);
                if (strpos($this->pathInfo, $checkPath) == 0)
                    return false;
            } elseif ($this->pathInfo === $checkPath)
                return false;
        }
        return true;
    }

}