<?php
/**
 * Class that operate on table 'country'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-13 07:52
 */
class CountryMySqlExtDAO extends CountryMySqlDAO{

	/**
	 * Get all records from table
	 *
	 * @param String $query
	 */
	public function setSQL($query){
		$sql = $query;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
}
?>