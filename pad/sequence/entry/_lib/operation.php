<?php

  if ( ! $padSeqEntryParm and file_exists ( PAD . "sequence/types/$padSeqEntryName/flags/operationDouble") ) {
    $padSeqEntryParm = $padParm;
    $padSeqParmUsed  = TRUE;
  }

  $padSeqTypeSave = '';

  include PAD . 'sequence/entry/_lib/entry.php';

  $padSeqSeq   = $padSeqEntryName;
  $padPrmValue = $padSeqEntryParm;
  $padSeqType  = 'make';

  include PAD . 'sequence/operations/add.php';

  return include PAD . 'sequence/sequence.php';
      
?>