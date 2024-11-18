<?php

  if ( ! isset ( $padHome ) ) 
    include 'start/home.php';

  $padApp = $_SERVER['REQUEST_URI'] ?? 'pad';

  $padApp = str_replace ( '.php', '', $padApp );

  if ( str_contains ( $padApp, '?' ) )
    $padApp = substr ($padApp, 0, strpos($padApp, '?') );

  $padFind = explode ( '/', $padApp );

  foreach ( $padFind as $padCheck )
    if ( $padCheck and file_exists ("$padHome/apps/$padCheck/") ) {
      $padApp = "$padHome/apps/$padCheck/";
      return;
    }

  if ( file_exists ( "$padHome/apps/pad/" ) ) {
    $padApp = "$padHome/apps/pad/";
    return;
  }

  die ( 'PAD application not found' );

?>