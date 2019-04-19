<?php
   mb_internal_encoding('UTF-8');
   mb_http_output('UTF-8');
   mb_http_input('UTF-8');
   mb_regex_encoding('UTF-8');
   $dsn = 'mysql:host=localhost;dbname=ATEC_Inventory';
   $username = 'mya';
   $password = 'dr0W$5@p4sSw0RD';
  
   try {
       $db = new PDO($dsn, $username, $password);
   } catch (PDOException $e) {
       $error_message = $e->getMessage();
       echo 'Error Message ' . $error_message;
       exit();
   }
?>