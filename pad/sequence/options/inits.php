<?php

  foreach ( $padOptionsMulti as $padStartOption ) {

    extract ( $padStartOption );

    if ( ! file_exists ( PAD . "sequence/actions/types/$padPrmName.php" ) 
     and ! file_exists ( PAD . "sequence/types/$padPrmName" ) 
     and   file_exists ( PAD . "sequence/options/types/$padPrmName.php" ) 
     and ! isset       ( $padSeqStore [$padPrmName] ) )

       $padSeqInfo ['options'] [] = $padPrmName;

    if ( isset ( $padSeqNoNo [$padPrmName] ) ) {
      unset ( $padSeqNoNo [$padPrmName] );
      continue;
    }

    $padSeqOptions [] = [ 
      'padPrmName'  => $padPrmName,
      'padPrmValue' => $padPrmValue
    ];

  } 

?>