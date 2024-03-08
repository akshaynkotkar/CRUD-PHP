<?php
session_start();
include('Connection.php');


if (isset($_POST['add-student'])) {
    $rno=$_POST['rno'];
    $prn=$_POST['prn'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
 $checkQuery = "SELECT * FROM student WHERE rno = '$rno' OR prn = '$prn' OR email='$email'";
 $checkResult = mysqli_query($con, $checkQuery);

 if (mysqli_num_rows($checkResult) > 0) {
     echo "<script>alert('Roll No or PRN or Emailalready exists. Please choose a different Roll No or PRN. or Email');</script>";
     echo "<script>document.location.href='Add.php';</script>";
 } else{
    $sql = "INSERT INTO student (rno,prn,name,email,mobile)
    values ('$rno','$prn','$name','$email','$mobile')";


    $query_run = mysqli_query($con, $sql);
    if ($query_run) {
       
        echo "<script>if(confirm('Your Record Sucessfully Inserted. ')){document.location.href='index.php'}else{document.location.href='Add.php'};</script>";

    } else {
        echo "Student Not added ";
    }
 }
    
} 

 

?>



