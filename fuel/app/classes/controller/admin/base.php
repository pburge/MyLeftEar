<?php

/**
 *
 */
abstract class Controller_Admin_Base extends Controller_App
{

	public function before()
	{
		parent::before();

		if(!$this->is_admin())
		{
			throw new HttpNotFoundException;
		}

	}
}