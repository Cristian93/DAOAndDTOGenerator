<?php
/**
 * Object represents table 'customer'
 *
     * @author: http://phpdao.com
     * @date: 2015-05-13 07:52	 
 */
class Customer{
	private $customerId;
	private $storeId;
	private $firstName;
	private $lastName;
	private $email;
	private $addressId;
	private $active;
	private $createDate;
	private $lastUpdate;

	public function getCustomerId() {
		return $this->customerId;
	}

	public function setCustomerId($customerId) {
		$this->customerId = $customerId;
	}

	public function getStoreId() {
		return $this->storeId;
	}

	public function setStoreId($storeId) {
		$this->storeId = $storeId;
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

	public function getEmail() {
		return $this->email;
	}

	public function setEmail($email) {
		$this->email = $email;
	}

	public function getAddressId() {
		return $this->addressId;
	}

	public function setAddressId($addressId) {
		$this->addressId = $addressId;
	}

	public function getActive() {
		return $this->active;
	}

	public function setActive($active) {
		$this->active = $active;
	}

	public function getCreateDate() {
		return $this->createDate;
	}

	public function setCreateDate($createDate) {
		$this->createDate = $createDate;
	}

	public function getLastUpdate() {
		return $this->lastUpdate;
	}

	public function setLastUpdate($lastUpdate) {
		$this->lastUpdate = $lastUpdate;
	}

}
?>