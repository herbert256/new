<?php

  foreach ( $padPrm [$pad] as $padSeqEntryName => $padSeqEntryParm )

    if ( file_exists ( PAD . "sequence/actions/types/$padSeqEntryName.php" ) ) {
    
      include PAD . 'sequence/entry/_lib/entry.php';

      $padSeqOptions [] = [ 
        'padPrmName'  => $padSeqEntryName,
        'padPrmValue' => $padSeqEntryParm
      ];

      return include PAD . 'sequence/sequence.php';
      
    }

  return padError ( 'Action not found' );

?>