<?php
/**
 * Object represents table 'store'
 *
     * @author: http://phpdao.com
     * @date: 2015-05-13 07:52	 
 */
class Store{
	private $storeId;
	private $managerStaffId;
	private $addressId;
	private $lastUpdate;

	public function getStoreId() {
		return $this->storeId;
	}

	public function setStoreId($storeId) {
		$this->storeId = $storeId;
	}

	public function getManagerStaffId() {
		return $this->managerStaffId;
	}

	public function setManagerStaffId($managerStaffId) {
		$this->managerStaffId = $managerStaffId;
	}

	public function getAddressId() {
		return $this->addressId;
	}

	public function setAddressId($addressId) {
		$this->addressId = $addressId;
	}

	public function getLastUpdate() {
		return $this->lastUpdate;
	}

	public function setLastUpdate($lastUpdate) {
		$this->lastUpdate = $lastUpdate;
	}

}
?>