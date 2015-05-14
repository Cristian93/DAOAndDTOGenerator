<?php
/**
 * Object represents table 'film'
 *
     * @author: http://phpdao.com
     * @date: 2015-05-13 07:52	 
 */
class Film{
	private $filmId;
	private $title;
	private $description;
	private $releaseYear;
	private $languageId;
	private $originalLanguageId;
	private $rentalDuration;
	private $rentalRate;
	private $length;
	private $replacementCost;
	private $rating;
	private $specialFeatures;
	private $lastUpdate;

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

	public function getReleaseYear() {
		return $this->releaseYear;
	}

	public function setReleaseYear($releaseYear) {
		$this->releaseYear = $releaseYear;
	}

	public function getLanguageId() {
		return $this->languageId;
	}

	public function setLanguageId($languageId) {
		$this->languageId = $languageId;
	}

	public function getOriginalLanguageId() {
		return $this->originalLanguageId;
	}

	public function setOriginalLanguageId($originalLanguageId) {
		$this->originalLanguageId = $originalLanguageId;
	}

	public function getRentalDuration() {
		return $this->rentalDuration;
	}

	public function setRentalDuration($rentalDuration) {
		$this->rentalDuration = $rentalDuration;
	}

	public function getRentalRate() {
		return $this->rentalRate;
	}

	public function setRentalRate($rentalRate) {
		$this->rentalRate = $rentalRate;
	}

	public function getLength() {
		return $this->length;
	}

	public function setLength($length) {
		$this->length = $length;
	}

	public function getReplacementCost() {
		return $this->replacementCost;
	}

	public function setReplacementCost($replacementCost) {
		$this->replacementCost = $replacementCost;
	}

	public function getRating() {
		return $this->rating;
	}

	public function setRating($rating) {
		$this->rating = $rating;
	}

	public function getSpecialFeatures() {
		return $this->specialFeatures;
	}

	public function setSpecialFeatures($specialFeatures) {
		$this->specialFeatures = $specialFeatures;
	}

	public function getLastUpdate() {
		return $this->lastUpdate;
	}

	public function setLastUpdate($lastUpdate) {
		$this->lastUpdate = $lastUpdate;
	}

}
?>