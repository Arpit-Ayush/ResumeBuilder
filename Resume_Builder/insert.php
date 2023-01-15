<?php
$conn = mysqli_connect('localhost:3306','root',"",'resume');
        if($conn == false)
        {
            die("ERROR : Could not connect". mysqli_connect_error());
        }
        $uname = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $passcode = $_REQUEST['pass'];
        $passcode1 = $_REQUEST['pass1'];
        
        if($passcode == $passcode1)
        {
        $query = "INSERT INTO signin VALUES ('$email','$uname','$passcode','$passcode1')";
        if(mysqli_query($conn,$query))
        {
            header("location:mesg.html");
        }
        else{
            header("location:index.html");
        }
    }
?>