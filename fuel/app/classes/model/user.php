<?php

/**
 *
 */
class Model_User extends Auth\Model\Auth_User
{


	/**
	 *
	 */
	public function profile_url()
	{
		return 'user/' . $this->username;
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