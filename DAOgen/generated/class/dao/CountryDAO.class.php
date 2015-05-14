<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-05-13 07:52
 */
interface CountryDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Country
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
 	 * @param country primary key
 	 */
	public function delete($country_id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Country country
 	 */
	public function insert($country);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Country country
 	 */
	public function update($country);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCountry($value);

	public function queryByLastUpdate($value);


	public function deleteByCountry($value);

	public function deleteByLastUpdate($value);


}
?>