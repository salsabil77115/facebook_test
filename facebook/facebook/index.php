<?php 
require_once('./miniRouter-master/miniRouter.php');

include_once './dbstalker-master/core/stalker_configuration.core.php';
include_once './dbstalker-master/core/stalker_registerar.core.php';
include_once './dbstalker-master/core/stalker_schema.core.php';
include_once './dbstalker-master/core/stalker_validator.core.php';
include_once './dbstalker-master/core/stalker_database.core.php';
include_once './dbstalker-master/core/stalker_information_schema.core.php';
include_once './dbstalker-master/core/stalker_query.core.php';
include_once './dbstalker-master/core/stalker_migrator.core.php';
include_once './dbstalker-master/core/stalker_backup.core.php';
include_once './dbstalker-master/core/stalker_table.core.php';
include_once './dbstalker-master/core/stalker_seed.core.php';
include_once './dbstalker-master/core/stalker_seeder.core.php';
include_once './dbstalker-master/core/stalker_view.core.php';

foreach ( glob("./dbstalker-master/tables/*.table.php") as $file ) {
    require_once $file;
}

Stalker_Registerar::auto_register();
if(Stalker_Migrator::need_migration()){
    Stalker_Migrator::migrate();
}

$dbcon = Stalker_Database::instance();
include_once 'classes/UsersData.php';
$router = new miniRouter();

$router->group("/", function($router){
    
    $router->get('/', function(){
        include 'index_view.php';  
    });
    
$router->group("/api", function($router){
   
        $router->post('/signup',[new UsersData(), 'signup']);
        $router->post('/login',[new UsersData(), 'login']);
        
        
    });
        
});
    
    $router->fallback(function(){
        
        echo "Page Not Found";
    });
        $router->start_routing();
        
  /*  session_start();
    require_once ('Connection.php');
    try{
        $dbcon = Connection::getInstance();
        Connection::setCharsetEncoding();
        
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
 }catch (PDOException $e){
        echo "There is some problem in connection: " . $e->getMessage();
    }
    */

?>