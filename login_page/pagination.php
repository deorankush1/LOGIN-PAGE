<?php
include 'config.php';
$rpp =2;
$query = "SELECT * from Registration";
$result1 = mysqli_query($conn1, $query);
$nor =mysqli_num_rows($result1);
$nop = ceil($nor/$rpp); 
if(!isset($_GET['page']))
{
	$page =1;
}
else 
{
 $page = $_GET['page'];
}

$offset = ($page - 1)*$rpp;

//echo $offset. '<br>';
//echo $rpp;
$sql= "SELECT * from Registration Limit $offset , $rpp";
$result = mysqli_query($conn1,$sql);
 if ($result->num_rows > 0)
   {
while($row = mysqli_fetch_array($result))
{
	//echo 'under loop';
	$s_id = $row['id'];
     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]."<a href = 'student_record.php?student_id={$s_id}'>View</a>". "<br>";
}
}
for($page =1; $page<=$nop; $page++)
{
	echo '<a href = "pagination.php?page=' . $page. '">'. $page . '</a>';
}