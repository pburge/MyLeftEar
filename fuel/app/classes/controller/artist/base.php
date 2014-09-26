<?php

/**
 *
 */
abstract class Controller_Artist_Base extends Controller_App
{

	public function before()
	{
		parent::before();

		if(!$this->is_artist())
		{
			throw new HttpNotFoundException;
		}

	}
}