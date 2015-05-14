<?php
/**
 * Object represents table 'rental'
 *
     * @author: http://phpdao.com
     * @date: 2015-05-13 07:52	 
 */
class Rental{
	private $rentalId;
	private $rentalDate;
	private $inventoryId;
	private $customerId;
	private $returnDate;
	private $staffId;
	private $lastUpdate;

	public function getRentalId() {
		return $this->rentalId;
	}

	public function setRentalId($rentalId) {
		$this->rentalId = $rentalId;
	}

	public function getRentalDate() {
		return $this->rentalDate;
	}

	public function setRentalDate($rentalDate) {
		$this->rentalDate = $rentalDate;
	}

	public function getInventoryId() {
		return $this->inventoryId;
	}

	public function setInventoryId($inventoryId) {
		$this->inventoryId = $inventoryId;
	}

	public function getCustomerId() {
		return $this->customerId;
	}

	public function setCustomerId($customerId) {
		$this->customerId = $customerId;
	}

	public function getReturnDate() {
		return $this->returnDate;
	}

	public function setReturnDate($returnDate) {
		$this->returnDate = $returnDate;
	}

	public function getStaffId() {
		return $this->staffId;
	}

	public function setStaffId($staffId) {
		$this->staffId = $staffId;
	}

	public function getLastUpdate() {
		return $this->lastUpdate;
	}

	public function setLastUpdate($lastUpdate) {
		$this->lastUpdate = $lastUpdate;
	}

}
?>