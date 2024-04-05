<?php
include('functions.php'); 

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $query = "DELETE FROM `student` WHERE id = $id ";
    $result = mysqli_query($con,$query);
    if ($result) {
       
        echo "<script>if(confirm('Your Record Deleted Successfully. ')){document.location.href='index'}else{document.location.href='index'};</script>";
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
}

?>