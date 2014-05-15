<?php 

class User
{

	//Private Variables
	private $id;
	private $name;
	private $surname;
	private $email;
	private $password;
	private $salt;
	private $address;
	private $phone;

	function __construct()
	{

	}

	public function getId(){
		return $this->id;
	}
	public function setId($idIn){
		$this->id = $idIn;
	}
	public function getName(){
		return $this->name;
	}
	public function setName($nameIn){
		$this->name = $nameIn;
	}
	public function getSurname(){
		return $this->surname;
	}
	public function setSurname($surnameIn){
		$this->surname = $surnameIn;
	}
	public function getEmail(){
		return $this->email;
	}
	public function setEmail($emailIn){
		$this->email = $emailIn;
	}
	public function getPassword()
	{
		return $this->password;
	}
	public function setPassword($password)
	{
		$this->password = $password;
	}
	public function getSalt()
	{
		return $this->salt;
	}
	public function setSalt($salt)
	{
		$this->salt = $salt;
	}
	public function getAddress(){
		return $this->address;
	}
	public function setAddress($addressIn){
		$this->address = $addressIn;
	}
	public function getPhone(){
		return $this->phone;
	}
	public function setPhone($phoneIn){
		$this->phone = $phoneIn;
	}

}

?>