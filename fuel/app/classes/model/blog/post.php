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
		'published',
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

	/*
	* Admin blog funtions
	* 
	*/

	public function admin_blog()
	{
		return 'admin/blog';
	}

	public function admin_url()
	{
		return 'admin/article/' . $this->url;
	}

	public function admin_edit()
	{
		return 'admin/article/' . $this->url . '/edit';
	}

	public function admin_delete()
	{
		return 'admin/article/' . $this->url . '/delete';
	}

	/*
	* Misc blog functionality
	*/

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

	public function publish($property, $value, $update)
	{
		$entry = query()->where($property, $value)->find($update);
		$entry->published = 1;
		$entry->save();
	}

	public static function format_time($time)
	{
		$format = new DateTime($time);
		return date_format($format, 'M d, Y h:ia');
	}



}

