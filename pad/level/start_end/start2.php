<?php

  $padBase [$pad] = $padStartBase [$pad];
  $padData [$pad] = $padStartData [$pad];

  $padStartBase [$pad] = '';
  $padStartData [$pad] = [];

  reset ( $padData [$pad] );
  
  $padInfoOccur = 'start2'; 
  include PAD . 'occurrence/start.php';

?>