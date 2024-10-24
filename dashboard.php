
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Header */
        header {
            background-color: blue;
            padding: 20px;
            text-align: center;
            color: white;
            font-size: 24px;
        }

        /* Sidebar */
        .sidebar {
            height: 100%;
            width: 200px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: black;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
        }

        .sidebar a:hover {
            background-color: #575757;
        }

        /* Main content */
        .main {
            margin-left: 210px; /* Same as the width of the sidebar */
            padding: 20px;
        }

        /* Chart container */
        .chart-container {
            width: 70%;
            margin: auto;
        }

    </style>
</head>
<body>

    <!-- Header -->
    <header>
        Dashboard 
    </header>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#home">Home</a>
        <a href="#sales">Dashboard</a>
        <a href="#users">Users</a>
        <a href="#settings">Settings</a>
    </div>

    <!-- Main content -->
    <div class="main">
        <h2>Dashboard Admin</h2>
        <div class="chart-container">
            <canvas id="myChart"></canvas>
        </div>
    </div>

    <!-- Chart.js Script -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  

</body>
</html>

</body>
</html>
