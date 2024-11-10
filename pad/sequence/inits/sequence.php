<?php

  if ( $padSeqSetSeq or $padSeqSetStore )
    return include PAD . 'sequence/inits/sequence/set.php';

  foreach ( $padOpt [$pad] as $padSeqSeq => $padSeqParm )
    if ( $padSeqSeq )
      if     ( strpos ( $padSeqParm, '..' ) ) return include PAD . 'sequence/inits/sequence/range.php';
      elseif ( strpos ( $padSeqParm, ';'  ) ) return include PAD . 'sequence/inits/sequence/list.php';

  foreach ( $padSeqEntryList as $padSeqSeq => $padSeqParm )
    if ( $padSeqSeq ) 
      if ( isset ( $padSeqStore [$padSeqSeq] ) ) 
        return include PAD . 'sequence/inits/sequence/store.php';
      elseif ( file_exists ( PAD . "sequence/types/$padSeqSeq" ) ) 
        return include PAD . 'sequence/inits/sequence/type.php';

    if ( $padSeqEntryParm ) {

      $padSeqExplode = padExplode  ( $padSeqEntryParm, '|' ); 
      $padSeqSeq     = array_shift ( $padSeqExplode );
      $padSeqParm    = implode     ( '|', $padSeqExplode );

      if  ( isset ( $padSeqStore [$padSeqSeq] ) ) 
        return include PAD . 'sequence/inits/sequence/store.php';
      elseif ( file_exists ( PAD . "sequence/types/$padSeqSeq" ) ) 
        return include PAD . 'sequence/inits/sequence/type.php';

    }

  return include PAD . 'sequence/inits/sequence/loop.php';
 
?>