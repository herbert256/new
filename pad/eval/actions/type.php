<?php
  
  $kind = $result [$k] [2];
  $name = $result [$k] [0];
 
  if ( $GLOBALS ['padInfo'] )
    include PAD . 'events/functions.php';

  if ( $result [$k] [4] ) 
    include PAD . 'eval/actions/typeSingle.php';
  else
    include PAD . 'eval/actions/typeParms.php';
  
  $value = include PAD . 'call/any.php' ;
  
  $result [$k] [1] = 'VAL';
  $result [$k] [0] = $value;

  padEvalOpr ($result, $myself, $start, $end );

?>