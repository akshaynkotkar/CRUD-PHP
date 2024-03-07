<?php
// include('functions.php'); // Adjust the path based on your directory structure

// if (isset($_POST['delete_btn'])) {
//     $id_to_delete = $_POST['delete_id'];
//     echo $id_to_delete;
//     // Perform the delete operation
//     $query = "DELETE FROM student WHERE id = '$id_to_delete'";
    
//     $result = mysqli_query($con, $query);

//     if ($result) {
//         header("Location:Register.php"); // Redirect to the feedback page after successful deletion
//         exit();
//     } else {
//         echo "Error deleting record: " . mysqli_error($con);
//     }
//}

include('functions.php'); // Adjust the path based on your directory structure

if (isset($_POST['delete_btn'])) {
    $id_to_delete = $_POST['delete_id'];

    // Perform the delete operation using prepared statement
    $query = "DELETE FROM student WHERE id = '$id_to_delete' ";
    
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, 'i', $id_to_delete);
    
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        header("Location: Register.php"); // Redirect to the feedback page after successful deletion
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
}

?>