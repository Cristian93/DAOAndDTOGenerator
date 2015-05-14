<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-05-13 07:52
 */
interface FilmDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Film
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
 	 * @param film primary key
 	 */
	public function delete($film_id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Film film
 	 */
	public function insert($film);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Film film
 	 */
	public function update($film);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTitle($value);

	public function queryByDescription($value);

	public function queryByReleaseYear($value);

	public function queryByLanguageId($value);

	public function queryByOriginalLanguageId($value);

	public function queryByRentalDuration($value);

	public function queryByRentalRate($value);

	public function queryByLength($value);

	public function queryByReplacementCost($value);

	public function queryByRating($value);

	public function queryBySpecialFeatures($value);

	public function queryByLastUpdate($value);


	public function deleteByTitle($value);

	public function deleteByDescription($value);

	public function deleteByReleaseYear($value);

	public function deleteByLanguageId($value);

	public function deleteByOriginalLanguageId($value);

	public function deleteByRentalDuration($value);

	public function deleteByRentalRate($value);

	public function deleteByLength($value);

	public function deleteByReplacementCost($value);

	public function deleteByRating($value);

	public function deleteBySpecialFeatures($value);

	public function deleteByLastUpdate($value);


}
?>