<?php
class PHPTest extends PHPUnit_Framework_TestCase{ 
public function test(){
  include 'function.php';  
  $this->assertEqual(exp(2),4);
  }
}
?>
