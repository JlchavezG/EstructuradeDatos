<?php
 $array = array(
   'fruta1' => 'uva',
   'fruta2' => 'naranja',
   'fruta3' => 'durazno',
   'fruta4' => 'uva',
   'fruta5' => 'uva'
 );
 while($nombreFruta = current($array)){
    if($nombreFruta == 'uva'){
       echo key($array).'<br>';
    }
    next($array);
 }
?>