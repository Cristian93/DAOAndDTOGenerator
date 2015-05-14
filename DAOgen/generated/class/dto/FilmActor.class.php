<?php
/**
 * Object represents table 'film_actor'
 *
     * @author: http://phpdao.com
     * @date: 2015-05-13 07:52	 
 */
class FilmActor{
	private $actorId;
	private $filmId;
	private $lastUpdate;

	public function getActorId() {
		return $this->actorId;
	}

	public function setActorId($actorId) {
		$this->actorId = $actorId;
	}

	public function getFilmId() {
		return $this->filmId;
	}

	public function setFilmId($filmId) {
		$this->filmId = $filmId;
	}

	public function getLastUpdate() {
		return $this->lastUpdate;
	}

	public function setLastUpdate($lastUpdate) {
		$this->lastUpdate = $lastUpdate;
	}

}
?>