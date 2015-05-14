<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-05-13 07:52
 */
interface CityDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return City
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
 	 * @param city primary key
 	 */
	public function delete($city_id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param City city
 	 */
	public function insert($city);
	
	/**
 	 * Update record in table
 	 *
 	 * @param City city
 	 */
	public function update($city);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCity($value);

	public function queryByCountryId($value);

	public function queryByLastUpdate($value);


	public function deleteByCity($value);

	public function deleteByCountryId($value);

	public function deleteByLastUpdate($value);


}
?>