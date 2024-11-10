<?php

  function padSeqCheckLoop ( $f, $n ) {

    if ( file_exists ( PAD . 'sequence/types/loop/bool.php' ) )
      return padSeqBoolLoop ( $n );

    if ( file_exists ( PAD . 'sequence/types/loop/generated.php' ) ) 
      return in_array ( $n, PADloop );

    if ( file_exists ( PAD . 'sequence/types/loop/fixed.php' ) ) {
      $fixed = include PAD . 'sequence/types/loop/fixed.php';
      return in_array ( $n, $fixed );

    }

    $text = padCode ( "{sequence loop, from=$f, stop=$n, try=$n}{\$sequence},{/sequence}" );
    $arr  = explode ( ',', $text );

    return in_array ( $n, $arr );

  }

?>