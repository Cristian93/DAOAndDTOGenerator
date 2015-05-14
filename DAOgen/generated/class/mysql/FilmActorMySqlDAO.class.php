<?php
/**
 * Class that operate on table 'film_actor'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-13 07:52
 */
class FilmActorMySqlDAO implements FilmActorDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return FilmActorMySql 
	 */
	public function load($actorId, $filmId){
		$sql = 'SELECT * FROM film_actor WHERE actor_id = ?  AND film_id = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($actorId);
		$sqlQuery->setNumber($filmId);

		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM film_actor';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM film_actor ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param filmActor primary key
 	 */
	public function delete($actorId, $filmId){
		$sql = 'DELETE FROM film_actor WHERE actor_id = ?  AND film_id = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($actorId);
		$sqlQuery->setNumber($filmId);

		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param FilmActorMySql filmActor
 	 */
	public function insert($filmActor){
		$sql = 'INSERT INTO film_actor (last_update, actor_id, film_id) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($filmActor->getLastUpdate());

		
		$sqlQuery->setNumber($filmActor->actorId);

		$sqlQuery->setNumber($filmActor->filmId);

		$this->executeInsert($sqlQuery);	
		//$filmActor->id = $id;
		//return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param FilmActorMySql filmActor
 	 */
	public function update($filmActor){
		$sql = 'UPDATE film_actor SET last_update = ? WHERE actor_id = ?  AND film_id = ? ';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($filmActor->getLastUpdate());

		
		$sqlQuery->setNumber($filmActor->actorId);

		$sqlQuery->setNumber($filmActor->filmId);

		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM film_actor';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

  public function queryByLastUpdate($value){
    $sql = 'SELECT * FROM film_actor WHERE last_update = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }


  public function deleteByLastUpdate($value){
    $sql = 'DELETE FROM film_actor WHERE last_update = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }


	
	/**
	 * Read row
	 *
	 * @return FilmActorMySql 
	 */
	protected function readRow($row){
		$filmActor = new FilmActor();
		
		$filmActor->setActorId($row['actor_id']);
		$filmActor->setFilmId($row['film_id']);
		$filmActor->setLastUpdate($row['last_update']);

		return $filmActor;
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
	 * @return FilmActorMySql 
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