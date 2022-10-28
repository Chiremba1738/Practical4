<?php
$servername='localhost';
$username='root';
$password='';
$dbname='records';
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("ERROR: Could not connect");
}
$enquiry = $_REQUEST['enquiry'];
$email = $_REQUEST['emailaddress'];
$sql = "UPDATE user SET Response = '$enquiry' WHERE Email = '$email'";

if(mysqli_query($conn, $sql)){
    echo"<h2>Responded to query successfully</h2>";
}
else{
    echo"ERROR: Sorry :".$sql."".mysqli_error($conn);
}
mysqli_close($conn);
?>