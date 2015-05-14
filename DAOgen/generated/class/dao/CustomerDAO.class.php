<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-05-13 07:52
 */
interface CustomerDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Customer
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
 	 * @param customer primary key
 	 */
	public function delete($customer_id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Customer customer
 	 */
	public function insert($customer);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Customer customer
 	 */
	public function update($customer);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByStoreId($value);

	public function queryByFirstName($value);

	public function queryByLastName($value);

	public function queryByEmail($value);

	public function queryByAddressId($value);

	public function queryByActive($value);

	public function queryByCreateDate($value);

	public function queryByLastUpdate($value);


	public function deleteByStoreId($value);

	public function deleteByFirstName($value);

	public function deleteByLastName($value);

	public function deleteByEmail($value);

	public function deleteByAddressId($value);

	public function deleteByActive($value);

	public function deleteByCreateDate($value);

	public function deleteByLastUpdate($value);


}
?>