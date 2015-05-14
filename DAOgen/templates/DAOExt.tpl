<?php
/**
 * Class that operate on table '${table_name}'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: ${date}
 */
class ${dao_clazz_name}DAO extends ${dao_clazz_sup_name}DAO{

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