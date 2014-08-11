<?php

class Controller_Main extends Controller
{

	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		// create the layout view
		$view = View::forge('main/index');

		//assign views as variables, lazy rendering
		$view->header = View::forge('main/nav');
		$view->content = View::forge('main/main');
		$view->footer = View::forge('main/footer');

		// return the view object to the Request
		return $view;
	}

	public function action_change()
	{
		$view = View::forge('main/index');

		$view->header = View::forge('main/nav');
		$view->content = View::forge('main/change_log/change_log');
		$view->footer = View::forge('main/footer');

		return $view;

	}

}