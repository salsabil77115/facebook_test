<?php

if(isset($_SESSION['client_data'])){
   echo $_SESSION['client_data'];
   
  // echo $_SESSION['client_data'][0];
   //echo $_SESSION['client_data'][1];
   //echo $_SESSION['client_data'][2];
   //echo $_SESSION['client_data'][3];
   //echo $_SESSION['client_data'][4];
   
   
       
  }else{
        header("Location: ./login");
  }   
?>