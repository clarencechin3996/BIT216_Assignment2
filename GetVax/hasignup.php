<?php
require_once 'db.php';

function checkEmpty($var){
    if (empty($var)){
        return false;
    }
    else {
        return true;
    }
}

if (isset($_POST)){
    extract($_POST);
    if (checkEmpty($healthcarecenters) and checkEmpty($username) and checkEmpty($pass) and checkEmpty($name) and checkEmpty($email) and checkEmpty($staffid))
    {


        $query="INSERT INTO administrator (healthcarecenters, username, pass, fullname, email, staffid) VALUES ('$healthcarecenters', '$username', '$pass', '$name', '$email', '$staffid')";
        $sql=mysqli_query($conn,$query)or die(mysqli_error($conn));

        header("refresh:1; url=login.html");
        echo '<script>alert("Healthcare Administrator Account Created!")</script>';

    }
    else{

      header("refresh:1; url=signup.html");
      echo '<script>alert("Please fill the form!")</script>';


    }


}
?>
