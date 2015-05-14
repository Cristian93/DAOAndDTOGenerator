<?php
/**
 * Class that operate on table 'payment'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-13 07:52
 */
class PaymentMySqlDAO implements PaymentDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return Payment 
	 */
	public function load($id){
		$sql = 'SELECT * FROM payment WHERE payment_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM payment';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM payment ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param payment primary key
 	 */
	public function delete($payment_id){
		$sql = 'DELETE FROM payment WHERE payment_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($payment_id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table, id is auto-incremented
 	 *
 	 * @param PaymentMySql payment
 	 */
	public function insert($payment){
		$sql = 'INSERT INTO payment (customer_id, staff_id, rental_id, amount, payment_date, last_update) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($payment->getCustomerId());
		$sqlQuery->setNumber($payment->getStaffId());
		$sqlQuery->setNumber($payment->getRentalId());
		$sqlQuery->set($payment->getAmount());
		$sqlQuery->set($payment->getPaymentDate());
		$sqlQuery->set($payment->getLastUpdate());

		$id = $this->executeInsert($sqlQuery);	
		$payment->setPaymentId($id);
		return $id;
	}
    
	/**
 	 * Insert record to table with specified id
 	 *
 	 * @param PaymentMySql payment
 	 */
	public function insertWithId($payment){
		$sql = 'INSERT INTO payment (payment_id, customer_id, staff_id, rental_id, amount, payment_date, last_update) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($payment->getPaymentId());
		
		$sqlQuery->set($payment->getCustomerId());
		$sqlQuery->setNumber($payment->getStaffId());
		$sqlQuery->setNumber($payment->getRentalId());
		$sqlQuery->set($payment->getAmount());
		$sqlQuery->set($payment->getPaymentDate());
		$sqlQuery->set($payment->getLastUpdate());

		$id = $this->executeInsert($sqlQuery);	
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param PaymentMySql payment
 	 */
	public function update($payment){
		$sql = 'UPDATE payment SET customer_id = ?, staff_id = ?, rental_id = ?, amount = ?, payment_date = ?, last_update = ? WHERE payment_id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($payment->getCustomerId());
		$sqlQuery->setNumber($payment->getStaffId());
		$sqlQuery->setNumber($payment->getRentalId());
		$sqlQuery->set($payment->getAmount());
		$sqlQuery->set($payment->getPaymentDate());
		$sqlQuery->set($payment->getLastUpdate());

		$sqlQuery->set($payment->getPaymentId());
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM payment';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

  public function queryByCustomerId($value){
    $sql = 'SELECT * FROM payment WHERE customer_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByStaffId($value){
    $sql = 'SELECT * FROM payment WHERE staff_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->getList($sqlQuery);
  }

  public function queryByRentalId($value){
    $sql = 'SELECT * FROM payment WHERE rental_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->getList($sqlQuery);
  }

  public function queryByAmount($value){
    $sql = 'SELECT * FROM payment WHERE amount = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByPaymentDate($value){
    $sql = 'SELECT * FROM payment WHERE payment_date = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByLastUpdate($value){
    $sql = 'SELECT * FROM payment WHERE last_update = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }


  public function deleteByCustomerId($value){
    $sql = 'DELETE FROM payment WHERE customer_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByStaffId($value){
    $sql = 'DELETE FROM payment WHERE staff_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByRentalId($value){
    $sql = 'DELETE FROM payment WHERE rental_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByAmount($value){
    $sql = 'DELETE FROM payment WHERE amount = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByPaymentDate($value){
    $sql = 'DELETE FROM payment WHERE payment_date = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByLastUpdate($value){
    $sql = 'DELETE FROM payment WHERE last_update = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }


	
	/**
	 * Read row
	 *
	 * @return PaymentMySql 
	 */
	protected function readRow($row){
		$payment = new Payment();
		
		$payment->setPaymentId($row['payment_id']);
		$payment->setCustomerId($row['customer_id']);
		$payment->setStaffId($row['staff_id']);
		$payment->setRentalId($row['rental_id']);
		$payment->setAmount($row['amount']);
		$payment->setPaymentDate($row['payment_date']);
		$payment->setLastUpdate($row['last_update']);

		return $payment;
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
	 * @return PaymentMySql 
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