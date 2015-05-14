<?php
/**
 * Object represents table 'language'
 *
     * @author: http://phpdao.com
     * @date: 2015-05-13 07:52	 
 */
class Language{
	private $languageId;
	private $name;
	private $lastUpdate;

	public function getLanguageId() {
		return $this->languageId;
	}

	public function setLanguageId($languageId) {
		$this->languageId = $languageId;
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