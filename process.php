<?php
    $chitnumber = $_POST['chitnumber'];
    $lastname = $_POST['lastname'];
    $licencenumber = $_POST['licencenumber'];
    $vehiclenumber = $_POST['vehiclenumber'];
    $conn = new mysqli("localhost", "root", "", "chit");
    $chitnumber = stripcslashes($chitnumber);
    $lastname = stripcslashes($lastname);
    $licencenumber = stripcslashes($licencenumber);
    $vehiclenumber = stripcslashes($vehiclenumber);
    $chitnumber = mysqli_real_escape_string($conn,$chitnumber);
    $lastname = mysqli_real_escape_string($conn,$lastname);
    $licencenumber = mysqli_real_escape_string($conn,$licencenumber);
    $vehiclenumber = mysqli_real_escape_string($conn,$vehiclenumber);

    $conn = new mysqli("localhost", "root", "", "chit");
    $result = mysqli_query($conn,"select * from registration where chitnumber='$chitnumber', lastname='$lastname', licencenumber='$licencenumber' and vehiclenumber='vehiclenumber'")
     or die("Failed to query database" .mysqli_error($conn,));
     $row = mysql_fetch_array($result);
     if($row['chitnumber'] == $chitnumber && $lastname['lastname'] == $lastname && $licencenumber['licencenumber'] == $licencenumber && $vehiclenumber['vehiclenumber'] == $vehiclenumber ){
         echo "Login success!!! Welcome ".$row['licencenumber'];
     }
     else{
         echo "Failed to login!";
     }
?>