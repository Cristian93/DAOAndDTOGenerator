<?php
/**
 * Class that operate on table 'customer'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-13 07:52
 */
class CustomerMySqlDAO implements CustomerDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return Customer 
	 */
	public function load($id){
		$sql = 'SELECT * FROM customer WHERE customer_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM customer';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM customer ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param customer primary key
 	 */
	public function delete($customer_id){
		$sql = 'DELETE FROM customer WHERE customer_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($customer_id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table, id is auto-incremented
 	 *
 	 * @param CustomerMySql customer
 	 */
	public function insert($customer){
		$sql = 'INSERT INTO customer (store_id, first_name, last_name, email, address_id, active, create_date, last_update) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($customer->getStoreId());
		$sqlQuery->set($customer->getFirstName());
		$sqlQuery->set($customer->getLastName());
		$sqlQuery->set($customer->getEmail());
		$sqlQuery->set($customer->getAddressId());
		$sqlQuery->setNumber($customer->getActive());
		$sqlQuery->set($customer->getCreateDate());
		$sqlQuery->set($customer->getLastUpdate());

		$id = $this->executeInsert($sqlQuery);	
		$customer->setCustomerId($id);
		return $id;
	}
    
	/**
 	 * Insert record to table with specified id
 	 *
 	 * @param CustomerMySql customer
 	 */
	public function insertWithId($customer){
		$sql = 'INSERT INTO customer (customer_id, store_id, first_name, last_name, email, address_id, active, create_date, last_update) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($customer->getCustomerId());
		
		$sqlQuery->setNumber($customer->getStoreId());
		$sqlQuery->set($customer->getFirstName());
		$sqlQuery->set($customer->getLastName());
		$sqlQuery->set($customer->getEmail());
		$sqlQuery->set($customer->getAddressId());
		$sqlQuery->setNumber($customer->getActive());
		$sqlQuery->set($customer->getCreateDate());
		$sqlQuery->set($customer->getLastUpdate());

		$id = $this->executeInsert($sqlQuery);	
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CustomerMySql customer
 	 */
	public function update($customer){
		$sql = 'UPDATE customer SET store_id = ?, first_name = ?, last_name = ?, email = ?, address_id = ?, active = ?, create_date = ?, last_update = ? WHERE customer_id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($customer->getStoreId());
		$sqlQuery->set($customer->getFirstName());
		$sqlQuery->set($customer->getLastName());
		$sqlQuery->set($customer->getEmail());
		$sqlQuery->set($customer->getAddressId());
		$sqlQuery->setNumber($customer->getActive());
		$sqlQuery->set($customer->getCreateDate());
		$sqlQuery->set($customer->getLastUpdate());

		$sqlQuery->set($customer->getCustomerId());
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM customer';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

  public function queryByStoreId($value){
    $sql = 'SELECT * FROM customer WHERE store_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->getList($sqlQuery);
  }

  public function queryByFirstName($value){
    $sql = 'SELECT * FROM customer WHERE first_name = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByLastName($value){
    $sql = 'SELECT * FROM customer WHERE last_name = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByEmail($value){
    $sql = 'SELECT * FROM customer WHERE email = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByAddressId($value){
    $sql = 'SELECT * FROM customer WHERE address_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByActive($value){
    $sql = 'SELECT * FROM customer WHERE active = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->getList($sqlQuery);
  }

  public function queryByCreateDate($value){
    $sql = 'SELECT * FROM customer WHERE create_date = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByLastUpdate($value){
    $sql = 'SELECT * FROM customer WHERE last_update = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }


  public function deleteByStoreId($value){
    $sql = 'DELETE FROM customer WHERE store_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByFirstName($value){
    $sql = 'DELETE FROM customer WHERE first_name = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByLastName($value){
    $sql = 'DELETE FROM customer WHERE last_name = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByEmail($value){
    $sql = 'DELETE FROM customer WHERE email = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByAddressId($value){
    $sql = 'DELETE FROM customer WHERE address_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByActive($value){
    $sql = 'DELETE FROM customer WHERE active = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByCreateDate($value){
    $sql = 'DELETE FROM customer WHERE create_date = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByLastUpdate($value){
    $sql = 'DELETE FROM customer WHERE last_update = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }


	
	/**
	 * Read row
	 *
	 * @return CustomerMySql 
	 */
	protected function readRow($row){
		$customer = new Customer();
		
		$customer->setCustomerId($row['customer_id']);
		$customer->setStoreId($row['store_id']);
		$customer->setFirstName($row['first_name']);
		$customer->setLastName($row['last_name']);
		$customer->setEmail($row['email']);
		$customer->setAddressId($row['address_id']);
		$customer->setActive($row['active']);
		$customer->setCreateDate($row['create_date']);
		$customer->setLastUpdate($row['last_update']);

		return $customer;
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
	 * @return CustomerMySql 
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