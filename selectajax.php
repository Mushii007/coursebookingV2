<?php
$db = "lms_course-booking";
$user= "root";
$host = "localhost";
$password = "";


$conn = mysqli_connect($host,$user,$password,$db);
if ($conn){

	//echo "connect";

}
$sql = "SELECT * FROM bookings
         WHERE course_id = ".$_GET['course_id'] ; 

   $result = $conn->query($sql);

   $json = [];
   while($row = $result->fetch_assoc()){
        $json[$row['booking_id']] = $row['customer_name'];
   }

   echo json_encode($json);


?>