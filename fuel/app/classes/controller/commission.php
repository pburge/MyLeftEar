<?php

class Controller_Commission extends Controller_App
{

	public function action_index()
	{
		$this->template->content = View::forge('commission/index');
	}
}