<?php
session_start();
include('Connection.php');


if (isset($_POST['add-student'])) {
    $rno=$_POST['rno'];
    $prn=$_POST['prn'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $sql = "INSERT INTO student (rno,prn,name,email,mobile)
    values ('$rno','$prn','$name','$email','$mobile')";


    $query_run = mysqli_query($con, $sql);
    if ($query_run) {
       
        echo "<script>if(confirm('Your Record Sucessfully Inserted. ')){document.location.href='Register.php'}else{document.location.href='Add.php'};</script>";

    } else {
        echo "Student Not added ";
    }
} 

 // Adjust the path based on your directory structure

// if (isset($_POST['edit_student'])) {
//     $id_to_edit = $_POST['edit_id'];
//     $new_roll = $_POST['new_roll']; 
//     $new_prn = $_POST['new_prn']; 
//     $new_name = $_POST['new_name']; // Assuming you have a form field for the new name
//     $new_email = $_POST['new_email']; 
//     $new_mobile = $_POST['new_mobile'];// Assuming you have a form field for the new email
//     // Add more fields as needed

//     // Perform the update operation without prepared statement and binding
//     $query = "UPDATE student SET rno='$new_roll',prn='$new_prn',name = '$new_name', email = '$new_email' ,mobile='$new_mobile'WHERE id = $id_to_edit";
    
//     $result = mysqli_query($con, $query);

//     if ($result) {
//         header("Location: Register.php"); // Redirect to the feedback page after a successful update
//         exit();
//     } else {
//         echo "Error updating record: " . mysqli_error($con);
//     }
// }

?>



