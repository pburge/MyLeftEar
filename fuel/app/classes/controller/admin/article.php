<?php

class Controller_Admin_Article extends Controller_Admin_Base
{

	protected $post = null;

	public function before()
	{
		parent::before();

		if (! $this->post = Model_Blog_Post::get_by('url', $this->param('url')))
		{
			throw new HttpNotFoundException;
		}
	}

	public function get_view()
	{
		$this->template->content = View::forge('admin/blog/view');
		$this->template->content->post = $this->post;
	}

	public function get_delete()
	{
		$this->template->content = View::forge('admin/blog/delete');
		$this->template->content->post = $this->post;
	}

	public function post_delete()
	{
		if (! $this->post = Model_Blog_Post::get_by('url', $this->param('url')))
		{
			throw new HttpNotFoundException;
		}

		$this->post->delete();

		// redirect to admin blog view
		Response::redirect($this->post->admin_blog());
	}

	public function get_edit()
	{
		$this->template->content = View::forge('admin/blog/edit');
		$this->template->content->post = $this->post;

	}

	public function post_edit()
	{		

		if (! $this->post = Model_Blog_Post::get_by('url', $this->param('url')))
		{
			throw new HttpNotFoundException;
		}

		// if (empty($this->post->title) or empty($this->post->body))
		// {

		// }

		$config = array(
		    'path' =>  DOCROOT.'assets/img/blog_imgs/',
		    'randomize' => true,
		    'ext_whitelist' => array('img', 'jpg', 'jpeg', 'gif', 'png'),
		);
		Upload::process($config);

		$this->post->title = Input::post('post_title');
		$this->post->body = Input::post('post_body');
		$this->post->category = Input::post('post_categories');
		$this->post->post_img = Input::post('post_img');	

		// if there are any valid files
		if (Upload::is_valid())
		{
			Upload::save();
			// call a model method to update the database

			foreach (Upload::get_files() as $success_file)
			{
				// var_export($success_file);
				$this->post->post_img = $success_file['saved_as'];
			}
		}else
		{
			foreach (Upload::get_errors() as $error_file)
			{
				echo var_export($error_file);
			}
		}

		$this->post->save();

		// redirect to blog post view
		Response::redirect($this->post->url());

	}

	
}