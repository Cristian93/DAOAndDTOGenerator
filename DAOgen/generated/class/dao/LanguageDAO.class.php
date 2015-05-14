<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-05-13 07:52
 */
interface LanguageDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Language
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param language primary key
 	 */
	public function delete($language_id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Language language
 	 */
	public function insert($language);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Language language
 	 */
	public function update($language);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByName($value);

	public function queryByLastUpdate($value);


	public function deleteByName($value);

	public function deleteByLastUpdate($value);


}
?>