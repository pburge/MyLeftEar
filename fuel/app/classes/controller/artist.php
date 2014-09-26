<?php

/**
 * 
 */
class Controller_Artist extends Controller_App
{
	/**
	 *
	 */
	public function before()
	{
		parent::before();

		if (! $this->artist = Model_Artist::get_by_username($this->param('url')))
		{
			throw new HttpNotFoundException;
		}
	}

	/**
	 *  Get single artist.
	 */
	public function get_index()
	{

		$this->template->content = View::forge('artist/index');
		$this->template->content->artist = $this->artist;
	}

	/**
	 * Get view for art piece by artist.
	 */
	public function get_view()
	{
		if (! $piece = $this->artist->get_piece_by_uid($this->param('piece')))
		{
			throw new HttpNotFoundException;
		}

		$this->template->content = View::forge('artist/view');
		$this->template->content->piece = $piece;

	}

	// public function get_profile()
	// {

	// 	$this->template->content = View::forge('artist/profile/index');
	// 	$this->template->content->artist = $this->artist;
	// }

}