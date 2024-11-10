<?php
  
  $padSeqInfo ['types']  [] = $padSeqSeq;
  $padSeqInfo ['builds'] [] = $padSeqBuild;

  padDone ( $padSeqSeq );

  include PAD . "sequence/build/include.php";
  include PAD . "sequence/build/types/$padSeqBuild.php";
  
  $padSeqDone [] = $padSeqSeq;
 
?>