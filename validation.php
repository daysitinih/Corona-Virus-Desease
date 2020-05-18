<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'corona');

$name=$_POST['nama'];
$email=$_POST['email'];
$password=$_POST['password'];

$select ="select * from tb_corona where  nama='$name',email='$email', password ='$password'";

$result = mysqli_query($con,$select);
$num =mysqli_num_rows($result);

if($num == 1){
   header('location: index.php');
}else{
    header('location:index.php');
}

