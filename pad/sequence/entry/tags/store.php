<?php

  foreach ( $padPrm [$pad] as $padSeqSetStore => $padSeqSetParm )
    if ( isset ( $padSeqStore [$padSeqSetStore] ) ) {
      $padSeqNoNo [$padSeqSetStore] = TRUE;
      return include PAD . 'sequence/sequence.php';
    }

  foreach ( $padOpt [$pad] as $padK => $padSeqSetStore )
    if ( isset ( $padSeqStore [$padSeqSetStore] ) )
      return include PAD . 'sequence/sequence.php';

  return padError ( 'Store not found' );

?>