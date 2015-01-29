<?php

     $zip = new ZipArchive;
     $res = $zip->open('magento.zip');
     if ($res === TRUE) {
         $zip->extractTo('my_extract/');
         $zip->close();
         echo 'ok';
     } else {
         echo 'failed';
     }
?> 