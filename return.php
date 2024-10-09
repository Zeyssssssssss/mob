<?php
include 'db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <title>Return Record</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }
        h1 {
            text-align: center;
            font-size: 40px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .submit-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #5cb85c;
            color: white;
            text-align: center;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>

<title>Sidebar Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        }

        /* Sidebar style */
        .sidebar {
            height: 100vh;
            width: 250px;
            background-color: #333;
            padding-top: 20px;
            position: fixed;
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
        }

        .sidebar a:hover {
            background-color: #575757;
        }

        /* Main content */
        .main-content {
            margin-left: 260px; /* Same as sidebar width + padding */
            padding: 20px;
            flex-grow: 1;
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <a href="#dashboard"><i class="fa-solid fa-tachometer-alt"></i> Dashboard</a>
    <a href="inventory.php"><i class="fa-solid fa-warehouse"></i> Inventory</a>
    <a href="nrecord.php"><i class="fa-solid fa-file-alt"></i> New Record</a>
    <a href="stocks.php"><i class="fa-solid fa-boxes"></i> Stocks</a>    
    <a href="tracker.php"><i class="fa-solid fa-map-marker-alt"></i> Tracker</a>
    <a href="return.php"><i class="fa-solid fa-undo-alt"></i> Return Record</a>
    <a href="settings.php"><i class="fa-solid fa-cog"></i> Settings</a>
</div>

<!-- Main content -->
<div class="main-content">
    <div class="container">
        <form action="#" method="POST">
        <h1>Return Record</h1>

        <form id="returnForm">
            <table>
                <thead>
                    <tr>
                        <th>Item ID</th>
                        <th>Employee ID</th>
                        <th>Item Name</th>
                        <th>Date of Return</th>
                        <th>Condition</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" id="item_id" name="item_id" placeholder="Enter Item ID"></td>
                        <td><input type="text" id="employee_id" name="employee_id" placeholder="Enter Employee ID"></td>
                        <td><input type="text" id="item_name" name="item_name" placeholder="Enter Item Name"></td>
                        <td><input type="text" id="return_date" name="return_date" placeholder="YYYY-MM-DD"></td>
                        <td>
                            <select id="condition" name="condition">
                                <option value="Good">Good</option>
                                <option value="Damaged">Damaged</option>
                                <option value="Requires Repair">Requires Repair</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
            <button type="submit" class="submit-btn">Submit Return</button>
        </form>
        <p id="message"></p> <!-- Feedback message -->
    </div>
</div>

<!-- JavaScript validation and form submission -->
<script>
    document.getElementById('returnForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevents default form submission

        // Get form values
        const itemId = document.getElementById('item_id').value;
        const employeeId = document.getElementById('employee_id').value;
        const itemName = document.getElementById('item_name').value;
        const returnDate = document.getElementById('return_date').value;
        const condition = document.getElementById('condition').value;

        // Simple validation
        if (itemId === '' || employeeId === '' || itemName === '' || returnDate === '' || condition === '') {
            document.getElementById('message').innerHTML = "<span style='color: red;'>Please fill in all fields.</span>";
        } else {
            // Simulate form submission (AJAX or backend processing can go here)
            document.getElementById('message').innerHTML = "<span style='color: green;'>Return record submitted successfully!</span>";

            // Clear the form fields
            document.getElementById('returnForm').reset();
        }
    });
</script>
</form>
</body>
</html>
