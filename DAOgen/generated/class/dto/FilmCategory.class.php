<?php
/**
 * Object represents table 'film_category'
 *
     * @author: http://phpdao.com
     * @date: 2015-05-13 07:52	 
 */
class FilmCategory{
	private $filmId;
	private $categoryId;
	private $lastUpdate;

	public function getFilmId() {
		return $this->filmId;
	}

	public function setFilmId($filmId) {
		$this->filmId = $filmId;
	}

	public function getCategoryId() {
		return $this->categoryId;
	}

	public function setCategoryId($categoryId) {
		$this->categoryId = $categoryId;
	}

	public function getLastUpdate() {
		return $this->lastUpdate;
	}

	public function setLastUpdate($lastUpdate) {
		$this->lastUpdate = $lastUpdate;
	}

}
?>