<?php

class Controller_Commission extends Controller_App
{

	public function action_commissions()
	{
		$this->template->content = View::forge('commission/commissions');
	}
}