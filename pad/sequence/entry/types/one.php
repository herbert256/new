<?php

  $padSeqEntryName = $padTag [$pad];
  $padSeqEntryParm = $padOpt [$pad] [1]; 

  include PAD . 'sequence/entry/_lib/entry.php';

  $padSeqOptions [] = [ 
    'padPrmName'  => 'one',
    'padPrmValue' => "$padSeqEntryName|$padSeqEntryParm"
  ]; 

  return include PAD . 'sequence/sequence.php';
  
?>