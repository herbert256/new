<?php

  if ( file_exists ( APP . "_options/$padPrmName.php") )
    $padOptionsAppStart [$pad] [] = $padPrmName;

  $padPrm [$pad] [$padPrmName] = $padOptionsSingle [$padPrmName];

  if ( ! $padFirstParm [$pad] )
    $padFirstParm [$pad] = ( $padPrm [$pad] [$padPrmName] === TRUE ) ? $padPrmName : $padPrm [$pad] [$padPrmName];

?>