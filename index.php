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
    background-color: #FF0000; 
    color: white;
    border: none; 
    padding: 10px 20px; 
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 4px; 

    transition: background-color 0.3s ease; 
}

.delete-btn:hover {
    background-color: #FF0000;
}
.edit-btn {
    background-color: #4CAF50; 
    color: white; 
    border: none;
    padding: 10px 20px; 
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 4px; 
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
                    <th>Sr No.</th>
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
                    $start=1;
                    foreach ($students as $item) {
                ?>
                        <tr>
                            <td scope="col-md-5"><?= $start++ ?></td>
                            <td scope="col-md-5"><?= $item['rno']; ?></td>
                            <td scope="col-md-5"><?= $item['prn']; ?></td>
                            <td scope="col-md-5"><?= $item['name']; ?></td>
                            <td scope="col-md-5"><?= $item['email']; ?></td>
                            <td scope="col-md-5"><?= $item['mobile']; ?></td>
                            <td scope="col-md-5">
                            <a  style="color: white;"href="edit?updateid=<?= $item['id']; ?>" onclick="return confirm('Are you sure you want to Edit this record?');" >     <button class="edit-btn" >Edit</button></a>
                            </td>
                            <td scope="col-md-5">
                            <a style="color: white;"href="delete?deleteid=<?= $item['id']; ?>" onclick="return confirm('Are you sure you want to delete this record?');" > <button class="delete-btn" >Delete</button></a>
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
        
        document.getElementById('addButton').addEventListener('click', function() {
            window.location.href = 'Add';
        });
    </script>
</body>

</html>