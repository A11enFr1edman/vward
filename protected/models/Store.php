<?php

class Store extends CActiveRecord
{
    const MAX_MESSAGE_LENGTH = 1024;




    public static function save_data($project, $data){

        $data = self::validate_data($data);
        unset($data['sentry.interfaces.Stacktrace']);
        print_r($data);
        $checksum = md5($data['message']);

        $gm = Groupedmessage::model()->findByAttributes(array('project_id'=>$project->id, 'checksum'=>$checksum));
        if(empty($gm)){
            $gm = new Groupedmessage;
            $gm -> project_id = $project->id;
            $gm -> logger = $data['logger'];
            $gm -> level = $data['level'];
            $gm -> message = $data['message'];
            $gm -> view = 0;
            $gm -> checksum = $checksum;
            $gm -> num_comments = 0;
            $gm -> platform = $data['platform'];
            $gm -> status = 0;
            $gm -> times_seen = 1;
            $gm -> last_seen = $data['timestamp'];
            $gm -> first_seen = $data['timestamp'];
            $gm -> resolved_at = null;
            $gm -> active_at = $data['timestamp'];
            $gm -> time_spent_total = 0;
            $gm -> time_spent_count = 0;
            $gm -> is_public = 0;
            $gm -> score = 0;
            $gm -> data = null;
            $gm->save();

            $gm -> score = new CDbExpression("log(times_seen) * 600 + unix_timestamp(last_seen)");
            if($gm->save()){

            Yii::app()->db->createCommand("UPDATE `groupedmessage` SET `score` = log(times_seen) * 600 + unix_timestamp(last_seen) WHERE `id` = ".$project->id)->execute();

            Yii::app()->db->createCommand("UPDATE `messagecountbyminute` SET `times_seen` = `times_seen` + 1 WHERE (`project_id` = $project->id  AND `date` = '".date('Y-m-d H:00:00')."'  AND .`group_id` = ".$gm->id)->execute();

            Yii::app()->db->createCommand("UPDATE `projectcountbyminute` SET `times_seen` = `times_seen` + 1 WHERE (`project_id` = $project->id  AND `date` = '".date('Y-m-d H').":00:00' )")->execute();
            }else{
                print_r($gm->getErrors());
            }

        }else{

        }






        die;

        return $data['event_id'];
    }


    /**
     * @param $data
     * @return string
     */
    private static function validate_data($data){
        if(strpos('{', $data) !== 0){
            $data = gzuncompress(base64_decode($data));
        }
        $data = json_decode($data, true);
        if (!isset($data['message'])){
            $data['message'] = '<no message value>';
        }elseif( !is_string($data['message'])){
            return 'Invalid value for message';
        }elseif (strlen($data['message']) > self::MAX_MESSAGE_LENGTH){
            Yii::log('Truncated value for message due to length (%d chars)', strlen($data['message']));
            $data['message'] = substr($data['message'], 0, self::MAX_MESSAGE_LENGTH);
        }

        if (!isset($data['event_id'])){
            $data['event_id'] = uniqid();
        }

        if (strlen($data['event_id']) > 32){
            Yii::log('Discarded value for event_id due to length (%d chars)',strlen($data['event_id']));
            $data['event_id'] = uniqid();
        }


        return $data;
    }

}