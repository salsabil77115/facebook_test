<?php 

    session_start();
    include_once 'Connection.php';
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
         if(empty($firstName)||empty($surname)||empty($id)||empty($password)||empty($day)||empty($month)||empty($year)||empty($gender))
         {
             echo 2;
             die();
         }       
        if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars)
        {
            echo 4;
            die();
        }       
         if (!filter_var($email, FILTER_VALIDATE_EMAIL))
         {
                echo 3;
                die();
         }
          
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