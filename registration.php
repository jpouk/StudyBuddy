<?php

session_start();

$con = mysqli_connect('localhost','root', '');



mysqli_select_db($con,'user_reg');

$name = $_POST['username'];
$pass = $_POST['password'];



$s = " select * from user_table where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1 ){
    echo "Username Has Already Been Taken";

}else{
    $reg = " insert into user_table(username , password) values ('$name' , '$pass')";
    mysqli_query($con, $reg);
    echo " Account Created Successfully";
    
    echo "<a href='login.php'> Login Here </a>";
}


?>