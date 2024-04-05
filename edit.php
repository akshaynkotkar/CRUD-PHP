
<?php
include('functions.php');
$id = $_GET['updateid']; 
$sql="select * from`student` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$rno=$row['rno'];
$prn=$row['prn'];
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
if (isset($_POST['submit'])) {
 
    $rno=$_POST['rno'];
    $prn=$_POST['prn'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $query = "UPDATE `student` SET id=$id,rno='$rno',prn='$prn',name = '$name', email = '$email' ,mobile='$mobile' where id=$id";
    
    $result = mysqli_query($con, $query);

    if ($result) {
       
       echo "<script>if(confirm('Your Record Updated Successfully. ')){document.location.href='index'}else{document.location.href='index'};</script>";
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: aquamarine;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <h2>Edit</h2>
        <form  method="post">
            <label for="prn">Roll.No:</label>
            <input type="number" id="rno" name="rno" value="<?php echo $rno?>">
            <label for="prn">PRN No:</label>
            <input type="text" id="prn" name="prn" value="<?php echo $prn?>">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $name?>">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $email?>">

            <label for="mobile">Mobile Number:</label>
            <input type="number" id="mobile" name="mobile" value="<?php echo $mobile?>">

            <button name="submit"type="submit">Update</button>
        </form>
    </div>
</body>
</html>