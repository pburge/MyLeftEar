<?php

/**
 *
 */
class Controller_Admin extends Controller_Admin_Base
{

	/*
	*
	*/

	public function get_index()
	{
		$this->template->content = View::forge('admin/index');
		$this->template->content->admin = $this->admin;
	}

	public function get_blog()
	{

		$posts = Model_Blog_Post::find('all');

		$this->template->content = View::forge('admin/blog');
		$this->template->content->posts = $posts;


	}


	/*
	*
	*/

	public function post_preview()
	{

		$post = new Model_Blog_Post;

		$post->user_id = $this->user->id;
		$post->category_id = 1;
		$post->title = Input::post('post_title');
		$post->body = Input::post('post_body');
		$post->category = Input::post('post_categories');
		$post->post_img = Input::post('post_img');
		$post->published = 1;
		

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

				// if there are any valid files
				if (Upload::is_valid())
				{
					Upload::save();
				    // call a model method to update the database

				    foreach (Upload::get_files() as $success_file)
				    {
						//var_export($success_file);  	
						$post->post_img = $success_file['saved_as'];
				    }
				}else
				{
					foreach (Upload::get_errors() as $error_file)
					{
					    // $file is an array with all file information,
					    // $file['errors'] contains an array of all error occurred
					    // each array element is an an array containing 'error' and 'message'

						echo var_export($error_file);
					}
				}



			}
		}
		catch (Exception $e)
		{
			// handle error
			// throw new Exception("Error Processing Request", 1);
			 echo '<br><br><br><br>';
			 echo 'CAUGHT EXCEPTION: ',  $e->getMessage(), "\n";
		}

		$post->save();

		// redirect to blog post view
		Response::redirect($post->url());

	}

	
}