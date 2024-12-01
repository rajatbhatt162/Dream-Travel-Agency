<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Process the booking form and payment
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $destination = $_POST['destination'];
    $price = $_POST['price'];

    // Debugging: Check if the form is processed
    echo "Form data received:<br>";
    echo "Name: $name, Email: $email, Phone: $phone, Age: $age, Destination: $destination, Price: $price";

    // Redirect to payment page with GET parameters
    header('Location: ../payment/Payment-page.php?name=' . urlencode($name) . '&email=' . urlencode($email) . '&phone=' . urlencode($phone) . '&age=' . urlencode($age) . '&destination=' . urlencode($destination) . '&price=' . urlencode($price));
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Trip - Dream Travel Agency</title>
    <style>
        /* Global styles */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: #111;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            overflow: hidden;
        }

        .form-container {
            background: #222;
            padding: 40px;
            border-radius: 15px;
            width: 100%;
            max-width: 450px;
            text-align: center;
            box-shadow: 0px 0px 20px 3px #00f0ff;
            background: linear-gradient(145deg, #222, #333);
            border: 2px solid #00f0ff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .form-container:hover {
            transform: scale(1.05);
            box-shadow: 0px 0px 30px 5px #00f0ff, 0px 0px 50px 10px #00ffcc;
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #00f0ff;
            text-shadow: 0px 0px 20px #00f0ff, 0px 0px 30px #00ffcc;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 1.1rem;
            color: #00f0ff;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            background: #333;
            color: #fff;
            border: 2px solid #00f0ff;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 0 5px #00f0ff;
        }

        .form-group input:hover, .form-group input:focus {
            border-color: #00ffcc;
            box-shadow: 0 0 10px #00ffcc;
        }

        button {
            background: #00f0ff;
            color: #fff;
            padding: 12px 20px;
            font-size: 1.1rem;
            cursor: pointer;
            border-radius: 8px;
            width: 100%;
            transition: transform 0.3s ease, background 0.3s ease;
            box-shadow: 0 0 15px 3px #00f0ff;
        }

        button:hover {
            transform: scale(1.05);
            background: #00ffcc;
            box-shadow: 0 0 20px #00ffcc;
        }

        footer {
            font-size: 0.9rem;
            color: #aaa;
            text-align: center;
            position: absolute;
            bottom: 10px;
            width: 100%;
        }

        @media (max-width: 768px) {
            .form-container {
                padding: 30px;
                width: 100%;
                max-width: 400px;
            }

            h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Book Your Trip to <?= htmlspecialchars($_GET['destination']) ?></h2>
        <form method="POST">
            <input type="hidden" name="destination" value="<?= htmlspecialchars($_GET['destination']) ?>">
            <input type="hidden" name="price" value="<?= htmlspecialchars($_GET['price']) ?>">

            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required placeholder="Enter your full name">
            </div>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required placeholder="Enter your email">
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required placeholder="Enter your phone number">
            </div>

            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required placeholder="Enter your age" min="18">
            </div>

            <button type="submit">Proceed to Payment</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2024 Dream Travel Agency. All rights reserved.</p>
    </footer>

</body>
</html>
