<?php

  foreach ( $padPrm [$pad] as $padSeqEntryName => $padSeqEntryParm  )

    if ( file_exists ( PAD . "sequence/one/types/$padSeqEntryName.php" ) )  {

      if ( $padSeqEntryName == 'min'    ) $padSeqMin    = PHP_INT_MIN;
      if ( $padSeqEntryName == 'max'    ) $padSeqMax    = PHP_INT_MAX;
      if ( $padSeqEntryName == 'random' ) $padSeqRandom = ''; 

      include PAD . 'sequence/entry/_lib/entry.php';

      $padSeqOptions [] = [ 
        'padPrmName'  => 'one',
        'padPrmValue' => "$padSeqEntryName|$padSeqEntryParm"
      ]; 

      return include PAD . 'sequence/sequence.php';

    }

  return padError ( 'One not found' );

?>