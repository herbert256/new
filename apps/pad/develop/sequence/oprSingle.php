<?php
 
  if ( $type == 'random' or $type == 'pull' or $build == 'fixed' or $build == 'order' )
    return;

  $main = ( $type == 'even') ? 'odd' : 'even';

  $one = "{table}\n\n"
       . "{demo}{sequence 5, $main}\n  {\$sequence}\n{/sequence}{/demo}\n\n"
       . "{demo}{sequence 5, $main, $type$parm}\n  {\$sequence}\n{/sequence}{/demo}\n\n"
       . "{/table}";

  file_put_contents ( PAD . "sequence/types/$type/flags/operationSingle", 1 );
  file_put_contents ( APP . "sequence/operation/single/{$type}.pad", $one );

?>