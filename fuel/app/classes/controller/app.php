<?php

/**
 *
 */
abstract class Controller_App extends Controller_Template
{
	/**
	 *
	 */
	protected $auth;

	/**
	 *
	 */
	protected $user = null;

	/**
	 *
	 */
	public function before()
	{
		parent::before();

		$this->_init_auth();
		$this->_init_user();

		$this->init_template();		
	}

	/**
	 * @return bool
	 */
	protected function is_authenticated()
	{
		return $this->user !== null;
	}

	/**
	 * rediect user to login page if not authenticated
	 */
	protected function require_authentication()
	{
		if (! $this->is_authenticated())
		{
			Response::redirect('login');
		}
	}

	/**
	 *
	 */
	protected function init_template()
	{
		$this->template->header = View::forge('template/nav');
		$this->template->footer = View::forge('template/footer');

		$this->template->set_global('auth_user', $this->user, false);
	}



	/**
	 *
	 */
	private function _init_auth()
	{
		$this->auth = Auth::instance();
	}

	/**
	 *
	 */
	private function _init_user()
	{
		if ($this->auth->check() and $user_id = $this->auth->get_user_id()[0])
		{
			$this->user = Model_User::get_by_id($user_id);
		}
	}
}