<?php

  function padSeqCheckPentagonal ( $f, $n ) {

    if ( file_exists ( PAD . 'seq/types/pentagonal/bool.php' ) )
      return padSeqBoolPentagonal ( $n );

    if ( file_exists ( PAD . 'seq/types/pentagonal/generated.php' ) ) 
      return in_array ( $n, PADpentagonal );

    if ( file_exists ( PAD . 'seq/types/pentagonal/fixed.php' ) ) {
      $fixed = include PAD . 'seq/types/pentagonal/fixed.php';
      return in_array ( $n, $fixed );

    }

    $text = padCode ( "{sequence pentagonal, from=$f, stop=$n, try=$n}{\$sequence},{/sequence}" );
    $arr  = explode ( ',', $text );

    return in_array ( $n, $arr );

  }

?>