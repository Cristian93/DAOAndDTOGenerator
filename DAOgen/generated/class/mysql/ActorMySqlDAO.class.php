<?php
/**
 * Class that operate on table 'actor'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-13 07:52
 */
class ActorMySqlDAO implements ActorDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return Actor 
	 */
	public function load($id){
		$sql = 'SELECT * FROM actor WHERE actor_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM actor';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM actor ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param actor primary key
 	 */
	public function delete($actor_id){
		$sql = 'DELETE FROM actor WHERE actor_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($actor_id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table, id is auto-incremented
 	 *
 	 * @param ActorMySql actor
 	 */
	public function insert($actor){
		$sql = 'INSERT INTO actor (first_name, last_name, last_update) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($actor->getFirstName());
		$sqlQuery->set($actor->getLastName());
		$sqlQuery->set($actor->getLastUpdate());

		$id = $this->executeInsert($sqlQuery);	
		$actor->setActorId($id);
		return $id;
	}
    
	/**
 	 * Insert record to table with specified id
 	 *
 	 * @param ActorMySql actor
 	 */
	public function insertWithId($actor){
		$sql = 'INSERT INTO actor (actor_id, first_name, last_name, last_update) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($actor->getActorId());
		
		$sqlQuery->set($actor->getFirstName());
		$sqlQuery->set($actor->getLastName());
		$sqlQuery->set($actor->getLastUpdate());

		$id = $this->executeInsert($sqlQuery);	
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ActorMySql actor
 	 */
	public function update($actor){
		$sql = 'UPDATE actor SET first_name = ?, last_name = ?, last_update = ? WHERE actor_id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($actor->getFirstName());
		$sqlQuery->set($actor->getLastName());
		$sqlQuery->set($actor->getLastUpdate());

		$sqlQuery->set($actor->getActorId());
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM actor';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

  public function queryByFirstName($value){
    $sql = 'SELECT * FROM actor WHERE first_name = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByLastName($value){
    $sql = 'SELECT * FROM actor WHERE last_name = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByLastUpdate($value){
    $sql = 'SELECT * FROM actor WHERE last_update = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }


  public function deleteByFirstName($value){
    $sql = 'DELETE FROM actor WHERE first_name = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByLastName($value){
    $sql = 'DELETE FROM actor WHERE last_name = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByLastUpdate($value){
    $sql = 'DELETE FROM actor WHERE last_update = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }


	
	/**
	 * Read row
	 *
	 * @return ActorMySql 
	 */
	protected function readRow($row){
		$actor = new Actor();
		
		$actor->setActorId($row['actor_id']);
		$actor->setFirstName($row['first_name']);
		$actor->setLastName($row['last_name']);
		$actor->setLastUpdate($row['last_update']);

		return $actor;
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
	 * @return ActorMySql 
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