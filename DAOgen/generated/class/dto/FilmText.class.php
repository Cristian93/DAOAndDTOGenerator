<?php
/**
 * Object represents table 'film_text'
 *
     * @author: http://phpdao.com
     * @date: 2015-05-13 07:52	 
 */
class FilmText{
	private $filmId;
	private $title;
	private $description;

	public function getFilmId() {
		return $this->filmId;
	}

	public function setFilmId($filmId) {
		$this->filmId = $filmId;
	}

	public function getTitle() {
		return $this->title;
	}

	public function setTitle($title) {
		$this->title = $title;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
	}

}
?>