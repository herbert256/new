<?php

  function padSeqCheckList ( $f, $n ) {

    if ( file_exists ( PAD . 'sequence/types/list/bool.php' ) )
      return padSeqBoolList ( $n );

    if ( file_exists ( PAD . 'sequence/types/list/generated.php' ) ) 
      return in_array ( $n, PADlist );

    if ( file_exists ( PAD . 'sequence/types/list/fixed.php' ) ) {
      $fixed = include PAD . 'sequence/types/list/fixed.php';
      return in_array ( $n, $fixed );

    }

    $text = padCode ( "{sequence list, from=$f, stop=$n, try=$n}{\$sequence},{/sequence}" );
    $arr  = explode ( ',', $text );

    return in_array ( $n, $arr );

  }

?>