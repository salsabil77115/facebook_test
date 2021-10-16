<?php 

    session_start();

    include("connect.php");
    mysqli_set_charset($dbcon,"utf8");

    if(isset($_POST['do_login'])){
        
        $id=$_POST['id'];
        $password=$_POST['password'];
        $login = " SELECT * FROM `users` WHERE mobile='$id' or email='$id' and password ='$password' ";
    	$result=mysqli_query($dbcon, $login);


        if (mysqli_num_rows($result)>0){    	
    	    $_SESSION['client_id']=$id;
    	    echo "success";
    	}
    	else
    	{
    	    echo "fail";
    	}
    	exit();
    }
 




?>