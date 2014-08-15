<?php

/**
 *
 */
class Controller_User extends Controller_App
{
	/**
	 *
	 */
	public function action_user()
	{
		
		$this->template->content = View::forge('user/logged_in_user');
	}
}