<!DOCTYPE html>
<html lang="en">
<head>
<script>
        function validateMobile() {
            var mobileInput = document.getElementById('mobile');
            var mobileValue = mobileInput.value.trim();

            // Check if the mobile number contains exactly 10 digits
            if (/^\d{10}$/.test(mobileValue)) {
                return true; // Mobile number is valid
            } else {
                alert('Please enter a valid 10-digit mobile number.');
                return false; // Mobile number is not valid
            }
        }
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
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
        <h2>Add Student</h2>
        <form action="code.php" method="post">
            <label for="prn">Roll.No:</label>
            <input type="number" id="rno" name="rno" required>
            <label for="prn">PRN No:</label>
            <input type="text" id="prn" name="prn" required>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="mobile">Mobile Number:</label>
            <input type="number" id="mobile"pattern="[0-9]{10}"  name="mobile" required>

            <button name="add-student"type="submit" onclick="return validateMobile()">Add Student</button>
        </form>
    </div>
</body>
</html>