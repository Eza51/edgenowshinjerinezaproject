<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .navbar {
            background-color: #333;
            color: white;
            padding: 15px;
            text-align: center;
        }
        .navbar h1 {
            margin: 0;
        }
        .container {
            display: flex;
            justify-content: space-between;
            margin: 20px;
        }
        .sidebar {
            width: 20%;
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }
        .sidebar h2 {
            margin-top: 0;
        }
        .sidebar a {
            display: block;
            padding: 10px;
            color: white;
            text-decoration: none;
            margin-bottom: 10px;
            border-radius: 4px;
            background-color: #34495e;
            transition: background-color 0.3s;
        }
        .sidebar a:hover {
            background-color: #1abc9c;
        }
        .main-content {
            width: 75%;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }
        .main-content h2 {
            color: #333;
        }
        .button {
            background-color: #e74c3c;
            color: white;
            padding: 10px 20px;
            border: none;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
        }
        .button:hover {
            background-color: #c0392b;
        }
        footer {
            text-align: center;
            margin-top: 30px;
            padding: 10px;
            background-color: #333;
            color: white;
        }
        footer .highlight {
            font-weight: bold;
            color: #1abc9c;
        }

        /* Dropdown Menu Styling for Top Right Corner */
        .dropdown {
            position: fixed; /* Fix the position on the page{{-- code by Nowshin Jerin Eza --}} */
            right: 20px; /* Position it on the right side {{-- code by Nowshin Jerin Eza --}}*/
            top: 20px;   /* Position it near the top {{-- code by Nowshin Jerin Eza --}}*/
            z-index: 1000; /* Ensure it is above other content */
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #333;
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background-color: #1abc9c;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <h1>Admin Dashboard - Restaurant Management</h1>
    </div>

    <!-- Container for Sidebar and Main Content -->
    <div class="container">
        <!-- Sidebar {{-- code by Nowshin Jerin Eza --}}-->
        <div class="sidebar">
            <h2>Menu</h2>
            <a href="{{ route('admin.foods.index') }}">Manage Foods</a>
            <a href="{{ route('admin.reservations') }}">Manage Reservations</a>
        </div>

        <!-- Main Content {{-- code by Nowshin Jerin Eza --}}-->
        <div class="main-content">
            <h2>Welcome to the Admin Dashboard</h2>
            <p>Manage your restaurant operations from here, including orders, menu items, and reservations.</p>
        </div>
    </div>

    <!-- Dropdown for Logout in Top Right Corner {{-- code by Nowshin Jerin Eza --}}-->
    <div class="dropdown">
        <button class="button">Account</button>
        <div class="dropdown-content">
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="button" style="background-color: #e74c3c; padding: 10px 20px; border: none; width: 100%; text-align: left; ">Logout</button>
            </form>
            
            
        </div>
        <a href="{{ route('home') }}">
            <button class="button" style="background-color: #3498db; padding: 10px 20px; border: none; text-align: center;">
                Home
            </button>
        </a>
    </div>

    <!-- Footer {{-- code by Nowshin Jerin Eza --}}-->
    <footer>
        <p>Created by <span class="highlight">Nowshin Jerin Eza</span> for <span class="highlight">Khulna University Edge Program</span></p>
    </footer>

</body>
</html>
