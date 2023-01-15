<?php
require_once('connection1.php');
session_start();
if(isset($_POST['login_details']))
{
    if(empty($_POST['username']) || empty($_POST['password']))
    {
        echo "<b> fill the form correctly </b>";
    }
    else{
        $query = "select * from signin where username='".$_POST['username']."' and password='".$_POST['password']."'";
        $result = mysqli_query($conn,$query);
        if(mysqli_fetch_assoc($result))
        {
            $_SESSION['username'] = $_POST['username'];
            header("location:home.html");
        }
        else{
            header("location:index.html ?invalid = please enter the correct username and password");
        }
    }
}
else{
    echo 'The sql is not working';
}
?>