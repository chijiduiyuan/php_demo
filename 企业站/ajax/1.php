<?php

  $a=array('username'=>'admin','userid'=>3);
  $c=json_encode($a);
  print_r($c);
  $d=json_decode($c);
  print_r($d);








?>