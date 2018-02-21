<?php
class Student{
	private $firstName = "";
	private $lastName = "";
	private $Id = "";
	public function __construct($firstname, $lastname, $id) {
              $this->firstName = $firstname;
              $this->lastName = $lastname;
              $this->Id = $id;
            }
            
	public function newStudent(){
              return " New Student is " . $this->firstName . " " . $this->lastName  ;
            }
	public function getStudent(){
	return $this->firstName. " " . $this->lastName. " " . $this->Id;
	}
	
	public function set_fname($new_fname){
		$this->firstName = $new_fname;
	}
	public function set_lname($new_lname){
		$this->lastName = $new_lname;
	}
	public function set_id($new_Id){
		$this->Id = $new_Id;
	}
	public function get_fname(){
		return $this->firstName;
	}
	public function get_lname(){
		return $this->lastName;
	}
	public function get_Id(){
		return $this->Id;
	}
}
$fName = $_POST["firstname"];
$lastName = $_POST["lastname"];
$stuId = $_POST["stunumber"];
/*
$fName = "John";
$lastName = "Smith";
$stuId = "7539839539";
*/
$student = new Student($fName,$lastName,$stuId);
$database = "/Users/FrancisParrilla/CPS630/Lab4/students.txt";
$handle = fopen($database, "a") or die("Cannot open file: ".$database );
$data_entry = $student->getStudent() . "\n";
fwrite($handle, $data_entry); 
ini_set('display_errors', 1); error_reporting(E_ALL);
$carl = new Student("John","Smith","2938520");
echo $data_entry;
?>
