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
	    'piece' => array(
	        'key_from' => 'user_id',
	        'model_to' => 'Model_User',
	        'key_to' => 'id',
	        'cascade_save' => true,
	        'cascade_delete' => false,
	    ),
	);

	protected static $_has_many = array(
	    'pieces' => array(
	        'key_from' => 'id',
	        'model_to' => 'Model_Piece',
	        'key_to' => 'artist_id',
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
	 * @return Orm\Query
	 */
	protected function query_pieces()
	{
		return Model_Piece::query()->where('artist_id', $this->id);
	}


	public function get_piece_by_uid($uid)
	{
		return $this->query_pieces()->where('uid', $uid)->get_one();
	}

	public function get_pieces()
	{
		return $this->query_pieces()->get();
	}

	public function get_recent_pieces()
	{
		return $this->query_pieces()->order_by('created_at', 'desc')->get();
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


	public static function get_by($property,$value)
	{
		return static::query()->where($property, $value)->get_one();
	}


}