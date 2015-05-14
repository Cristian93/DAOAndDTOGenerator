<?php
/**
 * Class that operate on table 'address'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-13 07:52
 */
class AddressMySqlDAO implements AddressDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return Addres 
	 */
	public function load($id){
		$sql = 'SELECT * FROM address WHERE address_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM address';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM address ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param addres primary key
 	 */
	public function delete($address_id){
		$sql = 'DELETE FROM address WHERE address_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($address_id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table, id is auto-incremented
 	 *
 	 * @param AddressMySql addres
 	 */
	public function insert($addres){
		$sql = 'INSERT INTO address (address, address2, district, city_id, postal_code, phone, last_update) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($addres->getAddress());
		$sqlQuery->set($addres->getAddress2());
		$sqlQuery->set($addres->getDistrict());
		$sqlQuery->set($addres->getCityId());
		$sqlQuery->set($addres->getPostalCode());
		$sqlQuery->set($addres->getPhone());
		$sqlQuery->set($addres->getLastUpdate());

		$id = $this->executeInsert($sqlQuery);	
		$addres->setAddressId($id);
		return $id;
	}
    
	/**
 	 * Insert record to table with specified id
 	 *
 	 * @param AddressMySql addres
 	 */
	public function insertWithId($addres){
		$sql = 'INSERT INTO address (address_id, address, address2, district, city_id, postal_code, phone, last_update) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($addres->getAddressId());
		
		$sqlQuery->set($addres->getAddress());
		$sqlQuery->set($addres->getAddress2());
		$sqlQuery->set($addres->getDistrict());
		$sqlQuery->set($addres->getCityId());
		$sqlQuery->set($addres->getPostalCode());
		$sqlQuery->set($addres->getPhone());
		$sqlQuery->set($addres->getLastUpdate());

		$id = $this->executeInsert($sqlQuery);	
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AddressMySql addres
 	 */
	public function update($addres){
		$sql = 'UPDATE address SET address = ?, address2 = ?, district = ?, city_id = ?, postal_code = ?, phone = ?, last_update = ? WHERE address_id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($addres->getAddress());
		$sqlQuery->set($addres->getAddress2());
		$sqlQuery->set($addres->getDistrict());
		$sqlQuery->set($addres->getCityId());
		$sqlQuery->set($addres->getPostalCode());
		$sqlQuery->set($addres->getPhone());
		$sqlQuery->set($addres->getLastUpdate());

		$sqlQuery->set($addres->getAddressId());
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM address';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

  public function queryByAddress($value){
    $sql = 'SELECT * FROM address WHERE address = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByAddress2($value){
    $sql = 'SELECT * FROM address WHERE address2 = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByDistrict($value){
    $sql = 'SELECT * FROM address WHERE district = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByCityId($value){
    $sql = 'SELECT * FROM address WHERE city_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByPostalCode($value){
    $sql = 'SELECT * FROM address WHERE postal_code = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByPhone($value){
    $sql = 'SELECT * FROM address WHERE phone = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByLastUpdate($value){
    $sql = 'SELECT * FROM address WHERE last_update = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }


  public function deleteByAddress($value){
    $sql = 'DELETE FROM address WHERE address = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByAddress2($value){
    $sql = 'DELETE FROM address WHERE address2 = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByDistrict($value){
    $sql = 'DELETE FROM address WHERE district = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByCityId($value){
    $sql = 'DELETE FROM address WHERE city_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByPostalCode($value){
    $sql = 'DELETE FROM address WHERE postal_code = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByPhone($value){
    $sql = 'DELETE FROM address WHERE phone = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByLastUpdate($value){
    $sql = 'DELETE FROM address WHERE last_update = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }


	
	/**
	 * Read row
	 *
	 * @return AddressMySql 
	 */
	protected function readRow($row){
		$addres = new Addres();
		
		$addres->setAddressId($row['address_id']);
		$addres->setAddress($row['address']);
		$addres->setAddress2($row['address2']);
		$addres->setDistrict($row['district']);
		$addres->setCityId($row['city_id']);
		$addres->setPostalCode($row['postal_code']);
		$addres->setPhone($row['phone']);
		$addres->setLastUpdate($row['last_update']);

		return $addres;
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
	 * @return AddressMySql 
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