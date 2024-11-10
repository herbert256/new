<?php
   
  foreach ( glob ( APP . 'sequence/basic/*'                  ) as $file ) unlink($file);
  foreach ( glob ( APP . 'sequence/keepRemove/*'             ) as $file ) unlink($file);
  foreach ( glob ( APP . 'sequence/make/*'             ) as $file ) unlink($file);
  foreach ( glob ( APP . 'sequence/one/*'                 ) as $file ) unlink($file);

  foreach ( glob ( APP . 'sequence/operation/single/*'       ) as $file ) unlink($file);
  foreach ( glob ( APP . 'sequence/operation/double/*'       ) as $file ) unlink($file);

  foreach ( glob ( APP . 'sequence/store/operations/*'       ) as $file ) unlink($file);
 
  foreach ( glob ( PAD . 'sequence/actions/double/*'   ) as $file ) unlink($file);
  foreach ( glob ( PAD . 'sequence/actions/single/*'   ) as $file ) unlink($file);

  foreach ( glob ( PAD . 'sequence/store/actions/*'    ) as $file ) unlink($file);
  foreach ( glob ( PAD . 'sequence/store/operations/*' ) as $file ) unlink($file);

?>