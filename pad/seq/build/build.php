<?php
  
  $padSeqInfo ['types']  [] = $padSeqSeq;
  $padSeqInfo ['builds'] [] = $padSeqBuild;

  padDone ( $padSeqSeq );

  include PAD . "seq/build/include.php";
  include PAD . "seq/build/types/$padSeqBuild.php";
  
  $padSeqDone [] = $padSeqSeq;
 
?>