<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-05-13 07:52
 */
interface FilmTextDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return FilmText
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
 	 * @param filmText primary key
 	 */
	public function delete($film_id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param FilmText filmText
 	 */
	public function insert($filmText);
	
	/**
 	 * Update record in table
 	 *
 	 * @param FilmText filmText
 	 */
	public function update($filmText);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTitle($value);

	public function queryByDescription($value);


	public function deleteByTitle($value);

	public function deleteByDescription($value);


}
?>