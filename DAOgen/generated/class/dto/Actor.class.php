<?php
/**
 * Object represents table 'actor'
 *
     * @author: http://phpdao.com
     * @date: 2015-05-13 07:52	 
 */
class Actor{
	private $actorId;
	private $firstName;
	private $lastName;
	private $lastUpdate;

	public function getActorId() {
		return $this->actorId;
	}

	public function setActorId($actorId) {
		$this->actorId = $actorId;
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

	public function getLastUpdate() {
		return $this->lastUpdate;
	}

	public function setLastUpdate($lastUpdate) {
		$this->lastUpdate = $lastUpdate;
	}

}
?>