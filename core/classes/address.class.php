<?php

class Address
{

	//Private Variables
	private $house;
	private $street;
	private $zip;
	private $city;
	private $country;

	function __construct()
	{
		
	}

	public function getHouse(){
		return $this->house;
	}
	public function setHouse($houseIn){
		$this->house = $houseIn;
	}
	public function getStreet(){
		return $this->street;
	}
	public function setStreet($streetIn){
		$this->street = $streetIn;
	}
	public function getZip(){
		return $this->zip;
	}
	public function setZip($zipIn){
		$this->zip = $zipIn;
	}
	public function getCity(){
		return $this->city;
	}
	public function setCity($cityIn){
		$this->city = $cityIn;
	}
	public function getCountry(){
		return $this->country;
	}
	public function setCountry($countryIn){
		$this->country = $countryIn;
	}

}

?>