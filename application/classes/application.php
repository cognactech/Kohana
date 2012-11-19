<?php defined('SYSPATH') or die('No direct script access.');

/**
 *
 *
 *
 *
 */

abstract class Application extends Controller
{
	/**
	 * @var		Deputy
	 */
	protected $Deputy;

	/**
	 * @var  string
	 */
	public $template = NULL;

	/**
	 *
	 */
	public function before ()
	{
		parent::before();

		// load deputy library, ACL
		$this->Deputy = Deputy::instance();

		// load config model, access to mysql config
		$this->config = Model::factory('config');

		// load global allowed routes
		$global_access = Kohana::$config->load('access')->as_array();
		$this->Deputy->set_role('user', $global_access);

		// check for authenticated user
		$this->AuthUser = Auth::instance()->get_user(false);

		if ($this->AuthUser !== FALSE)
		{
			// get logged in users allowed and disallowed routes
			$this->Deputy->set_role('user', $this->AuthUser['access']);
		}

		// check to see if user has full access to controller
		$allowed = $this->Deputy->allowed($this->request->controller());
		
		if ($allowed !== TRUE)
		{
			// check again to see if they have access to current action
			$allowed = $this->Deputy->allowed($this->request->controller() . '/' . $this->request->action());

			if ($allowed !== TRUE) {
				// 401 Unauthorized Error
				return $this->error(401);
			}
		}
	}

	protected function error ($code, $message=null)
	{
		 $this->response->status = $code;
		 
		 $this->template->set('message', $message);
		 $this->template->set('status', 'error');

		 $this->request->action('error');
	}

	/**
	 * Renders view and displays output for error
	 */
	abstract public function action_error ();

	/**
	 *
	 *
	 *
	 */
	public function after ()
	{
		$this->template->set('version', $this->config->version);

		$format = FALSE;

		if (array_key_exists('json_print_pretty', $_GET)) {
			$format = TRUE;
		}

		$this->template->format($format);

		parent::after();
	}
}
