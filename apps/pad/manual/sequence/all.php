<?php
 
  include_once APP . 'develop/_lib/lib.php';

  echo "{table}{demo}{sequence 15}\n  {\$sequence}\n{/sequence}{/demo}";

  foreach ( padTypes () as $type ) {

    include APP . 'develop/sequence/parm.php';

    if     ( $type == 'pull'      ) continue;
    elseif ( $type == 'oeis'      ) $gox = "15, oeis=87";
    elseif ( $type == 'list'      ) $gox = "list='1;8;5;2;9;66'";
    elseif ( $type == 'range'     ) $gox = "range='1..15'";
    elseif ( $type == 'eval'      ) $gox = "15, eval='@ * 10 | @ - 1'";
    elseif ( $type == 'random'    ) $gox = '15, random, min=100, max=199';
    elseif ( $type == 'sylvester' ) $gox = '10, sylvester';
    else                            $gox = "15, $type$parm";

    echo "{demo}{sequence $gox}\n  {\$sequence}\n{/sequence}{/demo}";
  }
  
  echo "{/table}";

?>