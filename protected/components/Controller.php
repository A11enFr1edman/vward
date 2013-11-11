<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{


	public $menu=array();
	public $breadcrumbs=array();

	public $team_slug;
	public $project_id;

	public $title;
	public $class;


}