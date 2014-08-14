<?php

/**
 *
 */
class Controller_Main extends Controller_App
{
	/**
	 * The basic welcome message
	 *
	 */
	public function action_index()
	{
		// $this->require_authentication();

		

		$this->template->content = View::forge('main/index');
	}

}