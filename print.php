<?php
include 'database.php';
$sql = "SELECT * FROM userorders";
$result = $conn->query($sql);
?>
<!doctype html>
<html>
  <style>
.button {
  background-color: #666699;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 6px 3px;
  cursor: pointer;
}
.button:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
  #cus {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 80%;
      text-align: center;
  }

  #cus td, #cus th {
    border: 1px solid #ddd;
    padding: 20px;
  text-align: center;
  }

  #cus tr:nth-child(even){background-color: #f2f2f2;}

  #cus tr:hover {background-color: #ddd;}

  #cus th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #666699;
    color: white;
  }
</style>
<body>
<h1 align="center">Order Details</h1>
<table id="cus" border="1" align="center" style="line-height:25px;">
<tr>
<th>Primary Education</th>
<th>Secondary Education</th>
<th>Senior Secondary Education</th>
<th>Degree</th>
<th>Code</th>
<th>Date</th>
</tr>
<?php
//Fetch Data form database
if($result->num_rows > 0){
 while($row = $result->fetch_assoc()){
 ?>
 <?php echo "<h3>My Resume</h3>";?>
  <?php echo "Name:" $row['fname'] $row['lname']; ?>
 <?php echo "Address:" $row['address']; ?>
 <?php echo "Phone Number"  $row['number']; ?>
 <br>
   <?php echo "Education"; ?>
<tr>
 <td><?php echo $row['pedu']; ?></td>
 <td><?php echo $row['sed']; ?></td>
  <td><?php echo $row['ssed']; ?></td>
   <td><?php echo $row['degree']; ?></td>
 </tr>
 <?php echo "Pervious Jobs and Internships:" $row['ji']; ?>
 <?php echo "Position of responsibility:" $row['pr']; ?>
 <?php echo "Training/Courses:" $row['tc']; ?>
 <?php echo "Personal Projects:" $row['pp']; ?>
 <?php echo "Skills:" $row['skills']; ?>
 <?php echo "Accomplishment and other details:" $row['aad']; ?>

 <?php
 }
}
else
{
 ?>
 <tr>
 <th colspan="2">There's No data found!!!</th>
 </tr>
 <?php
}
?>

<p ><a href="pdf.php">Click here to download in PDF</a></p>
</table>
</body>
</html>
