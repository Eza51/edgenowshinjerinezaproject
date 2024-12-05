<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 30px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
        footer {
            text-align: center;
            margin-top: 40px;
            font-size: 14px;
            color: #777;
        }
        footer .highlight {
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <!-- Login Container -->
    <div class="container">
        <h2>Admin Login</h2>
        <!-- Login Form -->
        <form action="{{ route('admin.login') }}" method="POST">
            @csrf
            <!-- Email Input -->
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" required>
            </div>
            <!-- Password Input -->
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" required>
            </div>
            <!-- Submit Button -->
            <div>
                <button type="submit">Login</button>
            </div>
        </form>

        <!-- Error Message Display -->
        @if (session('error'))
            <p class="error">{{ session('error') }}</p>
        @endif
    </div>

    <!-- Footer Section -->
    <footer>
        <p>Designed by <span class="highlight">Nowshin Jerin Eza</span></p>
    </footer>

</body>
</html>
