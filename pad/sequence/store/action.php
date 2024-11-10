<?php

  $padSeqActionName = $padSeqStoreAction;
  $padSeqActionList = $padSeqStoreNames;

  if ( $padSeqActionName == 'splice' )
    include PAD . 'sequence/store/splice.php';

  $padSeqStore [$padSeqStoreName] = include PAD . "sequence/actions/types/$padSeqActionName.php";

  $padSeqNames [] = $padSeqStoreName;

  $padSeqDone [] = 'store'. ucfirst ( $padSeqActionName );

  $padSeqInfo ['store/actions'] [] = $padSeqActionName;

?>