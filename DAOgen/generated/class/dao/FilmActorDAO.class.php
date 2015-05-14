<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-05-13 07:52
 */
interface FilmActorDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return FilmActor 
	 */
	public function load($actorId, $filmId);

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
 	 * @param filmActor primary key
 	 */
	public function delete($actorId, $filmId);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param FilmActor filmActor
 	 */
	public function insert($filmActor);
	
	/**
 	 * Update record in table
 	 *
 	 * @param FilmActor filmActor
 	 */
	public function update($filmActor);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByLastUpdate($value);


	public function deleteByLastUpdate($value);


}
?>