<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-05-13 07:52
 */
interface ActorDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Actor
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
 	 * @param actor primary key
 	 */
	public function delete($actor_id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Actor actor
 	 */
	public function insert($actor);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Actor actor
 	 */
	public function update($actor);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByFirstName($value);

	public function queryByLastName($value);

	public function queryByLastUpdate($value);


	public function deleteByFirstName($value);

	public function deleteByLastName($value);

	public function deleteByLastUpdate($value);


}
?>