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
<?php
function getAll($table)
{
    global $con;
    $query_view="select * from $table";
    return $query_view_run=mysqli_query($con,$query_view);
}


?>
