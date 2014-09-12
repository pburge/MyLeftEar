<?php

class Controller_Blog extends Controller_App
{

	public function get_index()
	{
		$posts = Model_Blog_Post::query()->order_by('created_at', 'desc')->get();

		$this->template->content = View::forge('blog/index');

		$this->template->content->posts = $posts;

	}

	public function get_view()
	{
		if (! $post = Model_Blog_Post::get_by('url', $this->param('url')))
		{
			throw new HttpNotFoundException;
		}

		$this->template->content = View::forge('blog/view');
		$this->template->content->post = $post;

	}

}