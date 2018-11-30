<?php
    $fname=$_POST["firstname"];
    $sname=$_POST["secondname"];
    $email=$_POST["email"];
    $email2=$_POST["email_2"];
    $password=$_POST["pass"];
    $password2=$_POST["pass_2"];
    $gov=$_POST["usergov"];    
    $con=mysqli_connect("localhost","root","") or die("Cann't Establish Connection.");
    mysqli_select_db($con,"myapp");
    if(($email==$email2) and ($password==$password2)){
        $stm1="insert into userinfo (UserFName, UserLName, UserPass, UserEmail, UserCity) values ('$fname','$sname','$password','$email','$gov')";
        $flag=mysqli_query($con,$stm1);
        echo $flag;
        if($flag){
            echo "Thanks for registering in our site.";
        }
        else{
            die("You have an error, Try again to fill the application.");
        }
    }
    else{
        echo "Error";
    }
    mysqli_close($con);
?>