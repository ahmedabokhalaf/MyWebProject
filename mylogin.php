<?php
    $useremail=$_POST["username"];
    $userpass=$_POST["userpass"];
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"myapp") or die("Cann't Establish Connection.");
    $flag=mysqli_query($con,"select UserEmail, UserPass from userinfo where UserEmail='$useremail' and UserPass='$userpass'");
    $row=mysqli_fetch_array($flag);
    if(($useremail==$row["UserEmail"]) and ($userpass==$row["UserPass"])){
        header("location:main.php");    
    }
    else{
        die("Information error");
    }
?>