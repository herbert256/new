<?php

  $padSeqCheck = FALSE;
  $padSeqTry   = PHP_INT_MAX;
  $padSeqFixed = include PAD . "seq/types/$padSeqSeq/fixed.php";
 
  include PAD . 'seq/build/oprToMain.php';

  foreach ( $padSeqFixed as $padSeqLoop )
    if ( ! include PAD . 'seq/build/one.php')
      break;

?>