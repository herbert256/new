<?php

  if ( $padSeqSeq == 'operation' ) {
    $padExplode  = explode ('|', $padPrmValue, 2); 
    $padSeqSeq   = $padExplode [0] ?? '';
    $padPrmValue = $padExplode [1] ?? '';
  }

  if ( $padPrmValue and isset ( $padSeqStore [$padPrmValue] ) 
    and file_exists ( PAD . "sequence/types/$padSeqSeq/flags/operationDouble") ) 

    include PAD . 'sequence/operations/initsDouble.php';

  elseif ( file_exists ( PAD . "sequence/types/$padSeqSeq/flags/operationSingle") )

    include PAD . 'sequence/operations/initsSingle.php';

  else

    return;
    
  $padSeqBuild = padSeqBuild ( $padSeqSeq, $padSeqType );

  include PAD . 'sequence/build/include.php';

  $padSeqOperations [] = [
    'padSeqSeq'   => $padSeqSeq,
    'padSeqParm'  => $padPrmValue,
    'padSeqBuild' => $padSeqBuild,
    'padSeqType'  => $padSeqType
  ];

?>