<?php

/**
 * This is the model class for table "sentry_groupedmessage".
 *
 * The followings are the available columns in table 'sentry_groupedmessage':
 * @property integer $status
 * @property string $first_seen
 * @property string $resolved_at
 * @property string $last_seen
 * @property integer $time_spent_count
 * @property integer $level
 * @property integer $num_comments
 * @property integer $times_seen
 * @property string $active_at
 * @property integer $id
 * @property integer $time_spent_total
 * @property integer $score
 * @property string $platform
 * @property string $checksum
 * @property boolean $is_public
 * @property string $message
 * @property integer $project_id
 * @property string $data
 * @property string $logger
 * @property string $view
 */
class Groupedmessage extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Groupedmessage the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sentry_groupedmessage';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status, first_seen, last_seen, time_spent_count, level, times_seen, time_spent_total, score, checksum, message, logger', 'required'),
			array('status, time_spent_count, level, num_comments, times_seen, time_spent_total, score, project_id', 'numerical', 'integerOnly'=>true),
			array('platform, logger', 'length', 'max'=>64),
			array('checksum', 'length', 'max'=>32),
			array('view', 'length', 'max'=>200),
			array('resolved_at, active_at, is_public, data', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('status, first_seen, resolved_at, last_seen, time_spent_count, level, num_comments, times_seen, active_at, id, time_spent_total, score, platform, checksum, is_public, message, project_id, data, logger, view', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}


    /**
     * @param $team_slug
     * @param $project
     * @param int $last_seen
     * @param int $status
     * @param int $limit
     * @return array
     */
    public static function getList($team_slug, $project, $last_seen=0, $status=0, $limit=20){
        $criteria = new CDbCriteria;
        $criteria->select = '((julianday(last_seen) - 2440587.5) * 86400) AS "sort_value", "id", "project_id", "logger", "level", "message", "view", "checksum", "num_comments", "platform", "status", "times_seen", "last_seen", "first_seen", "resolved_at", "active_at", "time_spent_total", "time_spent_count", "score", "is_public", "data"';
        $criteria->addCondition("project_id = :project_id");
        $criteria->params[':project_id'] = $project->id;
        $criteria->addCondition("status = :status");
        $criteria->params[':status'] = 0;
        $criteria->addCondition("last_seen >= :last_seen");
        $criteria->params[':last_seen'] = "2013-11-09 16:50:32.202196";
        $criteria->order = 'last_seen DESC';
        $criteria->limit = 20;

        $error = array(
            10 => 'debug',
            20 => 'info',
            30 => 'warning',
            40 => 'error',
            50 => 'fatal',
        );

        $messages = self::model()->findAll($criteria);
        $event_list = array();
        if(!empty($messages)){
            foreach($messages as $m){
                $event_list[] = array(
                    'version' => time(),
                    'timeSpent' => $m->time_spent_total > 0 ?: null,
                    'lastSeen' => $m->last_seen,
                    'historicalData' => array(),
                    'isResolved' => $m->resolved_at ? true:false,
                    'levelName' => isset($error[$m->level])? $error[$m->level] : 'error',
                    'title' => $m->view,
                    'id' => $m->id,
                    'score' => $m->score,
                    'logger' => $m->logger,
                    'canResolve' => true,
                    'annotations' => array(array("count"=> 1, "label" => "users")),
                    'tags' => array(),
                    'isPublic' => $m->is_public ? true:false,
                    'hasSeen' => $m->status ? true:false,
                    'firstSeen' => $m->first_seen,
                    'count' =>  $m->times_seen,
                    'permalink' => '/'.$team_slug.'/'.$project->id.'/group/'.$m->id.'/',
                    'message' => $m->message,
                    'versions' => array(),
                    'isBookmarked' => false,
                    'project' => array(
                        'name' => $project->name,
                        'slug' => $project->slug,
                    )
                );
            }
        }
        return $event_list;
    }

}