<?php 

    session_start();
    require_once ('Connection.php');
    try{
        $dbcon = Connection::getInstance();
        Connection::setCharsetEncoding();
        

    if(isset($_POST['do_signup'])){
        $firstName=$_POST['First_name'];
        $surname=$_POST['Last_name'];
        $id=$_POST['email'];
        $password=$_POST['password'];
        $day=$_POST['day'];
        $year=$_POST['year'];
        $month=$_POST['month'];
        $gender=$_POST['gender'];
        $number = preg_match('@[0-9]@', $password);
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);
      if(empty($firstName)||empty($surname)||empty($id)||empty($password)||empty($day)||empty($month)||empty($year)||empty($gender)){
             echo 'empty';
             die();
         }       
        if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars)
        {
            echo 'failed password';
            die();
        }       
        if (!filter_var($id, FILTER_VALIDATE_EMAIL))
         {
                echo 'invalid email';
                die();
         }
          
        $date_of_brith=$day."/".$month."/".$year;

        $result = $dbcon->query("INSERT INTO users (first_name, surname,email,password,Date_of_birth,gender)
          VALUES ('$firstName', '$surname', '$id','$password','$date_of_brith','$gender')");
        
        
        if ($result){
            
                $_SESSION['client_id']=$id;
                echo 'ok';
            }
            else{
    	        echo 'fail';

            }
            exit();



    }
    
    }catch (PDOException $e)
    {
        echo "There is some problem in connection: " . $e->getMessage();
    }


?>