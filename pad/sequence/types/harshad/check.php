<?php

  function padSeqCheckHarshad ( $f, $n ) {

    if ( file_exists ( PAD . 'sequence/types/harshad/bool.php' ) )
      return padSeqBoolHarshad ( $n );

    if ( file_exists ( PAD . 'sequence/types/harshad/generated.php' ) ) 
      return in_array ( $n, PADharshad );

    if ( file_exists ( PAD . 'sequence/types/harshad/fixed.php' ) ) {
      $fixed = include PAD . 'sequence/types/harshad/fixed.php';
      return in_array ( $n, $fixed );

    }

    $text = padCode ( "{sequence harshad, from=$f, stop=$n, try=$n}{\$sequence},{/sequence}" );
    $arr  = explode ( ',', $text );

    return in_array ( $n, $arr );

  }

?>