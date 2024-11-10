<?php
  

  include PAD . "error/error.php";
  
  
  function padErrorGo ( $error, $file, $line ) {
 
    set_error_handler ( 'padErrorThrow' );

    try {

      if ( isset ( $GLOBALS ['padErrorGo'] ) )
        throw new Exception ( "$file:$line $error" );

      $GLOBALS ['padErrorGo']   = TRUE;
      $GLOBALS ['padErrorFile'] = $file;
      $GLOBALS ['padErrorLine'] = $line;

      $error = "$file:$line " . padMakeSafe ( $error );

      if ( function_exists ( 'padInfoTraceError' ) )
        padInfoTraceError ( $error );

      if ( $GLOBALS ['padErrorLog'] ) 
        error_log ( $error, 4 );

      if ( $GLOBALS ['padErrorReport'] )
        padDumpToDir ( $error );

      padDump ( $error );
   
    } catch (Throwable $e) {

      include PAD . 'error/stop.php';

    }
      
    padExit ( TRUE );

  }


?>