<?php

/**
 * This is the model class for table "groupedmessage".
 *
 * The followings are the available columns in table 'groupedmessage':
 * @property integer $id
 * @property string $logger
 * @property string $level
 * @property string $message
 * @property string $view
 * @property string $checksum
 * @property string $status
 * @property string $times_seen
 * @property string $last_seen
 * @property string $first_seen
 * @property string $data
 * @property integer $score
 * @property integer $project_id
 * @property integer $time_spent_total
 * @property integer $time_spent_count
 * @property string $resolved_at
 * @property string $active_at
 * @property integer $is_public
 * @property string $platform
 * @property string $num_comments
 *
 * The followings are the available model relations:
 * @property Activity[] $activities
 * @property Alert[] $alerts
 * @property Alertrelatedgroup[] $alertrelatedgroups
 * @property Eventmapping[] $eventmappings
 * @property Groupbookmark[] $groupbookmarks
 * @property Project $project
 * @property Groupmeta[] $groupmetas
 * @property Groupseen[] $groupseens
 * @property Grouptagkey[] $grouptagkeys
 * @property Message[] $messages
 * @property Messagecountbyminute[] $messagecountbyminutes
 * @property Messagefiltervalue[] $messagefiltervalues
 * @property Searchdocument[] $searchdocuments
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
		return 'groupedmessage';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('logger, level, message, checksum, status, times_seen, last_seen, first_seen, score, time_spent_total, time_spent_count', 'required'),
			array('score, project_id, time_spent_total, time_spent_count, is_public', 'numerical', 'integerOnly'=>true),
			array('logger, platform', 'length', 'max'=>64),
			array('level, status, times_seen, num_comments', 'length', 'max'=>10),
			array('view', 'length', 'max'=>200),
			array('checksum', 'length', 'max'=>32),
			array('data, resolved_at, active_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, logger, level, message, view, checksum, status, times_seen, last_seen, first_seen, data, score, project_id, time_spent_total, time_spent_count, resolved_at, active_at, is_public, platform, num_comments', 'safe', 'on'=>'search'),
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
			'activities' => array(self::HAS_MANY, 'Activity', 'group_id'),
			'alerts' => array(self::HAS_MANY, 'Alert', 'group_id'),
			'alertrelatedgroups' => array(self::HAS_MANY, 'Alertrelatedgroup', 'group_id'),
			'eventmappings' => array(self::HAS_MANY, 'Eventmapping', 'group_id'),
			'groupbookmarks' => array(self::HAS_MANY, 'Groupbookmark', 'group_id'),
			'project' => array(self::BELONGS_TO, 'Project', 'project_id'),
			'groupmetas' => array(self::HAS_MANY, 'Groupmeta', 'group_id'),
			'groupseens' => array(self::HAS_MANY, 'Groupseen', 'group_id'),
			'grouptagkeys' => array(self::HAS_MANY, 'Grouptagkey', 'group_id'),
			'messages' => array(self::HAS_MANY, 'Message', 'group_id'),
			'messagecountbyminutes' => array(self::HAS_MANY, 'Messagecountbyminute', 'group_id'),
			'messagefiltervalues' => array(self::HAS_MANY, 'Messagefiltervalue', 'group_id'),
			'searchdocuments' => array(self::HAS_MANY, 'Searchdocument', 'group_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'logger' => 'Logger',
			'level' => 'Level',
			'message' => 'Message',
			'view' => 'View',
			'checksum' => 'Checksum',
			'status' => 'Status',
			'times_seen' => 'Times Seen',
			'last_seen' => 'Last Seen',
			'first_seen' => 'First Seen',
			'data' => 'Data',
			'score' => 'Score',
			'project_id' => 'Project',
			'time_spent_total' => 'Time Spent Total',
			'time_spent_count' => 'Time Spent Count',
			'resolved_at' => 'Resolved At',
			'active_at' => 'Active At',
			'is_public' => 'Is Public',
			'platform' => 'Platform',
			'num_comments' => 'Num Comments',
		);
	}

    public static function getList($team_slug, $project, $last_seen=0, $status=0, $limit=20){
        $criteria = new CDbCriteria;

        $criteria->select = '(UNIX_TIMESTAMP(last_seen)) AS `sort_value`, `id`, `project_id`, `logger`, `level`, `message`, `view`, `checksum`, `num_comments`, `platform`, `status`, `times_seen`, `last_seen`, `first_seen`, `resolved_at`, `active_at`, `time_spent_total`, `time_spent_count`, `score`, `is_public`, `data`';
        $criteria->addCondition("project_id = :project_id");
        $criteria->params[':project_id'] = $project->id;
        $criteria->addCondition("status = :status");
        $criteria->params[':status'] = 0;
        $criteria->addCondition("last_seen >= :last_seen");
        $criteria->params[':last_seen'] = '2013-11-13 17:37:46';
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
                    'historicalData' => array(0,0,0,0,0,0,0,0,0,0,05,345,45,43,346,7,32,23,424,42,42,13,435),
                    'isResolved' => false,
                    'levelName' => isset($error[$m->level])? $error[$m->level] : 'error',
                    'title' => $m->view,
                    'id' => $m->id,
                    'score' => $m->score,
                    'logger' => $m->logger,
                    'canResolve' => true,
                    'annotations' => array(array("count"=> 1, "label" => "users")),
                    'tags' => array(),
                    'isPublic' => false,
                    'hasSeen' => true,
                    'firstSeen' => $m->first_seen,
                    'count' =>  $m->times_seen,
                    'permalink' => "$team_slug",
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