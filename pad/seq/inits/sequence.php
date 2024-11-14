<?php

  foreach ( $padOptionsSingle as $padSeqSeq => $padSeqParm )
 
    if ( file_exists ( PAD . "seq/types/$padSeqSeq" ) ) {

      if ( ! $padSeqName )
        $padSeqName = $padSeqSeq;

      if ( $padSeqParm === TRUE )
        $padSeqParm = '';
      
      $padSeqDone [] = $padSeqSeq;

      return;

    }
 
  padError ("Sequence not found");

?>