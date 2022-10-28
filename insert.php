<?php
$servername='localhost';
$username='root';
$password='';
$dbname='records';
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("ERROR: Could not connect");
}

    $uname = $_REQUEST['name'];
    $num = $_REQUEST['number'];
    $email = $_REQUEST['emailaddress'];
    $enquiry = $_REQUEST['enquiry'];
    $sql = "INSERT INTO user VALUES('$uname','$num','$email','$enquiry','')";

    if(mysqli_query($conn, $sql)){
        echo"<h2>Inserted record successfully</h2>";
    }
    else{
        echo"ERROR: Sorry you entered a duplicate enquiry, wait until you are responded to.";
    }
    mysqli_close($conn);

?>