<?php

  $padSeqSeqSave = $padSeqSeq;
  
  foreach ( $padSeqOptions as  $padSeqOption ) {

    extract (  $padSeqOption );

    if ( $padPrmName == $padSeqPull or $padPrmName == $padSeqSeq )
      continue;

    elseif ( $padPrmName == 'one' )

      include PAD . 'sequence/one/one.php';

    elseif ( str_starts_with ( $padPrmName, 'action' ) )

      include PAD . 'sequence/actions/action.php';

    elseif ( str_starts_with ( $padPrmName, 'store' ) )

      include PAD . 'sequence/store/store.php';

    elseif ( file_exists ( PAD . "sequence/options/types/$padPrmName.php" ) )

      continue;

    elseif ( file_exists ( PAD . "sequence/actions/types/$padPrmName.php" ) )

      include PAD . 'sequence/actions/action.php';

    elseif ( file_exists ( PAD . "sequence/one/types/$padPrmName.php" ) )

      include PAD . 'sequence/one/one.php';

  }
 
  $padSeqSeq = $padSeqSeqSave;

?>