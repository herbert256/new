<?php

  if ( count($padSeqResult) > $padSeqActionCnt )
    if ( $padSeqActionName == 'first')
      return array_slice ( $padSeqResult, 0, $padSeqActionCnt );
    else 
      return array_slice ( $padSeqResult, $padSeqActionCnt * -1 );
  else
    return include PAD . 'sequence/actions/types/first.php';
  
?>