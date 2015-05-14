<?php
/**
 * Object represents table 'category'
 *
     * @author: http://phpdao.com
     * @date: 2015-05-13 07:52	 
 */
class Category{
	private $categoryId;
	private $name;
	private $lastUpdate;

	public function getCategoryId() {
		return $this->categoryId;
	}

	public function setCategoryId($categoryId) {
		$this->categoryId = $categoryId;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function getLastUpdate() {
		return $this->lastUpdate;
	}

	public function setLastUpdate($lastUpdate) {
		$this->lastUpdate = $lastUpdate;
	}

}
?>