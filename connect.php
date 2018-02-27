<?php 
 
 // if (@_SERVE['HTTP_HOST]'=='localhost') { 
  // $DB_SERVE = 'localhost'; 
  // $DB_USER_READER = 'u13580584'; 
  // $DB_PASS_READER = '4bQxYbQkBu'; 
  // $DB_NAME = 'db13580584'; 
  // echo "localhost"; 
 // } else { 
  ////// บนserve ที่เป็น imsu.co 
  $DB_SERVE = 'localhost'; 
  $DB_USER_READER = 'u13580584'; 
  $DB_PASS_READER = '4bQxYbQkBu'; 
  $DB_NAME = 'db13580584'; 
 
 // } //คำสั่งที่ใช้ต่อกับฐานข้อมูล 
 $conn = new mysqli($DB_SERVE,$DB_USER_READER,$DB_PASS_READER,$DB_NAME); 
 
 //ตรวจสอบว่าต่อสำเร็จไหม 
 
 if ($conn -> connect_error) { 
  die("connect failed".$conn -> connect_error); 
 
 } 
 mysqli_set_charset($conn,"utf8"); 
 
?>