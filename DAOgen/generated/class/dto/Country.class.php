<?php
/**
 * Object represents table 'country'
 *
     * @author: http://phpdao.com
     * @date: 2015-05-13 07:52	 
 */
class Country{
	private $countryId;
	private $country;
	private $lastUpdate;

	public function getCountryId() {
		return $this->countryId;
	}

	public function setCountryId($countryId) {
		$this->countryId = $countryId;
	}

	public function getCountry() {
		return $this->country;
	}

	public function setCountry($country) {
		$this->country = $country;
	}

	public function getLastUpdate() {
		return $this->lastUpdate;
	}

	public function setLastUpdate($lastUpdate) {
		$this->lastUpdate = $lastUpdate;
	}

}
?>