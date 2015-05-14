<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-05-13 07:52
 */
interface FilmCategoryDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return FilmCategory 
	 */
	public function load($filmId, $categoryId);

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
 	 * @param filmCategory primary key
 	 */
	public function delete($filmId, $categoryId);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param FilmCategory filmCategory
 	 */
	public function insert($filmCategory);
	
	/**
 	 * Update record in table
 	 *
 	 * @param FilmCategory filmCategory
 	 */
	public function update($filmCategory);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByLastUpdate($value);


	public function deleteByLastUpdate($value);


}
?>