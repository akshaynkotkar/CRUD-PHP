<?php 
       $host="localhost";
       $username= "root";
       $password= "";
       $database = "test";
    //creating databse cannection
   $con=mysqli_connect($host,$username,$password,$database );

   if(!$con)
   {
       die("connection failed:". mysqli_connect_error());
   }
   
?>