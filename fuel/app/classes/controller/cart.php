<?php

/**
*
*/

class Controller_Cart extends Controller_App
{
	public function get_index()
	{
		$this->template->content = View::forge('shopping_cart/index');
	}

}