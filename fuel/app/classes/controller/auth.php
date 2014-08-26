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
		$group 	 = 3;


		try
		{
			if (! $user_id = $this->auth->create_user($username, $password, $email,$group))
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

	public function get_login()
	{
		$this->template->content = View::forge('auth/login');
	}

	public function post_login()
	{
		$username = Input::post('username');
		$password = Input::post('password');

		try
		{
			if (! $user_id = $this->auth->login($username, $password))
			{
				// handle error
				Response::redirect('/#error-1');
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

	public function get_patron()
	{
		$this->template->content = View::forge('auth/register/patron');
	}

	public function get_logout()
	{
		$this->auth->logout();
		Response::redirect('/#logged_out');
	}

}