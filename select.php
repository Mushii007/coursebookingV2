<?php

$db = "lms_course-booking";
$user= "root";
$host = "localhost";
$password = "";


$conn = mysqli_connect($host,$user,$password,$db);
if ($conn){

	//echo "connect";

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP - How to make dependent dropdown list using jquery Ajax?</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!--     <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
 -->
</head>
<body>
<label>Select Courses:</label> <br/>
<select name="course" id="courses" >
<?php
$sql = "SELECT * FROM courses";
$result = $conn->query($sql);
if ($result->num_rows > 0){

	while($row = $result->fetch_assoc()){
		echo '<option value="'.$row['course_id'].'">'.$row['course_name'].'</option>';
	}
}



?>	
</select><br><br>
<div id="bookingdiv" style="display:none">
<label>Bookings:</label><br/>
<select name="booking" id ="booking">

</select>
</div>
<script>
$(document).ready(function(){
	
$('#courses').change(function(){
$("#bookingdiv").show();
var courseid = $(this).val();            	
$.ajax({

	url:"selectajax.php",
	dataType: 'Json',
            data: {'course_id':courseid},
            success: function(data) {
                $('select[name="booking"]').empty();
                $.each(data, function(key, value) {
                    $('select[name="booking"]').append('<option value="'+ key +'">'+ value +'</option>');
                });
            },
            error: function(data) { 
			$('select[name="booking"]').empty();
    		}

});

});	


});	


</script>

</body>
</html>