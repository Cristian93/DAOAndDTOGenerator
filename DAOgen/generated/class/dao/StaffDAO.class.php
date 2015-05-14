<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-05-13 07:52
 */
interface StaffDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Staff
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
 	 * @param staff primary key
 	 */
	public function delete($staff_id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Staff staff
 	 */
	public function insert($staff);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Staff staff
 	 */
	public function update($staff);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByFirstName($value);

	public function queryByLastName($value);

	public function queryByAddressId($value);

	public function queryByPicture($value);

	public function queryByEmail($value);

	public function queryByStoreId($value);

	public function queryByActive($value);

	public function queryByUsername($value);

	public function queryByPassword($value);

	public function queryByLastUpdate($value);


	public function deleteByFirstName($value);

	public function deleteByLastName($value);

	public function deleteByAddressId($value);

	public function deleteByPicture($value);

	public function deleteByEmail($value);

	public function deleteByStoreId($value);

	public function deleteByActive($value);

	public function deleteByUsername($value);

	public function deleteByPassword($value);

	public function deleteByLastUpdate($value);


}
?>