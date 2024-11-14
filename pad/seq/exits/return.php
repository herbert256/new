<?php

  $padSeqReturn = [];

  $padSeqNames [] = $padPrm [$pad] ['name']   ?? ''; 
  $padSeqNames [] = $padPrm [$pad] ['toData'] ?? '';
  $padSeqNames [] = 'seq';
  $padSeqNames [] = $padSeqSeq;
  $padSeqNames [] = $padSeqName; 
  $padSeqNames [] = $padSeqGet;
  $padSeqNames [] = $padSeqSet;
  $padSeqNames [] = $padName [$pad]; 
  $padSeqNames [] = $padTag [$pad];

  $padSeqNames = array_unique ( $padSeqNames );

  foreach ($padSeqResult as $padSeqValue  ) {

     $padSeqRecord = [];

     foreach ( $padSeqNames as $padSeqName )
       if ( $padSeqName )
         $padSeqRecord [$padSeqName] = $padSeqValue;

     $padSeqReturn [] = $padSeqRecord; 

  } 


?>