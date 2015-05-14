<?php
/**
 * Object represents table 'inventory'
 *
     * @author: http://phpdao.com
     * @date: 2015-05-13 07:52	 
 */
class Inventory{
	private $inventoryId;
	private $filmId;
	private $storeId;
	private $lastUpdate;

	public function getInventoryId() {
		return $this->inventoryId;
	}

	public function setInventoryId($inventoryId) {
		$this->inventoryId = $inventoryId;
	}

	public function getFilmId() {
		return $this->filmId;
	}

	public function setFilmId($filmId) {
		$this->filmId = $filmId;
	}

	public function getStoreId() {
		return $this->storeId;
	}

	public function setStoreId($storeId) {
		$this->storeId = $storeId;
	}

	public function getLastUpdate() {
		return $this->lastUpdate;
	}

	public function setLastUpdate($lastUpdate) {
		$this->lastUpdate = $lastUpdate;
	}

}
?>