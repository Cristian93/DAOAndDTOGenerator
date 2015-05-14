<?php
/**
 * Class that operate on table 'film'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-13 07:52
 */
class FilmMySqlDAO implements FilmDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return Film 
	 */
	public function load($id){
		$sql = 'SELECT * FROM film WHERE film_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM film';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM film ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param film primary key
 	 */
	public function delete($film_id){
		$sql = 'DELETE FROM film WHERE film_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($film_id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table, id is auto-incremented
 	 *
 	 * @param FilmMySql film
 	 */
	public function insert($film){
		$sql = 'INSERT INTO film (title, description, release_year, language_id, original_language_id, rental_duration, rental_rate, length, replacement_cost, rating, special_features, last_update) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($film->getTitle());
		$sqlQuery->set($film->getDescription());
		$sqlQuery->set($film->getReleaseYear());
		$sqlQuery->setNumber($film->getLanguageId());
		$sqlQuery->setNumber($film->getOriginalLanguageId());
		$sqlQuery->setNumber($film->getRentalDuration());
		$sqlQuery->set($film->getRentalRate());
		$sqlQuery->set($film->getLength());
		$sqlQuery->set($film->getReplacementCost());
		$sqlQuery->set($film->getRating());
		$sqlQuery->set($film->getSpecialFeatures());
		$sqlQuery->set($film->getLastUpdate());

		$id = $this->executeInsert($sqlQuery);	
		$film->setFilmId($id);
		return $id;
	}
    
	/**
 	 * Insert record to table with specified id
 	 *
 	 * @param FilmMySql film
 	 */
	public function insertWithId($film){
		$sql = 'INSERT INTO film (film_id, title, description, release_year, language_id, original_language_id, rental_duration, rental_rate, length, replacement_cost, rating, special_features, last_update) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($film->getFilmId());
		
		$sqlQuery->set($film->getTitle());
		$sqlQuery->set($film->getDescription());
		$sqlQuery->set($film->getReleaseYear());
		$sqlQuery->setNumber($film->getLanguageId());
		$sqlQuery->setNumber($film->getOriginalLanguageId());
		$sqlQuery->setNumber($film->getRentalDuration());
		$sqlQuery->set($film->getRentalRate());
		$sqlQuery->set($film->getLength());
		$sqlQuery->set($film->getReplacementCost());
		$sqlQuery->set($film->getRating());
		$sqlQuery->set($film->getSpecialFeatures());
		$sqlQuery->set($film->getLastUpdate());

		$id = $this->executeInsert($sqlQuery);	
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param FilmMySql film
 	 */
	public function update($film){
		$sql = 'UPDATE film SET title = ?, description = ?, release_year = ?, language_id = ?, original_language_id = ?, rental_duration = ?, rental_rate = ?, length = ?, replacement_cost = ?, rating = ?, special_features = ?, last_update = ? WHERE film_id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($film->getTitle());
		$sqlQuery->set($film->getDescription());
		$sqlQuery->set($film->getReleaseYear());
		$sqlQuery->setNumber($film->getLanguageId());
		$sqlQuery->setNumber($film->getOriginalLanguageId());
		$sqlQuery->setNumber($film->getRentalDuration());
		$sqlQuery->set($film->getRentalRate());
		$sqlQuery->set($film->getLength());
		$sqlQuery->set($film->getReplacementCost());
		$sqlQuery->set($film->getRating());
		$sqlQuery->set($film->getSpecialFeatures());
		$sqlQuery->set($film->getLastUpdate());

		$sqlQuery->set($film->getFilmId());
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM film';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

  public function queryByTitle($value){
    $sql = 'SELECT * FROM film WHERE title = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByDescription($value){
    $sql = 'SELECT * FROM film WHERE description = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByReleaseYear($value){
    $sql = 'SELECT * FROM film WHERE release_year = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByLanguageId($value){
    $sql = 'SELECT * FROM film WHERE language_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->getList($sqlQuery);
  }

  public function queryByOriginalLanguageId($value){
    $sql = 'SELECT * FROM film WHERE original_language_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->getList($sqlQuery);
  }

  public function queryByRentalDuration($value){
    $sql = 'SELECT * FROM film WHERE rental_duration = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->getList($sqlQuery);
  }

  public function queryByRentalRate($value){
    $sql = 'SELECT * FROM film WHERE rental_rate = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByLength($value){
    $sql = 'SELECT * FROM film WHERE length = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByReplacementCost($value){
    $sql = 'SELECT * FROM film WHERE replacement_cost = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByRating($value){
    $sql = 'SELECT * FROM film WHERE rating = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryBySpecialFeatures($value){
    $sql = 'SELECT * FROM film WHERE special_features = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByLastUpdate($value){
    $sql = 'SELECT * FROM film WHERE last_update = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }


  public function deleteByTitle($value){
    $sql = 'DELETE FROM film WHERE title = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByDescription($value){
    $sql = 'DELETE FROM film WHERE description = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByReleaseYear($value){
    $sql = 'DELETE FROM film WHERE release_year = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByLanguageId($value){
    $sql = 'DELETE FROM film WHERE language_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByOriginalLanguageId($value){
    $sql = 'DELETE FROM film WHERE original_language_id = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByRentalDuration($value){
    $sql = 'DELETE FROM film WHERE rental_duration = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByRentalRate($value){
    $sql = 'DELETE FROM film WHERE rental_rate = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByLength($value){
    $sql = 'DELETE FROM film WHERE length = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByReplacementCost($value){
    $sql = 'DELETE FROM film WHERE replacement_cost = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByRating($value){
    $sql = 'DELETE FROM film WHERE rating = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteBySpecialFeatures($value){
    $sql = 'DELETE FROM film WHERE special_features = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByLastUpdate($value){
    $sql = 'DELETE FROM film WHERE last_update = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }


	
	/**
	 * Read row
	 *
	 * @return FilmMySql 
	 */
	protected function readRow($row){
		$film = new Film();
		
		$film->setFilmId($row['film_id']);
		$film->setTitle($row['title']);
		$film->setDescription($row['description']);
		$film->setReleaseYear($row['release_year']);
		$film->setLanguageId($row['language_id']);
		$film->setOriginalLanguageId($row['original_language_id']);
		$film->setRentalDuration($row['rental_duration']);
		$film->setRentalRate($row['rental_rate']);
		$film->setLength($row['length']);
		$film->setReplacementCost($row['replacement_cost']);
		$film->setRating($row['rating']);
		$film->setSpecialFeatures($row['special_features']);
		$film->setLastUpdate($row['last_update']);

		return $film;
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
	 * @return FilmMySql 
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