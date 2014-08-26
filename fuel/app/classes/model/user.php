<?php

/**
 *
 */
class Model_User extends Auth\Model\Auth_User
{
	/**
	 * 
	 */
	protected static $_has_one = array(
	    'artist' => array(
	        'key_from' => 'id',
	        'model_to' => 'Model_Artist',
	        'key_to' => 'user_id',
	        'cascade_save' => true,
	        'cascade_delete' => false,
	    ),
	    'author' => array(
	        'key_from' => 'id',
	        'model_to' => 'Model_Blog_Post',
	        'key_to' => 'user_id',
	        'cascade_save' => true,
	        'cascade_delete' => false,
	    ),
	);

	/**
	 *
	 */
	public function profile_url()
	{
		
		return 'profile/' . $this->username;
	}
	
	/**
	 *
	 */
	public static function get_by_id($id)
	{
		return static::query()->where('id', $id)->get_one();
	}

	/**
	 *
	 */
	public static function get_by($property, $value)
	{
		return static::query()->where($property, $value)->get_one();
	}
}