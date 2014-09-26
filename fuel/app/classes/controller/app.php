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
	protected $admin = null;
	protected $artist = null;

	/**
	 *
	 */
	public function before()
	{
		parent::before();

		$this->_init_auth();
		$this->_init_user();
		$this->_init_admin();
		$this->_init_artist();

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
	 * @return bool
	 */
	protected function is_admin()
	{
		return $this->admin !== null;
	}

	/**
	 * @return bool
	 */
	protected function is_artist()
	{
		return $this->artist !== null;
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
		if ($this->auth->check() and $user_id = $this->auth->get_user_id()[1])
		{
			$this->user = Model_User::get_by_id($user_id);
		}
	}

	/**
	 *
	 */
	private function _init_admin()
	{
		if ($this->is_authenticated())
		{
			$this->admin = Model_Admin::get_by('user_id', $this->user->id);
		}
	}

	/**
	 *
	 */
	private function _init_artist()
	{
		if ($this->is_authenticated())
		{
			$this->artist = Model_Artist::get_by('user_id', $this->user->id);
		}
	}
}