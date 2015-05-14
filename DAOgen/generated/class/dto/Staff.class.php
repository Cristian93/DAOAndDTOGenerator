<?php
/**
 * Object represents table 'staff'
 *
     * @author: http://phpdao.com
     * @date: 2015-05-13 07:52	 
 */
class Staff{
	private $staffId;
	private $firstName;
	private $lastName;
	private $addressId;
	private $picture;
	private $email;
	private $storeId;
	private $active;
	private $username;
	private $password;
	private $lastUpdate;

	public function getStaffId() {
		return $this->staffId;
	}

	public function setStaffId($staffId) {
		$this->staffId = $staffId;
	}

	public function getFirstName() {
		return $this->firstName;
	}

	public function setFirstName($firstName) {
		$this->firstName = $firstName;
	}

	public function getLastName() {
		return $this->lastName;
	}

	public function setLastName($lastName) {
		$this->lastName = $lastName;
	}

	public function getAddressId() {
		return $this->addressId;
	}

	public function setAddressId($addressId) {
		$this->addressId = $addressId;
	}

	public function getPicture() {
		return $this->picture;
	}

	public function setPicture($picture) {
		$this->picture = $picture;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail($email) {
		$this->email = $email;
	}

	public function getStoreId() {
		return $this->storeId;
	}

	public function setStoreId($storeId) {
		$this->storeId = $storeId;
	}

	public function getActive() {
		return $this->active;
	}

	public function setActive($active) {
		$this->active = $active;
	}

	public function getUsername() {
		return $this->username;
	}

	public function setUsername($username) {
		$this->username = $username;
	}

	public function getPassword() {
		return $this->password;
	}

	public function setPassword($password) {
		$this->password = $password;
	}

	public function getLastUpdate() {
		return $this->lastUpdate;
	}

	public function setLastUpdate($lastUpdate) {
		$this->lastUpdate = $lastUpdate;
	}

}
?>