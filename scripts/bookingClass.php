<?php
class Hotel {
    public $name,$price,$wifi,$pool,$gym,$parking,$bar,$pets,$restaurant,$spa,$tv,$ac;
  
    function __construct($n0,$n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8,$n9,$n10,$n11) {
      $this->name = $n0;
      $this->price = $n1;
      $this->wifi = $n2;
      $this->pool = $n3;
      $this->gym = $n4;
      $this->parking = $n5;
      $this->bar = $n6;
      $this->pets = $n7;
      $this->restaurant = $n8;
      $this->spa = $n9;
      $this->tv = $n10;
      $this->ac = $n11;
    }
}
?>