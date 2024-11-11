<?php

  $nows ['index'] ['text'] = 'Introduction';
  $nows ['index'] ['now']  = 'index';

  foreach ( glob ( APP . 'manual/sequence/*.pad' ) as $file ) {

    $now = str_replace ( APP . 'manual/sequence/', '', $file );
    $now = str_replace ( '.pad',                  '', $now );

    if ( $now <> '_inits' and $now <> 'index' and $now <> 'pages' ) {
      $nows [$now] ['text'] = ucfirst ( $now );
      $nows [$now] ['now'] = $now;
    }

  }

  if ( ! isset ( $go ) or ! $go )
    $go = 'index';

  $title = 'Sequences - ' . $nows [$go] ['text']

?>