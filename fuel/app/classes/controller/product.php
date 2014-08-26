<?php

/**
 *
 */

class Controller_Product extends Controller_App
{
	/**
	 *
	 */
	public function action_list()
	{
		$this->template->content = View::forge('product_type/list');
	}
	public function action_paintings()
	{
		$this->template->content = View::forge('product_type/painting');
	}
	public function action_prints()
	{
		$this->template->content = View::forge('product_type/prints');
	}
	public function action_photography()
	{
		$this->template->content = View::forge('product_type/photography');
	}
	public function action_digital()
	{
		$this->template->content = View::forge('product_type/digital');
	}
}