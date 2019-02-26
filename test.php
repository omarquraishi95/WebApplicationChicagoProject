<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('chicagotours.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }

   $sql =<<<EOF
      CREATE TABLE CONTACTINFORMATION
      (ID  INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
      FULLNAME           TEXT    NOT NULL,
      EMAIL           TEXT    NOT NULL,
      PHONE           TEXT    NOT NULL);


EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Table created successfully\n";
   }
   $db->close();
?>
