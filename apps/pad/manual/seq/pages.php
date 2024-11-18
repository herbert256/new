<?php

  if ( ! isset ( $pages ) ) 
    return;

  $go = file ( APP . "_xref/seq/$pages", FILE_IGNORE_NEW_LINES );

  foreach ( $go as $key => $value )
    if ( ! str_starts_with ( $value, 'seq/' ) )
      unset ( $go [$key] );

  if ( count ( $go ) > 15 )
    $go = array_slice ( $go, 0, 15 );

  $title = "seq - Xref - $type - $item";

?>