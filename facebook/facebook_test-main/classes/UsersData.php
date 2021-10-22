<?php
class UsersData {
    public  $dbcon;
    public function __construct($con) {
        $this->dbcon=$con;
    }
    
   function login(){
      if(isset($_POST['do_login'])){
          
        if(empty($_POST['email']))
        {
            echo "pls enter email";
            die();
        }
        
        if(empty($_POST['password']))
        {
            echo "pls enter password";
            die();
        }
        $email = $_POST['email'];
        $password = $_POST['password'];
        $result = $this->dbcon->execute("SELECT * FROM `users` WHERE `email`='$email' and `password`='$password'", array());
        $number_of_rows = $result->fetchAll();
       
        if ($number_of_rows > 0){
          //  $row = $result->fetch();
         //    $array=[$row['first_name'],$row['surname'],$row['Date_of_birth'],$row['gender'],$email];
         //   $_SESSION['client_data']=$array;
          $_SESSION['client_data'] = $email;
         
          echo 'ok';
      }
      else{
          echo 'user doesnt exist';
      }
      exit();
    } 
  }
  
  function signup(){
      
      if(isset($_POST['do_signup'])){
          $firstName=$_POST['First_name'];
          $surname=$_POST['Last_name'];
          $email=$_POST['email'];
          $password=$_POST['password'];
          $day=$_POST['day'];
          $year=$_POST['year'];
          $month=$_POST['month'];
          $gender=$_POST['gender'];
          $number = preg_match('@[0-9]@', $password);
          $uppercase = preg_match('@[A-Z]@', $password);
          $lowercase = preg_match('@[a-z]@', $password);
          $specialChars = preg_match('@[^\w]@', $password);
          if(empty($firstName)||empty($surname)||empty($email)||empty($password)||empty($day)||empty($month)||empty($year)||empty($gender)){
              echo 'please fill all fields';
              die();
          }
          if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars)
          {
              echo 'Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.';
              die();
          }
          if (!filter_var($email, FILTER_VALIDATE_EMAIL))
          {
              echo 'Invalid email format';
              die();
          }
          
          $date_of_brith=$day."/".$month."/".$year;
          $result = $this->dbcon->execute("INSERT INTO users (first_name, surname,email,password,Date_of_birth,gender)
          VALUES ('$firstName', '$surname', '$email','$password','$date_of_brith','$gender')", array());
          
          
          if ($result){
              
              $_SESSION['client_data'] = $email;
              echo 'ok';
          }
          else{
              echo 'fail';
              
          }
          exit();
          
          
          
      }
      
  }

}
?>