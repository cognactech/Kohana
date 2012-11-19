<?php defined('SYSPATH') or die('No direct script access.');

/**
 *
 *
 *
 *
 */

class Controller_JSON extends Application
{
	/**
	 *
	 *
	 *
	 */
	public function before ()
	{
		$this->template = new Json('json:');

		parent::before();
	}

	/**
	 *
	 *
	 *
	 */
	public function after ()
	{
		parent::after();

		// if (Kohana::$profiling === TRUE) {
		// 	$this->template->set('profiler', (string) View::factory('profiler/stats'));
		// }

		// add template contents to response body
		$this->response->body($this->template->render());
	}

	public function action_error ()
	{
		$code		=	$this->response->status;
		$message	=	$this->template->get('message');

		$this->template	->set('status', 'error')
					->set('code', $code)
					->set('message', $message);
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
