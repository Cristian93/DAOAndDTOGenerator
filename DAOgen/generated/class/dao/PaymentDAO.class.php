<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-05-13 07:52
 */
interface PaymentDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Payment
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
 	 * @param payment primary key
 	 */
	public function delete($payment_id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Payment payment
 	 */
	public function insert($payment);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Payment payment
 	 */
	public function update($payment);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCustomerId($value);

	public function queryByStaffId($value);

	public function queryByRentalId($value);

	public function queryByAmount($value);

	public function queryByPaymentDate($value);

	public function queryByLastUpdate($value);


	public function deleteByCustomerId($value);

	public function deleteByStaffId($value);

	public function deleteByRentalId($value);

	public function deleteByAmount($value);

	public function deleteByPaymentDate($value);

	public function deleteByLastUpdate($value);


}
?>