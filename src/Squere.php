<?php
   
    function test()
  {
  $a1=($_POST['height']);
  $a2 =($_POST['width']);
  $b=($_POST['heightar']);
$c=ceil($a1/$b);
$d=ceil($a2/$b);
$e=$c*$d;
  return $e; 
  };
echo test();
?>
