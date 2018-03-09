<?php
class PHPTest extends PHPUnit_Framework_TestCase{ 
public function test(){
  use 'function.php';  
  $this->assertEqual(exp(2),4);
  }
}
?>
