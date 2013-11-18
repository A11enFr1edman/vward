<?php

class Store extends CActiveRecord
{
    const MAX_MESSAGE_LENGTH = 1024;




    public static function save_data($project, $data){

        $data = self::validate_data($data);
        unset($data['sentry.interfaces.Stacktrace']);
        print_r($data);

        echo $sql = 'INSERT INTO "sentry_groupedmessage" ("project_id", "logger", "level", "message", "view", "checksum", "num_comments", "platform", "status", "times_seen", "last_seen", "first_seen", "resolved_at", "active_at", "time_spent_total", "time_spent_count", "score", "is_public", "data") VALUES ('.$project->id.', "php", 40, "'.$data['message'].'", "", "ad196ffd7ac755b551a41a59a10d21dd", 0, "php", 0, 1, "2013-11-16 08:31:12", "2013-11-16 08:31:12", "None", "2013-11-16 08:31:12", 0, 0, 0, False, "None"); ';


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