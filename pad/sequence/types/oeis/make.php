<?php

  $padOEIS = include PAD . "sequence/types/oeis/files/$padSeqParm.php";

  if ( isset ( $padOEIS [$padSeqLoop-1] ) )
    return $padOEIS [$padSeqLoop-1];
  else
    return FALSE;

?>