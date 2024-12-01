<?php
// Fetch booking details from the query string (GET parameters)
$name = $_GET['name'] ?? 'N/A'; 
$email = $_GET['email'] ?? 'N/A';
$phone = $_GET['phone'] ?? 'N/A';
$age = $_GET['age'] ?? 'N/A';
$destination = $_GET['destination'] ?? 'N/A';
$price = $_GET['price'] ?? 'N/A';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page - Dream Travel Agency</title>
    <style>
       body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #0a0a2a;
    color: #fff;
    overflow: hidden; /* Prevent scrolling */
}

header {
    background-color: #003366;
    padding: 0;
    text-align: center;
    color: #00d8ff;
    box-shadow: 0 4px 20px rgba(0, 216, 255, 0.7);
    border-bottom: 3px solid #00d8ff;
}

header h1 {
    font-size: 2rem;
    margin: 0;
    text-shadow: 0 0 20px #00d8ff, 0 0 30px #00d8ff;
}

header p {
    font-size: 1.4rem;
    margin: 5px 0;
    text-shadow: 0 0 10px #ff00ff, 0 0 20px #ff00ff;
}

main {
    display: flex;
    justify-content: center;
    align-items: center;
    height: calc(100vh - 140px); 
    background-color: #001a33;
}

.payment-info {
    background: rgba(0, 0, 0, 0.6);
    padding: 0;
    border-radius: 15px;
    width: 500px;
    text-align: center;
    box-shadow: 0 10px 40px rgba(0, 216, 255, 0.7), 0 4px 15px rgba(0, 0, 0, 0.5);
    transform: perspective(1000px) rotateX(0deg) scale(1);
    transition: all 0.4s ease-out;
}

.payment-info:hover {
    transform: perspective(1000px) rotateX(5deg) scale(1.05);
    box-shadow: 0 15px 40px rgba(0, 216, 255, 0.7), 0 8px 15px rgba(0, 0, 0, 0.5);
}

.payment-info h2 {
    font-size: 1.8rem;
    color: #00d8ff;
    margin-bottom: 15px;
    text-shadow: 0 0 15px #00d8ff, 0 0 30px #00d8ff;
}

.payment-info p {
    display: flex;
    justify-content: space-between;
    font-size: 1.1rem;
    color: #fff;
    margin: 15px 0;
    padding: 0 10px;
}

.payment-info p strong {
    margin-right: 10px; /* Adds space between the label and the value */
}

.payment-info p:hover {
    text-shadow: 0 0 20px #ff00ff, 0 0 40px #ff00ff;
}

.form-group {
    margin-bottom: 25px;
}

.form-group select, .form-group button {
    width: 100%;
    padding: 10px;
    border-radius: 6px;
    border: 2px solid #00d8ff;
    background: #003366;
    color: #fff;
    font-size: 1.2rem;
    margin: 12px 0;
    cursor: pointer;
    text-shadow: 0 0 5px #00d8ff;
    transition: all 0.3s ease;
}

.form-group select:focus, .form-group button:hover {
    border-color: #ff0099;
    background: #001a33;
    box-shadow: 0 0 10px #ff0099;
    transform: scale(1.05);
}

.form-group button {
    background: #00d8ff;
    font-weight: bold;
    transition: all 0.3s ease;
}

.form-group button:hover {
    background: #ff0099;
    color: #fff;
    text-shadow: 0 0 10px #ff0099;
    transform: scale(1.1);
}

footer {
    background-color: #003366;
    padding: 15px;
    text-align: center;
    color: #fff;
    font-size: 1rem;
    box-shadow: 0 -4px 10px rgba(0, 216, 255, 0.7);
}

footer p {
    margin: 0;
    text-shadow: 0 0 10px #00d8ff, 0 0 20px #00d8ff;
}

/* Animation for text */
@keyframes textGlow {
    0% {
        text-shadow: 0 0 20px #00d8ff, 0 0 30px #00d8ff, 0 0 50px #00d8ff;
    }
    50% {
        text-shadow: 0 0 30px #ff0099, 0 0 50px #ff0099, 0 0 70px #ff0099;
    }
    100% {
        text-shadow: 0 0 20px #00d8ff, 0 0 30px #00d8ff, 0 0 50px #00d8ff;
    }
}

h1, h2 {
    animation: textGlow 3s infinite alternate;
}

    </style>
    <script>
        function validateForm() {
            // Check if the payment method is selected
            const paymentMethod = document.getElementById('payment-method').value;
            if (!paymentMethod) {
                alert('Please select a payment method.');
                return false;
            }
            // If everything is correct, submit the form
            return true;
        }
    </script>
</head>
<body>

<header>
    <h1>Payment for Your Adventure</h1>
    <p>Complete your booking by making a payment.</p>
</header>

<main>
    <section class="payment-info">
        <h2>Your Travel Details</h2>
        <p><strong>Name:</strong> <?= htmlspecialchars($name) ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
        <p><strong>Phone:</strong> <?= htmlspecialchars($phone) ?></p>
        <p><strong>Age:</strong> <?= htmlspecialchars($age) ?></p>
        <p><strong>Destination:</strong> <?= htmlspecialchars($destination) ?></p>
        <p><strong>Price:</strong> ₹<?= htmlspecialchars($price) ?></p>

        <h3>Select a Payment Method:</h3>

        <!-- Payment Options -->
        <form method="POST" action="Payment-complete.php" onsubmit="return validateForm();">
            <div class="form-group">
                <label for="payment-method">Payment Method:</label>
                <select name="payment-method" id="payment-method" required>
                    <option value="" disabled selected>-- Select a Payment Method --</option>
                    <option value="Credit Card">Credit Card</option>
                    <option value="Debit Card">Debit Card</option>
                    <option value="UPI">UPI</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Proceed to Payment</button>
            </div>
        </form>
    </section>
</main>

<footer>
    <p>Dream Travel Agency - All Rights Reserved</p>
</footer>

</body>
</html>
