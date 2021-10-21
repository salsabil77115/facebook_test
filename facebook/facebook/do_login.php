
<?php 

    session_start();

    require_once ('Connection.php');
    try{

        $dbcon = Connection::getInstance();
        Connection::setCharsetEncoding();

  
    /*if(isset($_POST['do_login'])){

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
        $id=$_POST['email'];
        $password=$_POST['password'];
        $result = $dbcon->query("SELECT * FROM `users` WHERE `mobile`='$id' or `email`='$id' and `password`='$password'");
        $number_of_rows = $result->fetchColumn();
        
        if ($number_of_rows>0){
            $_SESSION['client_id']=$id;
    	    echo 'ok';
    	}
    	else{
    	    echo 'user doesnt exist';
    	}
    	exit();
    
      }  
      */
}catch (PDOException $e){
        echo "There is some problem in connection: " . $e->getMessage();
  }
 
?>

