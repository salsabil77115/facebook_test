<?php
if(isset($_SESSION['email'])){
    $email=$_SESSION['email'];
    $result = $dbcon->query("SELECT * FROM `users` WHERE `email`='$email'");
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
?>