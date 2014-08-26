<?php

/**
*
*/

class Controller_Location extends Controller_App
{
	public function action_index()
	{
		$this->template->content = View::forge('location/index');
	}

}