<?php

  if ( ! isset ( $example ) or ! $example )
    $example = 'specials';

  if ( $example == 'seqs')
    $examples = seqDir ( APP . "seq/basic" ) ;
  else
    $examples = seqDir ( APP . "seq/$example" ) ;

  if ( isset ( $item ) and ! in_array ( $item, $examples) )
    $item = $examples [0];

  if ( ! isset ( $item ) or ! $item )
    $item = $examples [0];

  $title .= " - $example - $item"

?>