<?php
include "function.php"
class PHPTest extends PHPUnit_Framework_TestCase{
  $value=4; 
public function test(){
  $this->assertEqual(exp($value),4);
  }
}
?>
