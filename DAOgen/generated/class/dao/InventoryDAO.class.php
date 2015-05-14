<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-05-13 07:52
 */
interface InventoryDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Inventory
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
 	 * @param inventory primary key
 	 */
	public function delete($inventory_id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Inventory inventory
 	 */
	public function insert($inventory);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Inventory inventory
 	 */
	public function update($inventory);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByFilmId($value);

	public function queryByStoreId($value);

	public function queryByLastUpdate($value);


	public function deleteByFilmId($value);

	public function deleteByStoreId($value);

	public function deleteByLastUpdate($value);


}
?>