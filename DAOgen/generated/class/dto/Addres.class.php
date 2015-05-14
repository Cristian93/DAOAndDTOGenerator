<?php
/**
 * Object represents table 'address'
 *
     * @author: http://phpdao.com
     * @date: 2015-05-13 07:52	 
 */
class Addres{
	private $addressId;
	private $address;
	private $address2;
	private $district;
	private $cityId;
	private $postalCode;
	private $phone;
	private $lastUpdate;

	public function getAddressId() {
		return $this->addressId;
	}

	public function setAddressId($addressId) {
		$this->addressId = $addressId;
	}

	public function getAddress() {
		return $this->address;
	}

	public function setAddress($address) {
		$this->address = $address;
	}

	public function getAddress2() {
		return $this->address2;
	}

	public function setAddress2($address2) {
		$this->address2 = $address2;
	}

	public function getDistrict() {
		return $this->district;
	}

	public function setDistrict($district) {
		$this->district = $district;
	}

	public function getCityId() {
		return $this->cityId;
	}

	public function setCityId($cityId) {
		$this->cityId = $cityId;
	}

	public function getPostalCode() {
		return $this->postalCode;
	}

	public function setPostalCode($postalCode) {
		$this->postalCode = $postalCode;
	}

	public function getPhone() {
		return $this->phone;
	}

	public function setPhone($phone) {
		$this->phone = $phone;
	}

	public function getLastUpdate() {
		return $this->lastUpdate;
	}

	public function setLastUpdate($lastUpdate) {
		$this->lastUpdate = $lastUpdate;
	}

}
?>