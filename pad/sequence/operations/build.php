<?php
 
  $padSeqSeqSave   = $padSeqSeq;
  $padSeqBuildSave = $padSeqBuild;
  $padSeqParmSave  = $padSeqParm;
  $padSeqLoopSave  = $padSeqLoop;

  $padSeq = include PAD . 'sequence/operations/go.php';

  $padSeqSeq   = $padSeqSeqSave;
  $padSeqBuild = $padSeqBuildSave;
  $padSeqLoop  = $padSeqLoopSave;
  $padSeqParm  = $padSeqParmSave;

  return $padSeq;

?>