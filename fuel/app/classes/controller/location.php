<?php

/**
*
*/

class Controller_Location extends Controller_App
{
	public function get_location()
	{
		$this->template->content = View::forge('location/location');
	}

}