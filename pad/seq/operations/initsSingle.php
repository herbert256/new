<?php

  if ( $padPrmValue and isset ( $padSeqStore [$padPrmValue] ) )
    padError ( "Sequence: Store name not allowed in Single mode: $padSeqSeq -> $padPrmValue");

  if ( ! $padPrmValue and file_exists ( PAD . "seq/types/$padSeqSeq/flags/parm") )
    padError ( "Sequence: Operation must have a parameter: $padSeqSeq");

  if ( $padSeqTypeSave ) {
    $padSeqType     = $padSeqTypeSave;
    $padSeqTypeSave = '';
  }

  $padSeqInfo ['operations/single'] [] = $padSeqSeq;

  $padSeqDone [] = $padSeqSeq;

?>