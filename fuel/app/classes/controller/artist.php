<?php

/**
 * 
 */
class Controller_Artist extends Controller_App
{
	/**
	 * 
	 */
	public function get_index()
	{
		$this->template->content = View::forge('artist/index');
		$this->template->content->artists = Model_Artist::query()->get();
	}

	/**
	 * 
	 */
	public function get_view()
	{
		if (! $artist = Model_Artist::get_by_username($this->param('url')))
		{
			throw new HttpNotFoundException;
		}

		$this->template->content = View::forge('artist/view');
		$this->template->content->artist = $artist;
	}

}