<?php

  function padSeqCheckHeptagonal ( $f, $n ) {

    if ( file_exists ( PAD . 'sequence/types/heptagonal/bool.php' ) )
      return padSeqBoolHeptagonal ( $n );

    if ( file_exists ( PAD . 'sequence/types/heptagonal/generated.php' ) ) 
      return in_array ( $n, PADheptagonal );

    if ( file_exists ( PAD . 'sequence/types/heptagonal/fixed.php' ) ) {
      $fixed = include PAD . 'sequence/types/heptagonal/fixed.php';
      return in_array ( $n, $fixed );

    }

    $text = padCode ( "{sequence heptagonal, from=$f, stop=$n, try=$n}{\$sequence},{/sequence}" );
    $arr  = explode ( ',', $text );

    return in_array ( $n, $arr );

  }

?>