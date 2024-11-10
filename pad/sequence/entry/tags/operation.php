<?php

  foreach ( $padPrm [$pad] as $padSeqEntryName => $padSeqEntryParm )
   
    if ( file_exists ( PAD . "sequence/types/$padSeqEntryName/flags/operationDouble") 
      or file_exists ( PAD . "sequence/types/$padSeqEntryName/flags/operationSingle") )

      return include PAD . 'sequence/entry/_lib/operation.php';

  return padError ( 'Action not found' );

?>