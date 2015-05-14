<?php
/**
 * Class that operate on table 'rental'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-13 07:52
 */
class RentalMySqlDAO implements RentalDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return Rental 
	 */
	public function load($id){
		$sql = 'SELECT * FROM rental WHERE rental_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM rental';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM rental ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param rental primary key
 	 */
	public function delete($rental_id){
		$sql = 'DELETE FROM rental WHERE rental_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($rental_id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table, id is auto-incremented
 	 *
 	 * @param RentalMySql rental
 	 */
	public function insert($rental){
		$sql = 'INSERT INTO rental (rental_date, inventory_id, customer_id, return_date, staff_id, last_update) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($rental->getRentalDate());
		$sqlQuery->set($rental->getInventoryId());
		$sqlQuery->set($rental->getCustomerId());
		$sqlQuery->set($rental->getReturnDate());
		$sqlQuery->setNumber($rental->getStaffId());
		$sqlQuery->set($rental->getLastUpdate());

		$id = $this->executeInsert($sqlQuery);	
		$rental->setRentalId($id);
		return $id;
	}
    
	/**
 	 * Insert record to table with specified id
 	 *
 	 * @param RentalMySql rental
 	 */
	public function insertWithId($rental){
		$sql = 'INSERT INTO rental (rental_id, rental_date, inventory_id, customer_id, return_date, staff_id, last_update) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($rental->getRentalId());
		
		$sqlQuery->set($rental->getRentalDate());
		$sqlQuery->set($rental->getInventoryId());
		$sqlQuery->set($rental->getCustomerId());
		$sqlQuery->set($rental->getReturnDate());
		$sqlQuery->setNumber($rental->getStaffId());
		$sqlQuery->set($rental->getLastUpdate());

		$id = $this->executeInsert($sqlQuery);	
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param RentalMySql rental
 	 */
	public function update($rental){
		$sql = 'UPDATE rental SET rental_date = ?, inventory_id = ?, customer_id = ?, return_date = ?, staff_id = ?, last_update = ? WHERE rental_id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($rental->getRentalDate());
		$sqlQuery->set($rental->getInventoryId());
		$sqlQuery->set($rental->getCustomerId());
		$sqlQuery->set($rental->getReturnDate());
		$sqlQuery->setNumber($rental->getStaffId());
		$sqlQuery->set($rental->getLastUpdate());

		$sqlQuery->setNumber($rental->getRentalId());
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM rental';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

  public function queryByRentalDate($value){
    $sql = 'SELECT * FROM rental WHERE rental_date = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByInventoryId($value){
    $sql = 'SELECT * FROM rental WHERE inventory_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByCustomerId($value){
    $sql = 'SELECT * FROM rental WHERE customer_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByReturnDate($value){
    $sql = 'SELECT * FROM rental WHERE return_date = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByStaffId($value){
    $sql = 'SELECT * FROM rental WHERE staff_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->getList($sqlQuery);
  }

  public function queryByLastUpdate($value){
    $sql = 'SELECT * FROM rental WHERE last_update = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }


  public function deleteByRentalDate($value){
    $sql = 'DELETE FROM rental WHERE rental_date = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByInventoryId($value){
    $sql = 'DELETE FROM rental WHERE inventory_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByCustomerId($value){
    $sql = 'DELETE FROM rental WHERE customer_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByReturnDate($value){
    $sql = 'DELETE FROM rental WHERE return_date = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByStaffId($value){
    $sql = 'DELETE FROM rental WHERE staff_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByLastUpdate($value){
    $sql = 'DELETE FROM rental WHERE last_update = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }


	
	/**
	 * Read row
	 *
	 * @return RentalMySql 
	 */
	protected function readRow($row){
		$rental = new Rental();
		
		$rental->setRentalId($row['rental_id']);
		$rental->setRentalDate($row['rental_date']);
		$rental->setInventoryId($row['inventory_id']);
		$rental->setCustomerId($row['customer_id']);
		$rental->setReturnDate($row['return_date']);
		$rental->setStaffId($row['staff_id']);
		$rental->setLastUpdate($row['last_update']);

		return $rental;
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
	 * @return RentalMySql 
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