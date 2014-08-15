<?php

/**
 *
 */
class Controller_Profile extends Controller_App
{
	/**
	 *
	 */
	public function action_view()
	{
		if (! $user = Model_User::get_by('username', $this->param('username')))
		{
			throw new HttpNotFoundException;
		}
		
		$this->template->content = View::forge('profile/view');
		$this->template->content->profile_user = $user;
	}
}