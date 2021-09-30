<?php
include_once 'database.php';
if(isset($_POST['save']))
{
	 $fname= $_POST['fname'];
	 $lname = $_POST['lname'];
	 $address = $_POST['address'];
	 $number1 = $_POST['number1'];
	 $pedu = $_POST['pedu'];
   $sed = $_POST['sed'];
   $ssed = $_POST['ssed'];
   $degree = $_POST['degree'];
   $ji = $_POST['ji'];
	 $pr = $_POST['pr'];
   $tc = $_POST['tc'];
   $pp = $_POST['pp'];
   $skills = $_POST['skills'];
   $aad = $_POST['aad'];
	 $sql = "INSERT INTO resume (fname,	lname,number1,address,pedu,sed,ssed,degree,ji,pr,tc,pp,skills,aad)
	 VALUES ('$fname',	'$lname','$number1','$address','$pedu','$sed','$ssed','$degree','$ji','$pr','$tc','$pp','$skills','$aad')";
	 if (mysqli_query($conn, $sql)) {
		echo "New product created successfully !";
		header('location: main.html');
    } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
