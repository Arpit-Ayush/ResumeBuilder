<?php
  $conn = mysqli_connect('localhost:3307','root','root','resume');
          if($conn == false)
          {
              die("ERROR : Could not connect". mysqli_connect_error());
          }
          $name1 = $_REQUEST['name'];
          $email1 = $_REQUEST['mail'];
          $msg1 = $_REQUEST['message'];
          $query = "INSERT INTO queryinfo VALUES ('$name1','$email1','$msg1')";
          if(mysqli_query($conn,$query))
          {
             header("location:thankmsg.html");
  
          }
          else{
              header("location:noconnect.html");
          }
  ?>
