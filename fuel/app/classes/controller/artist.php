<?php

class Controller_Artist extends Controller_App
{

	public function action_artists()
	{
		$this->template->content = View::forge('artist/artists');
	}
}