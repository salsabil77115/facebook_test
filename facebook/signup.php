<?php 

    session_start();

    include("connect.php");
    mysqli_set_charset( $dbcon,"utf8");

    if(isset($_POST['do_signup'])){

        $firstName=$_POST['First_name'];
        $surname=$_POST['Last_name'];
        $id=$_POST['email'];
        $password=$_POST['password'];
        $day=$_POST['day'];
        $year=$_POST['year'];
        $month=$_POST['month'];
        $gender=$_POST['gender'];

        $date_of_brith=$day."/".$month."/".$year;

         $sql = "INSERT INTO users (first_name, surname,email,password,Date_of_birth,gender)
          VALUES ('$firstName', '$surname', '$id','$password','$date_of_brith','$gender')";
            
            if (mysqli_query($dbcon, $sql)) {

                $_SESSION['client_id']=$id;
                echo "success";
            }
            else{
    	        echo "fail";

            }
            exit();



    }





?>