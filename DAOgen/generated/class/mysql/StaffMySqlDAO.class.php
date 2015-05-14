<?php
/**
 * Class that operate on table 'staff'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-13 07:52
 */
class StaffMySqlDAO implements StaffDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return Staff 
	 */
	public function load($id){
		$sql = 'SELECT * FROM staff WHERE staff_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM staff';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM staff ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param staff primary key
 	 */
	public function delete($staff_id){
		$sql = 'DELETE FROM staff WHERE staff_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($staff_id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table, id is auto-incremented
 	 *
 	 * @param StaffMySql staff
 	 */
	public function insert($staff){
		$sql = 'INSERT INTO staff (first_name, last_name, address_id, picture, email, store_id, active, username, password, last_update) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($staff->getFirstName());
		$sqlQuery->set($staff->getLastName());
		$sqlQuery->set($staff->getAddressId());
		$sqlQuery->set($staff->getPicture());
		$sqlQuery->set($staff->getEmail());
		$sqlQuery->setNumber($staff->getStoreId());
		$sqlQuery->setNumber($staff->getActive());
		$sqlQuery->set($staff->getUsername());
		$sqlQuery->set($staff->getPassword());
		$sqlQuery->set($staff->getLastUpdate());

		$id = $this->executeInsert($sqlQuery);	
		$staff->setStaffId($id);
		return $id;
	}
    
	/**
 	 * Insert record to table with specified id
 	 *
 	 * @param StaffMySql staff
 	 */
	public function insertWithId($staff){
		$sql = 'INSERT INTO staff (staff_id, first_name, last_name, address_id, picture, email, store_id, active, username, password, last_update) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($staff->getStaffId());
		
		$sqlQuery->set($staff->getFirstName());
		$sqlQuery->set($staff->getLastName());
		$sqlQuery->set($staff->getAddressId());
		$sqlQuery->set($staff->getPicture());
		$sqlQuery->set($staff->getEmail());
		$sqlQuery->setNumber($staff->getStoreId());
		$sqlQuery->setNumber($staff->getActive());
		$sqlQuery->set($staff->getUsername());
		$sqlQuery->set($staff->getPassword());
		$sqlQuery->set($staff->getLastUpdate());

		$id = $this->executeInsert($sqlQuery);	
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param StaffMySql staff
 	 */
	public function update($staff){
		$sql = 'UPDATE staff SET first_name = ?, last_name = ?, address_id = ?, picture = ?, email = ?, store_id = ?, active = ?, username = ?, password = ?, last_update = ? WHERE staff_id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($staff->getFirstName());
		$sqlQuery->set($staff->getLastName());
		$sqlQuery->set($staff->getAddressId());
		$sqlQuery->set($staff->getPicture());
		$sqlQuery->set($staff->getEmail());
		$sqlQuery->setNumber($staff->getStoreId());
		$sqlQuery->setNumber($staff->getActive());
		$sqlQuery->set($staff->getUsername());
		$sqlQuery->set($staff->getPassword());
		$sqlQuery->set($staff->getLastUpdate());

		$sqlQuery->setNumber($staff->getStaffId());
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM staff';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

  public function queryByFirstName($value){
    $sql = 'SELECT * FROM staff WHERE first_name = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByLastName($value){
    $sql = 'SELECT * FROM staff WHERE last_name = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByAddressId($value){
    $sql = 'SELECT * FROM staff WHERE address_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByPicture($value){
    $sql = 'SELECT * FROM staff WHERE picture = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByEmail($value){
    $sql = 'SELECT * FROM staff WHERE email = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByStoreId($value){
    $sql = 'SELECT * FROM staff WHERE store_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->getList($sqlQuery);
  }

  public function queryByActive($value){
    $sql = 'SELECT * FROM staff WHERE active = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->getList($sqlQuery);
  }

  public function queryByUsername($value){
    $sql = 'SELECT * FROM staff WHERE username = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByPassword($value){
    $sql = 'SELECT * FROM staff WHERE password = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByLastUpdate($value){
    $sql = 'SELECT * FROM staff WHERE last_update = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }


  public function deleteByFirstName($value){
    $sql = 'DELETE FROM staff WHERE first_name = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByLastName($value){
    $sql = 'DELETE FROM staff WHERE last_name = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByAddressId($value){
    $sql = 'DELETE FROM staff WHERE address_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByPicture($value){
    $sql = 'DELETE FROM staff WHERE picture = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByEmail($value){
    $sql = 'DELETE FROM staff WHERE email = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByStoreId($value){
    $sql = 'DELETE FROM staff WHERE store_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByActive($value){
    $sql = 'DELETE FROM staff WHERE active = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByUsername($value){
    $sql = 'DELETE FROM staff WHERE username = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByPassword($value){
    $sql = 'DELETE FROM staff WHERE password = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByLastUpdate($value){
    $sql = 'DELETE FROM staff WHERE last_update = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }


	
	/**
	 * Read row
	 *
	 * @return StaffMySql 
	 */
	protected function readRow($row){
		$staff = new Staff();
		
		$staff->setStaffId($row['staff_id']);
		$staff->setFirstName($row['first_name']);
		$staff->setLastName($row['last_name']);
		$staff->setAddressId($row['address_id']);
		$staff->setPicture($row['picture']);
		$staff->setEmail($row['email']);
		$staff->setStoreId($row['store_id']);
		$staff->setActive($row['active']);
		$staff->setUsername($row['username']);
		$staff->setPassword($row['password']);
		$staff->setLastUpdate($row['last_update']);

		return $staff;
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
	 * @return StaffMySql 
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