<?php

/**
 * 
 */
class Model_Artist extends Orm\Model
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

	public function url()
	{
		return 'artist/' . $this->user->username;
	}

	/**
	 *
	 * @param string username
	 *
	 * @return Model_Artist
	 */
	public static function get_by_username($username)
	{
		if (! $user = Model_User::get_by('username', $username))
		{
			return null;
		}

		return static::query()->where('user_id', $user->id)->get_one();
	}



}