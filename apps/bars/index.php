<?php

  // Build 3 lists of ACE bar files.
  // - The compact WIP-1 list shows differences in version number only. 
  // - The WIP-2 list also looks at beta versions to find differences. 
  // - The ALL list contains all bar files.

  $files = glob ( "C:\git\intbuild_ace-mutatie-scripts\build\intace_is-*\overlays\*\patch-integrationserver.yaml" );

  foreach ( $files as $file ) {

    $parts = explode ( 'intace_is-', $file      );
    $parts = explode ( "\\",         $parts [1] );

    $is  = $parts [0];
    $env = $parts [2];
  
    $bars = yaml_parse_file ( $file );
    $bars = explode ( ',' , $bars ['spec'] ['barURL'] );

    foreach ( $bars as $bar ) {

      $bar = str_replace ( '.bar', '', $bar );

      $split = explode ( '/' , $bar);
      $split = explode ( '-' , end ($split) );

      if ( $split [0] == 'abz' ) { // There is always an exception to the naming conventions ...
        array_shift ( $split);
        $split [0] = 'abz-' . $split [0];
      }

      $bar     = strtolower ( array_shift ( $split ) );
      $version = implode ( '-' , $split );

      $dump [$is] [$bar] [$env] = $version;

    }

  }

  // Convert to a list with all bar/env combinations
  // Is handy for building the 3 output lists.

  $envs = [ 'dev', 'tst', 'acc', 'prd' ];

  foreach ( $dump as $is => $bars )
    foreach ( $bars as $bar => $versions )
      foreach ( $envs as $env )
        $all [$is] [$bar] [$env] = $versions [$env] ?? '';

  // The 3 output lists.

  $list ['WIP-1'] = [];
  $list ['WIP-2'] = [];
  $list ['ALL']   = [];

  // Everyting goes into the ALL list.

  foreach ( $all as $is => $bars )
    foreach ( $bars as $bar => $versions )
      $list ['ALL'] ['ace'] [$is] ['bars'] [$bar] = $versions;

  // The WIP-2 list contains every bar that is not the same in OTAP.

  foreach ( $all as $is => $bars )
    foreach ( $bars as $bar => $versions )
      foreach ( $envs as $env )
        if ( $versions ['dev'] <> $versions [$env] )
          $list ['WIP-2'] ['ace'] [$is] ['bars'] [$bar] = $versions;

  // Build the WIP-1 list, step 1, remove -beta-* from the collected versions

  foreach ( $all as $is => $bars )
    foreach ( $bars as $bar => $versions ) 
      foreach ( $envs as $env )
        if ( str_contains ( $versions [$env], '-beta-') )
          $all [$is] [$bar] [$env] = substr ( $versions [$env], 0, strpos ( $versions [$env], '-beta-' ) );
 
 // Build the WIP-1 list, step 2, check if there is a difference in OTAP

  foreach ( $all as $is => $bars )
    foreach ( $bars as $bar => $versions )
      foreach ( $envs as $env )
        if ( $versions ['dev'] <> $versions [$env] )
          $list ['WIP-1'] ['ace'] [$is] ['bars'] [$bar] = $versions ;

?>