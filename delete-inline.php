<?php

echo $stu_id = $_GET['id'];

$conn= mysqli_connect("localhost","root","","crud") or die("connection fild");
$sql="DELETE FROM student WHERE sid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die ("unsussefull query.");

header("location: http://localhost/crud_html/index.php");
mysqli_close($conn)
?>