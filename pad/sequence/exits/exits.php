<?php

  if ( file_exists ( PAD . "sequence/types/$padSeqSeq/exit.php" ) )   
    include PAD . "sequence/types/$padSeqSeq/exit.php";    

  include PAD . 'sequence/exits/after.php';
  include PAD . 'sequence/exits/store.php';
  include PAD . 'sequence/exits/data.php';
  include PAD . 'sequence/exits/return.php';
  include PAD . 'sequence/exits/done.php';
   
  if ( $GLOBALS ['padInfo'] )
    include PAD . 'events/sequence.php';

?>