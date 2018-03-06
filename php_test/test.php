<?php
class PHPTest extends PHPUnit_Framework_TestCase{
  include "function.php"
  $value=4; 
public function test(){
  $this->assertEqual(exp($value),4);
  }
}
?>
