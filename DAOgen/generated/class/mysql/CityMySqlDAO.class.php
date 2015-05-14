<?php
/**
 * Class that operate on table 'city'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-13 07:52
 */
class CityMySqlDAO implements CityDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return City 
	 */
	public function load($id){
		$sql = 'SELECT * FROM city WHERE city_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM city';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM city ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param city primary key
 	 */
	public function delete($city_id){
		$sql = 'DELETE FROM city WHERE city_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($city_id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table, id is auto-incremented
 	 *
 	 * @param CityMySql city
 	 */
	public function insert($city){
		$sql = 'INSERT INTO city (city, country_id, last_update) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($city->getCity());
		$sqlQuery->set($city->getCountryId());
		$sqlQuery->set($city->getLastUpdate());

		$id = $this->executeInsert($sqlQuery);	
		$city->setCityId($id);
		return $id;
	}
    
	/**
 	 * Insert record to table with specified id
 	 *
 	 * @param CityMySql city
 	 */
	public function insertWithId($city){
		$sql = 'INSERT INTO city (city_id, city, country_id, last_update) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($city->getCityId());
		
		$sqlQuery->set($city->getCity());
		$sqlQuery->set($city->getCountryId());
		$sqlQuery->set($city->getLastUpdate());

		$id = $this->executeInsert($sqlQuery);	
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CityMySql city
 	 */
	public function update($city){
		$sql = 'UPDATE city SET city = ?, country_id = ?, last_update = ? WHERE city_id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($city->getCity());
		$sqlQuery->set($city->getCountryId());
		$sqlQuery->set($city->getLastUpdate());

		$sqlQuery->set($city->getCityId());
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM city';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

  public function queryByCity($value){
    $sql = 'SELECT * FROM city WHERE city = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByCountryId($value){
    $sql = 'SELECT * FROM city WHERE country_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByLastUpdate($value){
    $sql = 'SELECT * FROM city WHERE last_update = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }


  public function deleteByCity($value){
    $sql = 'DELETE FROM city WHERE city = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByCountryId($value){
    $sql = 'DELETE FROM city WHERE country_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByLastUpdate($value){
    $sql = 'DELETE FROM city WHERE last_update = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }


	
	/**
	 * Read row
	 *
	 * @return CityMySql 
	 */
	protected function readRow($row){
		$city = new City();
		
		$city->setCityId($row['city_id']);
		$city->setCity($row['city']);
		$city->setCountryId($row['country_id']);
		$city->setLastUpdate($row['last_update']);

		return $city;
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
	 * @return CityMySql 
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