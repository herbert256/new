<?php
 
  include APP . 'develop/sequence/clean.php';
  include APP . 'develop/sequence/actions.php';
  include APP . 'develop/sequence/one.php';

  foreach ( padTypes () as $type ) {
    include APP . 'develop/sequence/flags.php';
    include APP . 'develop/sequence/parm.php';
    include APP . 'develop/sequence/generated.php';
    include APP . 'develop/sequence/check.php';
    include APP . 'develop/sequence/basic.php';
    include APP . 'develop/sequence/keepRemove.php';
    include APP . 'develop/sequence/oprSingle.php';
    include APP . 'develop/sequence/oprDouble.php';
    include APP . 'develop/sequence/store.php';
  }  

?>