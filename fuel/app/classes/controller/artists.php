<?php

/**
 * 
 */
class Controller_Artists extends Controller_App
{
	/**
	 *  Get artist list.
	 */
	public function get_index()
	{
		$this->template->content = View::forge('artists/index');
		$this->template->content->artists = Model_Artist::query()->get();
	}

}