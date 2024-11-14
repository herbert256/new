<?php

  $padSeqSetSeq  = $padTag [$pad];
  $padSeqSetParm = $padParm;
 
  if ( file_exists ( PAD . "sequence/types/$padSeqSetSeq/flags/parm") )
    $padSeqParmUsed = TRUE;

  return include PAD . 'sequence/sequence.php';

?>