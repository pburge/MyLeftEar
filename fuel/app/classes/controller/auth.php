<?php

/**
 *
 */
class Controller_Auth extends Controller_App
{
	/**
	 * The basic welcome message
	 *
	 */
	public function get_register()
	{
		$this->template->content = View::forge('auth/register/user');
	}

	public function post_register()
	{
		$email     = Input::post('email');
		$username  = Input::post('username');
		$password  = Input::post('password');


		try
		{
			if (! $user_id = $this->auth->create_user($username, $password, $email))
			{
				// handle error
				Response::redirect('/#error-1');
			}
			elseif (! $this->auth->force_login($user_id))
			{
				// handle error
				Response::redirect('/#error-2');
			}
			else
			{
				Response::redirect('/#success');
			}
		}
		catch (SimpleUserUpdateException $e)
		{
			// handle error
			Response::redirect('/#error-3');
		}

		
		
	}

}