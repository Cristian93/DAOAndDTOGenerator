<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-05-13 07:52
 */
interface RentalDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Rental
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
 	 * @param rental primary key
 	 */
	public function delete($rental_id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Rental rental
 	 */
	public function insert($rental);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Rental rental
 	 */
	public function update($rental);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByRentalDate($value);

	public function queryByInventoryId($value);

	public function queryByCustomerId($value);

	public function queryByReturnDate($value);

	public function queryByStaffId($value);

	public function queryByLastUpdate($value);


	public function deleteByRentalDate($value);

	public function deleteByInventoryId($value);

	public function deleteByCustomerId($value);

	public function deleteByReturnDate($value);

	public function deleteByStaffId($value);

	public function deleteByLastUpdate($value);


}
?>