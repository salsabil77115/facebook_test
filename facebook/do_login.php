
<?php 

    session_start();

    include_once 'Connection.php';
    try{
        $database = new Connection();
        $dbcon = $database->openConnection();
        

        if(isset($_POST['do_login'])){

            if(empty($_POST['email']))
            {
                echo "pls enter email";
                die();
            }
            
            if(empty($_POST['pass']))
            {
                echo "pls enter password";
                die();
            }

            $id = $_POST['id'];
            $password = $_POST['password'];
            $result = $dbcon->query("SELECT * FROM `users` WHERE `mobile`='$id' or `email`='$id' and `password`='$password'");
            $number_of_rows = $result->fetchColumn();
            
            if ($number_of_rows > 0){
                $_SESSION['client_id'] = $id;
                echo 'ok';
            }else{
                echo 'user doesnt exist';
            }
            exit();
        }
        $database->closeConnection();
    
    }catch (PDOException $e)
    {
        echo "There is some problem in connection: " . $e->getMessage();
    }
 
?>

