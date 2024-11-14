<?php

  function padSeqCheckSemiprime ( $f, $n ) {

    if ( file_exists ( PAD . 'seq/types/semiprime/bool.php' ) )
      return padSeqBoolSemiprime ( $n );

    if ( file_exists ( PAD . 'seq/types/semiprime/generated.php' ) ) 
      return in_array ( $n, PADsemiprime );

    if ( file_exists ( PAD . 'seq/types/semiprime/fixed.php' ) ) {
      $fixed = include PAD . 'seq/types/semiprime/fixed.php';
      return in_array ( $n, $fixed );

    }

    $text = padCode ( "{sequence semiprime, from=$f, stop=$n, try=$n}{\$sequence},{/sequence}" );
    $arr  = explode ( ',', $text );

    return in_array ( $n, $arr );

  }

?>