<?php

  function padSeqCheckPowerful ( $f, $n ) {

    if ( file_exists ( PAD . 'seq/types/powerful/bool.php' ) )
      return padSeqBoolPowerful ( $n );

    if ( file_exists ( PAD . 'seq/types/powerful/generated.php' ) ) 
      return in_array ( $n, PADpowerful );

    if ( file_exists ( PAD . 'seq/types/powerful/fixed.php' ) ) {
      $fixed = include PAD . 'seq/types/powerful/fixed.php';
      return in_array ( $n, $fixed );

    }

    $text = padCode ( "{sequence powerful, from=$f, stop=$n, try=$n}{\$sequence},{/sequence}" );
    $arr  = explode ( ',', $text );

    return in_array ( $n, $arr );

  }

?>