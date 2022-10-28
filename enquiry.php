<?php
$servername='localhost';
$username='root';
$password='';
$dbname='records';
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("ERROR: Could not connect");
}
    $email = $_REQUEST['email'];
    $sql = "SELECT * FROM user WHERE Email = '$email'";
    $result = ($conn->query($sql));
    $row = [];
    if($result->num_rows > 0){
    $row = $result->fetch_all(MYSQLI_ASSOC);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <title>Enquiries</title>
</head>
<body>
    <!--Nav starts-->
    <header>
        <div class="logo">
            <h1 class="lit">Yo</h1><h1>CREAM</h1>
        </div>
            <nav class="navbar">
                <a href="index.php">Home</a>
                <a href="services.php">Services</a>
                <a href="gallery.php">Gallery</a>
                <a href="enquiry.php" class="active">Enquiries</a>
            </nav>
    </header>
    <!--Nav ends-->
    <main>
        <!--Intro starts-->
        <div class="intro">
            <img src="img/header.jpg" alt="pic">
            <div id="intro-contact">
                <h2>CONTACT US</h2>
            </div>
        </div>
        <!--Intro ends-->
        <!--Contact starts-->
        <div id="log-cont">
            <div id="logbox">
            <h2>Send us your Enquiry</h2>
            <form  name="enquiryform" action="insert.php" method="host" onsubmit="return validateForm();">
                <input type="text" placeholder="your name" id="myname" name="name">
                <input type="text" placeholder="your number" name="number">
                <input type="text" placeholder="your email" name="emailaddress">
                <textarea placeholder="your enquiry" cols="30" rows="10" name="enquiry"></textarea>
                <input type="submit" value="send message" class="subbutton">
            </form>
            </div>
            <div id="alogbox">
            <center>
            <h2>List Of Your Responses</h2>
            </center>
            <form name="respoform" onsubmit="return showResponse()">
                <input type="text" placeholder="Enter email to access your response" name="email">
                <input type="submit" value="View Response" class="subbutton">
            </form>
            <div class="respo">
            <table border="1" width="100%">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Enquiry</th>
                        <th>Response</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(!empty($row))
                    foreach($row as $rows)
                   { 
                    ?>
                    <tr>
                        <td><?php echo $rows['Email']; ?></td>
                        <td><?php echo $rows['Enquiry']; ?></td>
                        <td><?php echo $rows['Response']; ?></td>
                    </tr>
                   <?php } ?>
                </tbody>
            </table>
            </div>
            
            </div>
        </div>
        <!--Contact ends-->
        <!--Footer starts-->
        <footer>
            <address>
                <center>
                    <br>&copy;YoCREAM <br>
                    <br>infor@yocream.co.zw <br>
                </center>
            </address>
        </footer>
        <!--Footer ends-->
    </main>
</body>
</html>

<?php   
    mysqli_close($conn);
?>