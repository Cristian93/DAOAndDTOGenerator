<?php
/**
 * Class that operate on table 'film_category'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-13 07:52
 */
class FilmCategoryMySqlDAO implements FilmCategoryDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return FilmCategoryMySql 
	 */
	public function load($filmId, $categoryId){
		$sql = 'SELECT * FROM film_category WHERE film_id = ?  AND category_id = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($filmId);
		$sqlQuery->setNumber($categoryId);

		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM film_category';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM film_category ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param filmCategory primary key
 	 */
	public function delete($filmId, $categoryId){
		$sql = 'DELETE FROM film_category WHERE film_id = ?  AND category_id = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($filmId);
		$sqlQuery->setNumber($categoryId);

		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param FilmCategoryMySql filmCategory
 	 */
	public function insert($filmCategory){
		$sql = 'INSERT INTO film_category (last_update, film_id, category_id) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($filmCategory->getLastUpdate());

		
		$sqlQuery->setNumber($filmCategory->filmId);

		$sqlQuery->setNumber($filmCategory->categoryId);

		$this->executeInsert($sqlQuery);	
		//$filmCategory->id = $id;
		//return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param FilmCategoryMySql filmCategory
 	 */
	public function update($filmCategory){
		$sql = 'UPDATE film_category SET last_update = ? WHERE film_id = ?  AND category_id = ? ';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($filmCategory->getLastUpdate());

		
		$sqlQuery->setNumber($filmCategory->filmId);

		$sqlQuery->setNumber($filmCategory->categoryId);

		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM film_category';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

  public function queryByLastUpdate($value){
    $sql = 'SELECT * FROM film_category WHERE last_update = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }


  public function deleteByLastUpdate($value){
    $sql = 'DELETE FROM film_category WHERE last_update = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }


	
	/**
	 * Read row
	 *
	 * @return FilmCategoryMySql 
	 */
	protected function readRow($row){
		$filmCategory = new FilmCategory();
		
		$filmCategory->setFilmId($row['film_id']);
		$filmCategory->setCategoryId($row['category_id']);
		$filmCategory->setLastUpdate($row['last_update']);

		return $filmCategory;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return FilmCategoryMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>