<?php

  $padContentGo = padTagParm('content');
  
  if ( isset ( $padContentStore [$padContentGo] ) )

     $padContentData = $padContentStore [$padContentGo];

   else { 

    $padIncPage = padInclFileName ( $padContentGo );

    if ( $padIncPage ) {

      $padIncPage     = str_replace (APP, '',  $padIncPage);
      $padContentData = include PAD . 'tags/go/include.php';

    } else 

      $padContentData = padMakeContent ( $padContentGo );

  }

  return $padContentData;

?>