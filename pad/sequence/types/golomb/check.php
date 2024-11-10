<?php

  function padSeqCheckGolomb ( $f, $n ) {

    if ( file_exists ( PAD . 'sequence/types/golomb/bool.php' ) )
      return padSeqBoolGolomb ( $n );

    if ( file_exists ( PAD . 'sequence/types/golomb/generated.php' ) ) 
      return in_array ( $n, PADgolomb );

    if ( file_exists ( PAD . 'sequence/types/golomb/fixed.php' ) ) {
      $fixed = include PAD . 'sequence/types/golomb/fixed.php';
      return in_array ( $n, $fixed );

    }

    $text = padCode ( "{sequence golomb, from=$f, stop=$n, try=$n}{\$sequence},{/sequence}" );
    $arr  = explode ( ',', $text );

    return in_array ( $n, $arr );

  }

?>