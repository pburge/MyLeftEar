<?php

/**
 *
 */

class Controller_Dev extends Controller_App
{
	/**
	 *
	 */
	public function action_change()
	{
		$this->template->content = View::forge('change_log/change_log');
	}
	public function action_debug()
	{
		$this->template->content = View::forge('change_log/debug');
	}
}