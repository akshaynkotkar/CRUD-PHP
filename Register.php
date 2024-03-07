<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System </title>
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
            width: 80%;
            overflow-x: auto;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color:cadetblue;
            color: white;
        }
        
        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 20px;
        }

        button:hover {
            background-color: #45a049;
        }
       
.delete-btn {
    background-color: #FF0000; /* Set your desired color code for the background */
    color: white; /* Set text color */
    border: none; /* Remove border if needed */
    padding: 10px 20px; /* Adjust padding as needed */
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 4px; /* Optional: Add border radius for rounded corners */

    /* Hover styles */
    transition: background-color 0.3s ease; /* Add smooth transition */
}

.delete-btn:hover {
    background-color: #FF0000; /* Set the same color code as normal state */
}
.edit-btn {
    background-color: #4CAF50; /* Set your desired color code */
    color: white; /* Set text color */
    border: none; /* Remove border if needed */
    padding: 10px 20px; /* Adjust padding as needed */
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 4px; /* Optional: Add border radius for rounded corners */
}
    </style>
</head>

<body>
    <div class="container">
        <h2>Students</h2>
        <button id="addButton">Add Student</button>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Roll. No.</th>
                    <th>PRN No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('functions.php');
                $students = getAll("student");
                if (mysqli_num_rows($students) > 0) {
                    foreach ($students as $item) {
                ?>
                        <tr>
                            <td scope="col-md-5"><?= $item['id']; ?></td>
                            <td scope="col-md-5"><?= $item['rno']; ?></td>
                            <td scope="col-md-5"><?= $item['prn']; ?></td>
                            <td scope="col-md-5"><?= $item['name']; ?></td>
                            <td scope="col-md-5"><?= $item['email']; ?></td>
                            <td scope="col-md-5"><?= $item['mobile']; ?></td>
                            <td scope="col-md-5">
                            <form action="edit.php" method="post" >
                                            <input type="hidden" name="edit_id" value="<?= $item['id']; ?>">
                                            <button type="submit" class="edit-btn">Edit</button>
                                        </form>
                                        </td>
                            <td scope="col-md-5">
                            <form action="delete.php" method="post" onsubmit="return confirm('Are you sure you want to delete this record?');">
                                            <input type="hidden" name="delete_id" value="<?= $item['id']; ?>">
                                            <button type="submit" class="delete-btn">Delete</button>
                                        </form>
                                        </td>

                        </tr>

                <?php

                    }
                } else {
                    echo "record not found";
                }



                ?>
            </tbody>
        </table>
    </div>

    <script>
        // You can add JavaScript functionality for the "Add" button here
        document.getElementById('addButton').addEventListener('click', function() {
            // Implement your logic for adding a new user
            window.location.href = 'Add.php';
        });
    </script>
</body>

</html>