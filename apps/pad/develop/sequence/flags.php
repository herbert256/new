<?php

  deleteDir ( PAD . "sequence/types/$type/flags/" ); 
  mkdir     ( PAD . "sequence/types/$type/flags/" );

  file_put_contents ( PAD . "sequence/types/$type/flags/readme.txt", 'This directory is generared' );

?>