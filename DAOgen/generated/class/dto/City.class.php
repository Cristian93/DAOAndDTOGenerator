<?php
/**
 * Object represents table 'city'
 *
     * @author: http://phpdao.com
     * @date: 2015-05-13 07:52	 
 */
class City{
	private $cityId;
	private $city;
	private $countryId;
	private $lastUpdate;

	public function getCityId() {
		return $this->cityId;
	}

	public function setCityId($cityId) {
		$this->cityId = $cityId;
	}

	public function getCity() {
		return $this->city;
	}

	public function setCity($city) {
		$this->city = $city;
	}

	public function getCountryId() {
		return $this->countryId;
	}

	public function setCountryId($countryId) {
		$this->countryId = $countryId;
	}

	public function getLastUpdate() {
		return $this->lastUpdate;
	}

	public function setLastUpdate($lastUpdate) {
		$this->lastUpdate = $lastUpdate;
	}

}
?>