<?php

/**
 * 
 */
class Model_Admin extends Orm\Model
{
	/**
	 * 
	 */
	protected static $_properties = array(
		'id',
		'user_id',
		'created_at',
		'updated_at',
	);

	/**
	 * 
	 */
	protected static $_belongs_to = array(
	    'user' => array(
	        'key_from' => 'user_id',
	        'model_to' => 'Model_User',
	        'key_to' => 'id',
	        'cascade_save' => true,
	        'cascade_delete' => false,
	    ),
	    'author' => array(
	        'key_from' => 'user_id',
	        'model_to' => 'Model_Post',
	        'key_to' => 'id',
	        'cascade_save' => true,
	        'cascade_delete' => false,
	    ),
	);

	/**
	 * 
	 */
	protected static $_observers = array(
	    'Orm\\Observer_CreatedAt' => array(
	        'events' => array('before_insert'),
	        'mysql_timestamp' => true,
	    ),
	    'Orm\\Observer_UpdatedAt' => array(
	        'events' => array('before_save'),
	        'mysql_timestamp' => true,
	    ),
	);

	/**
	 *
	 * @param string username
	 *
	 * @return Model_Admin
	 */
	public static function get_by($property,$value)
	{
		return static::query()->where($property, $value)->get_one();
	}



}