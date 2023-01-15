<?php
$conn = mysqli_connect('localhost:3306','root',"",'resume');

if(!$conn)
{
    die(' Please Check Your Connection'.mysqli_error($conn));
}
else{
    echo 'connected to database';
}
?>