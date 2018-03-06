<?php
class PHPTest extends PHPUnit_Framework_TestCase{
  $value=4; 
public function test(){
  include 'function.php';
  $this->assertEqual(exp($value),4);
  }
}
?>
