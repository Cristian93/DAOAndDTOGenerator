<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-05-13 07:52
 */
interface AddressDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Addres
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
 	 * @param addres primary key
 	 */
	public function delete($address_id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Address addres
 	 */
	public function insert($addres);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Address addres
 	 */
	public function update($addres);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByAddress($value);

	public function queryByAddress2($value);

	public function queryByDistrict($value);

	public function queryByCityId($value);

	public function queryByPostalCode($value);

	public function queryByPhone($value);

	public function queryByLastUpdate($value);


	public function deleteByAddress($value);

	public function deleteByAddress2($value);

	public function deleteByDistrict($value);

	public function deleteByCityId($value);

	public function deleteByPostalCode($value);

	public function deleteByPhone($value);

	public function deleteByLastUpdate($value);


}
?>