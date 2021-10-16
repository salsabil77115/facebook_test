<?php 

    session_start();
    $id=$_SESSION['client_id'];
    include("connect.php");
    mysqli_set_charset($dbcon,"utf8");
            
    $view = " SELECT * FROM `users` WHERE `email`='$id' ";
        
        
    $result=mysqli_query($dbcon, $view);
    $row = mysqli_fetch_row($result);
        
    if(mysqli_num_rows($result)==1){
?>
      	<p><?php echo $row[1] ; ?></p>
        <p><?php echo $row[2] ; ?></p>
        <p><?php echo $row[4] ; ?></p>
        <p><?php echo $row[6] ; ?></p>
        <p><?php echo $row[7] ; ?></p>
          
    <?php     }

?>