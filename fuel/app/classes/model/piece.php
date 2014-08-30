<?php

/**
 * 
 */
class Model_Piece extends Orm\Model
{
	/**
	 * 
	 */
	protected static $_properties = array(
		'id',
		'uid',
		'artist_id',
		'image',
		'price',
		'name',
		'medium',
		'created_at',
		'updated_at',
	);

	/**
	 * 
	 */
	protected static $_belongs_to = array(
	    'artist' => array(
	        'key_from' => 'artist_id',
	        'model_to' => 'Model_Artist',
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
		// return 'artist/' . $this->user->username . '/' . $this->user->piece->name;
		return $this->artist->url() . '/' . $this->uid;

	}




}