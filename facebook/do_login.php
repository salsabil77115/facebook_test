
<?php 

    session_start();

    include_once 'Connection.php';
    try{
    $database = new Connection();
    $dbcon = $database->openConnection();
    

    if(isset($_POST['do_login'])){
        
        
        $id=$_POST['id'];
        $password=$_POST['password'];
        $result = $dbcon->query("SELECT * FROM `users` WHERE `mobile`='$id' or `email`='$id' and `password`='$password'");
      
        if ($result){
            $_SESSION['client_id']=$id;
    	    echo "success";
    	}
    	else
    	{
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

