<?php

class Controller_Admin_Blog extends Controller_Admin_Base
{

	public function get_index()
	{
		$posts = Model_Blog_Post::query()->order_by('created_at', 'desc')->get();
		$this->template->content = View::forge('admin/blog/index');
		$this->template->content->posts = $posts;
	}
	
}