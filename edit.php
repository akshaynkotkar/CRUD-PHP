<?php
include('functions.php'); // Adjust the path based on your directory structure

// Assuming $con is your database connection

// Check if an edit request is submitted
if (isset($_POST['edit_btn'])) {
    // Get the ID to be edited
    $id_to_edit = $_POST['edit_id'];

    // Fetch the existing data from the database
    $query = "SELECT * FROM student WHERE id = $id_to_edit";
    $result = mysqli_query($con, $query);

    if ($result) {
        // Fetch the data as an associative array
        $row = mysqli_fetch_assoc($result);

        // Assign the values to variables for each field
        $existing_roll = $row['rno'];
        $existing_prn = $row['prn'];
        $existing_name = $row['name'];
        $existing_email = $row['email'];
        $existing_mobile = $row['mobile'];
        // Add more fields as needed
    } else {
        echo "Error fetching record: " . mysqli_error($con);
        // Handle the error accordingly
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
        <h2>Edit Student</h2>
        <form action="code.php" method="post">
            <input type="hidden" name="edit_id" value="<?php echo $id_to_edit; ?>">
            <label for="new_roll">Roll.No:</label>
            <input type="number" name="new_roll" value="<?php echo isset($existing_roll) ? $existing_roll : ''; ?>">
            <label for="new_prn">PRN No:</label>
            <input type="text" name="new_prn" value="<?php echo isset($existing_prn) ? $existing_prn : ''; ?>">
            <label for="new_name">Name:</label>
            <input type="text" name="new_name" value="<?php echo isset($existing_name) ? $existing_name : ''; ?>">
            <label for="new_email">Email:</label>
            <input type="email" name="new_email" value="<?php echo isset($existing_email) ? $existing_email : ''; ?>">
            <label for="new_mobile">Mobile Number:</label>
            <input type="number" name="new_mobile" value="<?php echo isset($existing_mobile) ? $existing_mobile : ''; ?>">
            <button name="edit-student" type="submit">Edit</button>
        </form>
    </div>
</body>
</html>
