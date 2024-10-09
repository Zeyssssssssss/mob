<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <title>Tracker</title>
   
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #333;
            padding: 15px;
            color: white;
            text-align: center;
        }
        .navbar h1 {
            margin: 0;
        }
        .container {
            margin: 20px;
        }
        .search-container {
            margin-bottom: 20px;
            width: 400px;
        }
        .search-container input {
            padding: 10px;
            width: 80%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #333;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .btn {
            padding: 10px 20px;
            color: white;
            background-color: #333;
            border: none;
            border-radius: 5px;
            cursor: pointer;
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
    <div class="navbar">
        <h1>Equipment Tracker</h1>
    </div>

    <div class="container">
        <div class="search-container">
            <input type="text" id="search" placeholder="Search for equipment..." onkeyup="filterTable()">
        </div>
        
        <table id="trackerTable">
            <thead>
                <tr>
                    <th>Item Name</th>
                    <th>Item ID</th>
                    <th>Status</th>
                    <th>Location</th>
                    <th>Last Checked</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>Excavator</td>
                    <td>Available</td>
                    <td>Warehouse A</td>
                    <td>2024-10-07</td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>Bulldozer</td>
                    <td>In Use</td>
                    <td>Site B</td>
                    <td>2024-10-05</td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>Crane</td>
                    <td>Under Maintenance</td>
                    <td>Workshop</td>
                    <td>2024-09-30</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        function filterTable() {
            const input = document.getElementById("search").value.toUpperCase();
            const table = document.getElementById("trackerTable");
            const tr = table.getElementsByTagName("tr");
            for (let i = 1; i < tr.length; i++) {
                const td = tr[i].getElementsByTagName("td");
                let showRow = false;

                for (let j = 0; j < td.length; j++) {
                    if (td[j] && td[j].innerHTML.toUpperCase().indexOf(input) > -1) {
                        showRow = true;
                    }
                }

                tr[i].style.display = showRow ? "" : "none";
            }
        }
    </script>

</body>
</html>
