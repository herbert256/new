<?php

  include PAD . 'catch/catch/_catch.php';
  
  $pad--;

  padResetLvl ($pad+1);

  if ( $pad >= 0 )
    padPad ( '' );

?>