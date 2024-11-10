<?php

  $padSeqCheck = FALSE;
  $padSeqTry   = PHP_INT_MAX;
  $padSeqFixed = include PAD . "sequence/types/$padSeqSeq/fixed.php";
 
  include PAD . 'sequence/build/oprToMain.php';

  foreach ( $padSeqFixed as $padSeqLoop )
    if ( ! include PAD . 'sequence/build/one.php')
      break;

?>