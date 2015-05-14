<?php
/**
 * Class that operate on table 'store'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-13 07:52
 */
class StoreMySqlDAO implements StoreDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return Store 
	 */
	public function load($id){
		$sql = 'SELECT * FROM store WHERE store_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM store';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM store ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param store primary key
 	 */
	public function delete($store_id){
		$sql = 'DELETE FROM store WHERE store_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($store_id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table, id is auto-incremented
 	 *
 	 * @param StoreMySql store
 	 */
	public function insert($store){
		$sql = 'INSERT INTO store (manager_staff_id, address_id, last_update) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($store->getManagerStaffId());
		$sqlQuery->set($store->getAddressId());
		$sqlQuery->set($store->getLastUpdate());

		$id = $this->executeInsert($sqlQuery);	
		$store->setStoreId($id);
		return $id;
	}
    
	/**
 	 * Insert record to table with specified id
 	 *
 	 * @param StoreMySql store
 	 */
	public function insertWithId($store){
		$sql = 'INSERT INTO store (store_id, manager_staff_id, address_id, last_update) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($store->getStoreId());
		
		$sqlQuery->setNumber($store->getManagerStaffId());
		$sqlQuery->set($store->getAddressId());
		$sqlQuery->set($store->getLastUpdate());

		$id = $this->executeInsert($sqlQuery);	
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param StoreMySql store
 	 */
	public function update($store){
		$sql = 'UPDATE store SET manager_staff_id = ?, address_id = ?, last_update = ? WHERE store_id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($store->getManagerStaffId());
		$sqlQuery->set($store->getAddressId());
		$sqlQuery->set($store->getLastUpdate());

		$sqlQuery->setNumber($store->getStoreId());
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM store';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

  public function queryByManagerStaffId($value){
    $sql = 'SELECT * FROM store WHERE manager_staff_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->getList($sqlQuery);
  }

  public function queryByAddressId($value){
    $sql = 'SELECT * FROM store WHERE address_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByLastUpdate($value){
    $sql = 'SELECT * FROM store WHERE last_update = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }


  public function deleteByManagerStaffId($value){
    $sql = 'DELETE FROM store WHERE manager_staff_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByAddressId($value){
    $sql = 'DELETE FROM store WHERE address_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByLastUpdate($value){
    $sql = 'DELETE FROM store WHERE last_update = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }


	
	/**
	 * Read row
	 *
	 * @return StoreMySql 
	 */
	protected function readRow($row){
		$store = new Store();
		
		$store->setStoreId($row['store_id']);
		$store->setManagerStaffId($row['manager_staff_id']);
		$store->setAddressId($row['address_id']);
		$store->setLastUpdate($row['last_update']);

		return $store;
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
	 * @return StoreMySql 
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