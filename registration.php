<?php
session_start();
header('location:login.php'); 

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'corona');

$name=$_POST['nama'];
$email=$_POST['email'];
$password=$_POST['password'];

$select ="select * from tb_corona where nama ='$name'";

$result = mysqli_query($con,$select);
$num =mysqli_num_rows($result);

if($num == 1){
    echo"User Already Taken";
}else{
    $reg="insert into tb_corona(nama,email,password) values ('$name','$email','$password')";
    mysqli_query($con,$reg);
    echo"Registration Successful";

}

