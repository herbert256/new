<?php

  function padSeqCheckKaprekar ( $f, $n ) {

    if ( file_exists ( PAD . 'seq/types/kaprekar/bool.php' ) )
      return padSeqBoolKaprekar ( $n );

    if ( file_exists ( PAD . 'seq/types/kaprekar/generated.php' ) ) 
      return in_array ( $n, PADkaprekar );

    if ( file_exists ( PAD . 'seq/types/kaprekar/fixed.php' ) ) {
      $fixed = include PAD . 'seq/types/kaprekar/fixed.php';
      return in_array ( $n, $fixed );

    }

    $text = padCode ( "{sequence kaprekar, from=$f, stop=$n, try=$n}{\$sequence},{/sequence}" );
    $arr  = explode ( ',', $text );

    return in_array ( $n, $arr );

  }

?>