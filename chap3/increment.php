<?php
  $x = 10;
  $y = ++$x;

  print $x;
//前置加算(元の方も影響をうける。)
  print $y;

   $i = 10;
//   //後置加算(元の方も影響をうける。)
   $j = $i++;
   print $i;
   print $j;
  
?>
