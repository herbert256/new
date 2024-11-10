<?php

  include PAD . 'sequence/inits/sequence.php';
  include PAD . 'sequence/inits/options.php';
  include PAD . 'sequence/inits/operations.php';
  include PAD . 'sequence/inits/name.php';
  include PAD . 'sequence/inits/startEnd.php';
  include PAD . 'sequence/inits/build.php';
  include PAD . 'sequence/inits/rows.php';

  if ( file_exists ( PAD . "sequence/types/$padSeqSeq/init.php" ) ) 
    include PAD . "sequence/types/$padSeqSeq/init.php";

?>