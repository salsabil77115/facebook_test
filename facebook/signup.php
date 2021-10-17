<?php 

    session_start();
    include_once 'connection.php';
    try{
        $database = new Connection();
        $dbcon = $database->openConnection();
        

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

        $result = $dbcon->query("INSERT INTO users (first_name, surname,email,password,Date_of_birth,gender)
          VALUES ('$firstName', '$surname', '$id','$password','$date_of_brith','$gender')");
        
        
        if ($result){
            
                $_SESSION['client_id']=$id;
                echo "success";
            }
            else{
    	        echo "fail";

            }
            exit();



    }
    $database->closeConnection();
    
    }catch (PDOException $e)
    {
        echo "There is some problem in connection: " . $e->getMessage();
    }


?>