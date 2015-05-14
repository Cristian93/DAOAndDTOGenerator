<?php
/**
 * Class that operate on table 'inventory'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-13 07:52
 */
class InventoryMySqlDAO implements InventoryDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return Inventory 
	 */
	public function load($id){
		$sql = 'SELECT * FROM inventory WHERE inventory_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM inventory';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM inventory ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param inventory primary key
 	 */
	public function delete($inventory_id){
		$sql = 'DELETE FROM inventory WHERE inventory_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($inventory_id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table, id is auto-incremented
 	 *
 	 * @param InventoryMySql inventory
 	 */
	public function insert($inventory){
		$sql = 'INSERT INTO inventory (film_id, store_id, last_update) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($inventory->getFilmId());
		$sqlQuery->setNumber($inventory->getStoreId());
		$sqlQuery->set($inventory->getLastUpdate());

		$id = $this->executeInsert($sqlQuery);	
		$inventory->setInventoryId($id);
		return $id;
	}
    
	/**
 	 * Insert record to table with specified id
 	 *
 	 * @param InventoryMySql inventory
 	 */
	public function insertWithId($inventory){
		$sql = 'INSERT INTO inventory (inventory_id, film_id, store_id, last_update) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($inventory->getInventoryId());
		
		$sqlQuery->set($inventory->getFilmId());
		$sqlQuery->setNumber($inventory->getStoreId());
		$sqlQuery->set($inventory->getLastUpdate());

		$id = $this->executeInsert($sqlQuery);	
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param InventoryMySql inventory
 	 */
	public function update($inventory){
		$sql = 'UPDATE inventory SET film_id = ?, store_id = ?, last_update = ? WHERE inventory_id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($inventory->getFilmId());
		$sqlQuery->setNumber($inventory->getStoreId());
		$sqlQuery->set($inventory->getLastUpdate());

		$sqlQuery->set($inventory->getInventoryId());
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM inventory';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

  public function queryByFilmId($value){
    $sql = 'SELECT * FROM inventory WHERE film_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByStoreId($value){
    $sql = 'SELECT * FROM inventory WHERE store_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->getList($sqlQuery);
  }

  public function queryByLastUpdate($value){
    $sql = 'SELECT * FROM inventory WHERE last_update = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }


  public function deleteByFilmId($value){
    $sql = 'DELETE FROM inventory WHERE film_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByStoreId($value){
    $sql = 'DELETE FROM inventory WHERE store_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByLastUpdate($value){
    $sql = 'DELETE FROM inventory WHERE last_update = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }


	
	/**
	 * Read row
	 *
	 * @return InventoryMySql 
	 */
	protected function readRow($row){
		$inventory = new Inventory();
		
		$inventory->setInventoryId($row['inventory_id']);
		$inventory->setFilmId($row['film_id']);
		$inventory->setStoreId($row['store_id']);
		$inventory->setLastUpdate($row['last_update']);

		return $inventory;
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
	 * @return InventoryMySql 
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