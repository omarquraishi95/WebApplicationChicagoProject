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
   }

?>

<?php
include('contact.html')

 ?>


<?php


 $fullname = $_POST['fullName'];
 $email = $_POST['email'];
 $phone = $_POST['phoneNumber'];

  $sql =<<<EOF
     INSERT INTO CONTACTINFORMATION (FULLNAME,EMAIL,PHONE) VALUES ('$fullname','$email','$phone');


EOF;

  $ret = $db->exec($sql);
  if(!$ret){
   echo $db->lastErrorMsg();
  } else {
  }
  $db->close();
?>
