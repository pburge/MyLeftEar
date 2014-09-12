<?php

/**
 *
 */
class Controller_Profile extends Controller_App
{
	/**
	 *
	 */
	public function get_index()
	{
		$this->template->content = View::forge('profile/index');
	}
	public function get_patron()
	{
		$this->template->content = View::forge('profile/patron');
	}


	
}