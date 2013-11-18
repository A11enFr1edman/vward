<?php


class AController extends CController
{


    protected function extract_auth_vars(){
        $txt = '';
        if(isset($_SERVER['HTTP_X_SENTRY_AUTH']) && substr($_SERVER['HTTP_X_SENTRY_AUTH'],0,6) == 'Sentry'){
            $txt = $_SERVER['HTTP_X_SENTRY_AUTH'];
        }
        elseif(isset($_SERVER['HTTP_AUTHORIZATION']) && substr($_SERVER['HTTP_AUTHORIZATION'],0,6) == 'Sentry'){
            $txt = $_SERVER['HTTP_AUTHORIZATION'];
        }

        // protect against missing data
        $needed_parts = array('sentry_timestamp'=>1, 'sentry_client'=>1, 'sentry_version'=>1, 'sentry_key'=>1, 'sentry_secret'=>1);
        $data = array();

        preg_match_all('@(\w+)=([\'"]?)([a-zA-Z0-9=./\_-]+)\2@', $txt, $matches, PREG_SET_ORDER);

        foreach ($matches as $m) {
            $data[$m[1]] = $m[3];
            unset($needed_parts[$m[1]]);
        }

        return $needed_parts ? false : $data;
    }

}