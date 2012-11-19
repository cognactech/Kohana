<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 
 * 
 * @package		yc-md
 * @category		config
 * @author		Nicholas Curtis		<nich.curtis@gmail.com>
 */
class Model_Config extends Model_MySQL
{
	/**
	 * holds all config key and values from database
	 * 
	 * @var		array
	 */
	protected $config = array();
	
	/**
	 * loads configuration from database
	 *
	 * @return		void
	 */
	public function __construct ()
	{
		$query = DB::Query(Database::SELECT, 'SELECT `key`, `value` FROM config');
		
		$results = $query->execute('default-slave');

		foreach ($results AS $result)
		{
			$this->config[$result['key']] = $result['value'];
		}
	}
	
	/**
	 * MAGIC METHOD called when property does not exist in config class
	 * will load property values and return them based off of $column
	 *
	 * @param		string			$column
	 * @return 		mixed
	 */
	public function __get ($column)
	{
		if (array_key_exists($column, $this->config)) {
			return $this->config[$column];
		}
	}
	
	/**
	 * MAGIC METHOD called when property does not exist in config class
	 * will save property values in config table based off of $column
	 *
	 * @param		string			$column
	 * @param		string			$value
	 * @return 		void
	 */
	public function __set ($column, $value)
	{
		if (array_key_exists($column, $this->config))
		{
			$query = DB::Query(Database::UPDATE, 'UPDATE `config` SET `value` = :value WHERE `key` = :key');
			
			$query	->param(':key', $column)
				->param(':value', $value);
			
			$query->execute('default');
		}
	}

	/**
	 * If $value is null, returns the value of $column in the object.
	 * If $value is not null, it will set the value of $column to $value.
	 * @param string $column 
	 * @param mixed $value 
	 * @return mixed
	 */
	public function param($column, $value=null) {}

	/**
	 * This will store the object using the appropriate driver.
	 * @return boolean
	 */
	public function save() {}

	/**
	 * Returns whether the object has been saved.
	 * When changing the value of a column this is set to false.
	 * @return boolean
	 */
	public function saved() {}

	/**
	 * Attempts to load object with primary key $id.
	 * @param mixed $id 
	 * @return Model
	 */
	public function load($id) {}

	/**
	 * Returns whether the object is loaded or not.
	 * @return boolean
	 */
	public function loaded() {}

	/**
	 * Deletes the object and removes the cached object using the appropriate driver.
	 * Returns false is the object was not removed.
	 * @return boolean
	 */
	public function delete() {}
}
