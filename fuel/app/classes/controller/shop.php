<?php

/**
*
*/

class Controller_Shop extends Controller_App
{
	public function get_shop()
	{
		$this->template->content = View::forge('shopping_cart/cart');
	}

}