<?php

  function padSeqCheckOctahedral ( $f, $n ) {

    if ( file_exists ( PAD . 'sequence/types/octahedral/bool.php' ) )
      return padSeqBoolOctahedral ( $n );

    if ( file_exists ( PAD . 'sequence/types/octahedral/generated.php' ) ) 
      return in_array ( $n, PADoctahedral );

    if ( file_exists ( PAD . 'sequence/types/octahedral/fixed.php' ) ) {
      $fixed = include PAD . 'sequence/types/octahedral/fixed.php';
      return in_array ( $n, $fixed );

    }

    $text = padCode ( "{sequence octahedral, from=$f, stop=$n, try=$n}{\$sequence},{/sequence}" );
    $arr  = explode ( ',', $text );

    return in_array ( $n, $arr );

  }

?>