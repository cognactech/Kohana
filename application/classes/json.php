<?php defined('SYSPATH') or die('No direct script access.');

/**
 *
 *
 * @package     YouCallMD
 * @subpackage  View
 * @author      Nicholas Curtis <nich.curtis@gmail.com>
 */

class Json extends View
{
	protected $_format = FALSE;

	/**
	 * overrides view::__construct and prevents it from trying to load $file
	 *
	 * @param       string      NULL    
	 * @param   array       data to add to view
	 */
	public function __construct ($file = NULL, array $data = NULL)
	{
		if ($data !== NULL)
		{
			// Add the values to the current data 
			$this->_data = $data + $this->_data;
		}
	}

	/**
	 * adds a key to view data
	 *
	 * @param       string      key name
	 * @param   mixed       value
	 * @return      JSON
	 * @chainable
	 */
	public function set ($key, $value = NULL)
	{
		$this->_data['_data'][$key] = $value;

		return $this;
	}

	/**
	 * gets a key already assigned to view data
	 *
	 * @param       string      key name
	 * @param   mixed       default value if field is empty
	 * @return      mixed
	 */
	public function get ($key, $default=NULL)
	{
		$value = $this->_data['_data'][$key];

		if ( empty($value) AND $default !== NULL)
			$value = $default;

		return $value;
	}

	/**
	 * converts view data to json object and returns it
	 *
	 * @return  string
	 */
	public function render ($file=null, $options=array())
	{
		if ($this->_format === TRUE) {
			return $this->_format(json_encode($this->_data['_data']));
		}

		return json_encode($this->_data['_data']);
	}

	/**
	 * Turns formatting of JSON output on or off
	 *
	 * @param	bool
	 * @return	void
	 */
	public function format ($format=FALSE)
	{
		$this->_format = (bool) $format;
	}

	/**
	 * Takes in JSON strings and adds tabs/spaces/newlines
	 * so that it can be printed cleanly in human readable format
	 *
	 * @param string $json The original JSON string to process.
	 * @return string Indented version of the original JSON string.
	 */
	private function _format ($json)
	{

		$result      = '';
		$pos         = 0;
		$strLen      = strlen($json);
		$indentStr   = '  ';
		$newLine     = "\n";
		$prevChar    = '';
		$outOfQuotes = true;

		for ($i=0; $i<=$strLen; $i++)
		{
			// Grab the next character in the string.
			$char = substr($json, $i, 1);

			// Are we inside a quoted string?
			if ($char == '"' && $prevChar != '\\')
			{
				$outOfQuotes = !$outOfQuotes;
			}
			// If this character is the end of an element, 
			// output a new line and indent the next line.
			else if(($char == '}' || $char == ']') && $outOfQuotes)
			{
				$result .= $newLine;
				$pos --;
				for ($j=0; $j<$pos; $j++) {
					$result .= $indentStr;
				}
			}
			
			// Add the character to the result string.
			$result .= $char;

			// If the last character was the beginning of an element, 
			// output a new line and indent the next line.
			if (($char == ',' || $char == '{' || $char == '[') && $outOfQuotes)
			{
				$result .= $newLine;
				if ($char == '{' || $char == '[') {
					$pos ++;
				}
				
				for ($j = 0; $j < $pos; $j++) {
					$result .= $indentStr;
				}
			}
			
			$prevChar = $char;
		}

		return $result;
	}
}
