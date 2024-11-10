<?php

  function padSeqCheckSquare ( $f, $n ) {

    if ( file_exists ( PAD . 'sequence/types/square/bool.php' ) )
      return padSeqBoolSquare ( $n );

    if ( file_exists ( PAD . 'sequence/types/square/generated.php' ) ) 
      return in_array ( $n, PADsquare );

    if ( file_exists ( PAD . 'sequence/types/square/fixed.php' ) ) {
      $fixed = include PAD . 'sequence/types/square/fixed.php';
      return in_array ( $n, $fixed );

    }

    $text = padCode ( "{sequence square, from=$f, stop=$n, try=$n}{\$sequence},{/sequence}" );
    $arr  = explode ( ',', $text );

    return in_array ( $n, $arr );

  }

?>