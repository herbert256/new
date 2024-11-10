<?php

  function padSeqCheckPronic ( $f, $n ) {

    if ( file_exists ( PAD . 'sequence/types/pronic/bool.php' ) )
      return padSeqBoolPronic ( $n );

    if ( file_exists ( PAD . 'sequence/types/pronic/generated.php' ) ) 
      return in_array ( $n, PADpronic );

    if ( file_exists ( PAD . 'sequence/types/pronic/fixed.php' ) ) {
      $fixed = include PAD . 'sequence/types/pronic/fixed.php';
      return in_array ( $n, $fixed );

    }

    $text = padCode ( "{sequence pronic, from=$f, stop=$n, try=$n}{\$sequence},{/sequence}" );
    $arr  = explode ( ',', $text );

    return in_array ( $n, $arr );

  }

?>