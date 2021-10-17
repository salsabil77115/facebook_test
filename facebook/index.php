<?php 

    session_start();
    include_once 'connection.php';
    try{
        $database = new Connection();
        $dbcon = $database->openConnection();
        
    if(isset($_SESSION['client_id'])){
    $id=$_SESSION['client_id'];
    $result = $dbcon->query("SELECT * FROM `users` WHERE `email`='$id'");
    if ($result){
        while ($row = $result->fetch()) {?>
            <p><?php echo $row["first_name"] ; ?></p>
        <p><?php echo $row["surname"] ; ?></p>
        <p><?php echo $row["email"] ; ?></p>
        <p><?php echo $row["Date_of_birth"] ; ?></p>
        <p><?php echo $row["gender"] ; ?></p>
       <?php  }
    }
       
    }else{
        header("Location: login.php?log=0");
        
    }
   $database->closeConnection();
    
    }catch (PDOException $e)
    {
        echo "There is some problem in connection: " . $e->getMessage();
    }
?>