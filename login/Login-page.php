<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D Neon Login - Dream Travel Agency</title>
    <style>
        /* General Styling */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: radial-gradient(circle, #1b1b2f, #162447, #1f4068);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        /* 3D Form Container */
        .form-container {
            position: relative;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 50px;
            border-radius: 20px;
            box-shadow: 
                0 5px 15px rgba(0, 0, 0, 0.3),
                0 0 30px rgba(255, 0, 127, 0.5),
                0 0 50px rgba(0, 255, 255, 0.5);
            transform: perspective(1000px) rotateY(0deg) rotateX(0deg);
            transition: transform 0.3s ease;
            width: 350px;
            text-align: center;
        }

        .form-container:hover {
            transform: perspective(1000px) rotateY(10deg) rotateX(10deg);
            box-shadow: 
                0 5px 20px rgba(0, 0, 0, 0.5),
                0 0 40px rgba(255, 0, 127, 0.8),
                0 0 60px rgba(0, 255, 255, 0.8);
        }

        /* Header */
        .form-container h2 {
            margin-bottom: 20px;
            font-size: 2rem;
            text-shadow: 
                0 0 10px #ff007f, 
                0 0 20px #00f0ff, 
                0 0 30px #007bff;
        }

        /* Input Fields */
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group label {
            font-size: 1rem;
            margin-bottom: 5px;
            display: block;
            color: rgba(255, 255, 255, 0.8);
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 2px solid transparent;
            border-radius: 5px;
            background: #222;
            color: #fff;
            font-size: 1rem;
            transition: all 0.3s ease;
            box-shadow: 
                0 0 10px rgba(0, 255, 255, 0.3),
                inset 0 0 10px rgba(0, 255, 255, 0.3);
        }

        .form-group input:focus {
            outline: none;
            border: 2px solid #00f0ff;
            box-shadow: 
                0 0 15px rgba(0, 255, 255, 0.6), 
                0 0 25px rgba(255, 0, 127, 0.6);
        }

        /* Buttons */
        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: 100%;
            margin-bottom: 15px;
        }

        .btn.login {
            background: #007bff;
            color: #fff;
            box-shadow: 0 0 10px #007bff, 0 0 20px #007bff;
        }

        .btn.login:hover {
            transform: scale(1.1);
            box-shadow: 
                0 0 20px #007bff, 
                0 0 30px #007bff, 
                0 0 40px #007bff;
        }

        .btn.create-account {
            background: #ff007f;
            color: #fff;
            box-shadow: 0 0 10px #ff007f, 0 0 20px #ff007f;
        }

        .btn.create-account:hover {
            transform: scale(1.1);
            box-shadow: 
                0 0 20px #ff007f, 
                0 0 30px #ff007f, 
                0 0 40px #ff007f;
        }

        /* Error Message */
        .error-message {
            color: #ff4c4c;
            margin-bottom: 15px;
            animation: blink 1.5s infinite;
        }

        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
    </style>
    <script>
        function login() {
            // Retrieve user ID and password
            const userId = document.getElementById('user_id').value;
            const password = document.getElementById('password').value;

            // Check localStorage for user data
            const storedData = JSON.parse(localStorage.getItem('users')) || {};
            const storedPassword = storedData[userId];

            if (storedPassword && storedPassword === password) {
                // Login success
                window.location.href = 'After-Login.php';
            } else {
                // Login failed
                document.getElementById('error-message').textContent = 'Invalid User ID or Password!';
            }
        }
    </script>
</head>
<body>
    <div class="form-container">
        <h2>Login</h2>
        <p id="error-message" class="error-message"></p>
        <form onsubmit="event.preventDefault(); login();">
            <div class="form-group">
                <label for="user_id">User ID:</label>
                <input type="text" id="user_id" name="user_id" placeholder="Enter your user ID" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn login">Login</button>
        </form>
        <button class="btn create-account" onclick="location.href='create-account.php'">Create Account</button>
    </div>
</body>
</html>
