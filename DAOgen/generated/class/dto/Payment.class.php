<?php
/**
 * Object represents table 'payment'
 *
     * @author: http://phpdao.com
     * @date: 2015-05-13 07:52	 
 */
class Payment{
	private $paymentId;
	private $customerId;
	private $staffId;
	private $rentalId;
	private $amount;
	private $paymentDate;
	private $lastUpdate;

	public function getPaymentId() {
		return $this->paymentId;
	}

	public function setPaymentId($paymentId) {
		$this->paymentId = $paymentId;
	}

	public function getCustomerId() {
		return $this->customerId;
	}

	public function setCustomerId($customerId) {
		$this->customerId = $customerId;
	}

	public function getStaffId() {
		return $this->staffId;
	}

	public function setStaffId($staffId) {
		$this->staffId = $staffId;
	}

	public function getRentalId() {
		return $this->rentalId;
	}

	public function setRentalId($rentalId) {
		$this->rentalId = $rentalId;
	}

	public function getAmount() {
		return $this->amount;
	}

	public function setAmount($amount) {
		$this->amount = $amount;
	}

	public function getPaymentDate() {
		return $this->paymentDate;
	}

	public function setPaymentDate($paymentDate) {
		$this->paymentDate = $paymentDate;
	}

	public function getLastUpdate() {
		return $this->lastUpdate;
	}

	public function setLastUpdate($lastUpdate) {
		$this->lastUpdate = $lastUpdate;
	}

}
?>