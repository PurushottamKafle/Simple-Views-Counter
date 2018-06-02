<?php  
   session_start(); // this is important 
/**
We are not setting any session to collect auto views in increment ++
**/
   if (!isset($_SESSION['PKcounter'])) {  
      $_SESSION['PKcounter'] = 90;  
   } else {  
      $_SESSION['PKcounterSW']++;  
   }  
   echo ("Page Views: ".$_SESSION['PKcounterSW']);  
?>  
