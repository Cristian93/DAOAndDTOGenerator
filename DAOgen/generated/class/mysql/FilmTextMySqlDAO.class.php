<?php
/**
 * Class that operate on table 'film_text'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-13 07:52
 */
class FilmTextMySqlDAO implements FilmTextDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return FilmText 
	 */
	public function load($id){
		$sql = 'SELECT * FROM film_text WHERE film_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM film_text';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM film_text ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param filmText primary key
 	 */
	public function delete($film_id){
		$sql = 'DELETE FROM film_text WHERE film_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($film_id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table, id is auto-incremented
 	 *
 	 * @param FilmTextMySql filmText
 	 */
	public function insert($filmText){
		$sql = 'INSERT INTO film_text (title, description) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($filmText->getTitle());
		$sqlQuery->set($filmText->getDescription());

		$id = $this->executeInsert($sqlQuery);	
		$filmText->setFilmId($id);
		return $id;
	}
    
	/**
 	 * Insert record to table with specified id
 	 *
 	 * @param FilmTextMySql filmText
 	 */
	public function insertWithId($filmText){
		$sql = 'INSERT INTO film_text (film_id, title, description) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($filmText->getFilmId());
		
		$sqlQuery->set($filmText->getTitle());
		$sqlQuery->set($filmText->getDescription());

		$id = $this->executeInsert($sqlQuery);	
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param FilmTextMySql filmText
 	 */
	public function update($filmText){
		$sql = 'UPDATE film_text SET title = ?, description = ? WHERE film_id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($filmText->getTitle());
		$sqlQuery->set($filmText->getDescription());

		$sqlQuery->set($filmText->getFilmId());
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM film_text';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

  public function queryByTitle($value){
    $sql = 'SELECT * FROM film_text WHERE title = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByDescription($value){
    $sql = 'SELECT * FROM film_text WHERE description = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }


  public function deleteByTitle($value){
    $sql = 'DELETE FROM film_text WHERE title = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByDescription($value){
    $sql = 'DELETE FROM film_text WHERE description = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }


	
	/**
	 * Read row
	 *
	 * @return FilmTextMySql 
	 */
	protected function readRow($row){
		$filmText = new FilmText();
		
		$filmText->setFilmId($row['film_id']);
		$filmText->setTitle($row['title']);
		$filmText->setDescription($row['description']);

		return $filmText;
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
	 * @return FilmTextMySql 
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