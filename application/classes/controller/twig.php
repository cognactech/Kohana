<?php defined('SYSPATH') or die('No direct script access.');

/**
 *
 *
 *
 *
 */

class Controller_Twig extends Application
{
	/**
	 * Loads the template view object
	 *
	  * @return	void
	 */
	public function before()
	{
		if ($this->template === NULL)
		{
			// Load the template
			$this->template = $this->template_name($this->request->controller(), $this->request->action());
		}

		$this->template = Twig_View::factory($this->template);

		// run parent before method after twig is loaded
		// so template is avaiable to entire application
		parent::before();
	}

	/**
	 *
	 * @param	string		$controller
	 * @param	string		$action
	 * @return	void
	 */
	protected function template_name ($controller, $action)
	{
		$path	=	str_replace('controller_', '', strtolower($controller));
		$path	=	str_replace('_', '/', $path);
		$file	=	str_replace('action_', '', strtolower($action));

		return $path . '/' . $file;
	}

	/**
	 * Renders the template view object
	 *
	  * @return	void
	 */
	public function after()
	{
		parent::after();

		$this->template->set('base_url', BASEURL);

		if (Kohana::$profiling === TRUE) {
			$this->template->set('profiler', View::factory('profiler/stats'));
		}
		
		// add template contents to response body
		$this->response->body($this->template->render());
	}

	public function action_error ()
	{
		$code = $this->response->status;
		$message = $this->template->message;

		$this->template = Twig_View::factory('error/'.$code);
		$this->template->set('message', $message);
	}

	/**
	 * 
	 *
	 *
	 */
	public function action_index ()
	{
		$this->template->set('hello', 'world');
	}
}
