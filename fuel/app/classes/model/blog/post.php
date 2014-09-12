<?php

class Model_Blog_Post extends Orm\Model
{
	protected static $_properties = array(
		'id',
		'user_id',
		'category_id',
		'url',
		'title',
		'body',
		'created_at',
		'category',
		'post_img',
	);

	protected static $_belongs_to = array(
	    'author' => array(
	        'key_from' => 'user_id',
	        'model_to' => 'Model_User',
	        'key_to' => 'id',
	        'cascade_save' => true,
	        'cascade_delete' => false,
	    ),
	);

	protected static $_observers = array(
	    'Orm\\Observer_CreatedAt' => array(
	        'events' => array('before_insert'),
	        'mysql_timestamp' => true,
	        'property' => 'created_at',
	        'overwrite' => true,
	    ),
	    'Orm\\Observer_Slug' => array(
	            'events' => array('before_insert'),
	            'source' => 'title',  // property used to base the slug on, may also be array of properties
	            'property' => 'url', // property to set the slug on when empty
	            'separator' => '-',   // property to set the separator
	            'unique' => true,     // property to require uniqueness or not
	        ),
	);

	public function url()
	{
		return 'blog/' . $this->url;
	}

	public static function get_desc($property,$value)
	{
		return static::query()->where($property, $value)->order_by('created_at', 'desc');
	}

	public static function get_by($property, $value)
	{
		return static::query()->where($property, $value)->get_one();
	}



}

