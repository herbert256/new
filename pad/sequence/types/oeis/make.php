<?php

  include_once PAD . 'sequence/types/oeis/oeis.php';

  if ( isset ( OEIS [$padSeqParm] [$padSeqLoop-1] ) )
    return OEIS [$padSeqParm] [$padSeqLoop-1];
  else
    return FALSE;

?>