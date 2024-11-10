<?php

  function padSeqCheckExponentiation ( $f, $n ) {

    if ( file_exists ( PAD . 'sequence/types/exponentiation/bool.php' ) )
      return padSeqBoolExponentiation ( $n );

    if ( file_exists ( PAD . 'sequence/types/exponentiation/generated.php' ) ) 
      return in_array ( $n, PADexponentiation );

    if ( file_exists ( PAD . 'sequence/types/exponentiation/fixed.php' ) ) {
      $fixed = include PAD . 'sequence/types/exponentiation/fixed.php';
      return in_array ( $n, $fixed );

    }

    $text = padCode ( "{sequence exponentiation, from=$f, stop=$n, try=$n}{\$sequence},{/sequence}" );
    $arr  = explode ( ',', $text );

    return in_array ( $n, $arr );

  }

?>