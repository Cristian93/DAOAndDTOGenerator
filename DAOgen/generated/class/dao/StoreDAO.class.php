<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-05-13 07:52
 */
interface StoreDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Store
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
 	 * @param store primary key
 	 */
	public function delete($store_id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Store store
 	 */
	public function insert($store);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Store store
 	 */
	public function update($store);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByManagerStaffId($value);

	public function queryByAddressId($value);

	public function queryByLastUpdate($value);


	public function deleteByManagerStaffId($value);

	public function deleteByAddressId($value);

	public function deleteByLastUpdate($value);


}
?>