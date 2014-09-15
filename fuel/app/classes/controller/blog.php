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

	public function get_delete()
	{
		if (! $post = Model_Blog_Post::get_by('url', $this->param('url')))
		{
			throw new HttpNotFoundException;
		}

		$this->template->content = View::forge('blog/delete');
		$this->template->content->post = $post;
	}

	public function post_delete()
	{
		$post = new Model_Blog_Post;

		// $entry = $post->find($post->id);
		// $entry->published = '0';	
		// $entry->save();

		try
		{
			$entry = $post->find($post->id);
		}
		catch (Exception $e)
		{
			// handle error
			 echo '<br><br><br><br>';
			 echo 'CAUGHT EXCEPTION: ',  $e->getMessage(), "\n";
		}
		
		$entry->delete();

		// redirect to blog post view
		Response::redirect('blog/index');
	}

	public function get_edit()
	{
		if (! $post = Model_Blog_Post::get_by('url', $this->param('url')))
		{
			throw new HttpNotFoundException;
		}

		$this->template->content = View::forge('blog/edit');
		$this->template->content->post = $post;

	}

	public function post_edit()
	{
		$post = new Model_Blog_Post;
		// $post->title = Input::post('post_title');
		// $post->body = Input::post('post_body');
		// $post->category = Input::post('post_categories');
		// $post->post_img = Input::post('post_img');	



		$config = array(
		    'path' =>  DOCROOT.'assets/img/blog_imgs/',
		    'randomize' => true,
		    'ext_whitelist' => array('img', 'jpg', 'jpeg', 'gif', 'png'),
		);

		try
		{
			if (!$post->title == null || $post->body == null)
			{
				Upload::process($config);

				// $updated = $post->find($this->post->id);
				$updated = $post->find(90);
				// $updated = Model_Blog_Post::find('id');
				$updated->title = Input::post('post_title');
				$updated->body = Input::post('post_body');
				$updated->category = Input::post('post_categories');
				$updated->post_img = Input::post('post_img');	

				// if there are any valid files
				if (Upload::is_valid())
				{
					Upload::save();
					// call a model method to update the database

					foreach (Upload::get_files() as $success_file)
					{
						// var_export($success_file);  	
						$post->post_img = $success_file['saved_as'];
					}
				}else
				{
					foreach (Upload::get_errors() as $error_file)
					{
						echo var_export($error_file);
					}
				}

				$updated->save();

			}
		}
		catch (Exception $e)
		{
			// handle error
			 echo '<br><br><br><br>';
			 echo 'CAUGHT EXCEPTION: ',  $e->getMessage(), "\n";
		}

		// redirect to blog post view
		$this->template->content = View::forge('admin/blog_post');
		$this->template->content->post = $post;
		// Response::redirect($post->url());

	}

	
}