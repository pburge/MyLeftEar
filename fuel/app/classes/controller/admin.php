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

	
}