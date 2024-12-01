<?php
// Fetch the confirmation status and details from the query string
$status = $_GET['status'] ?? 'Payment Successful';  // Default to "Payment Successful" if not provided

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation - Dream Travel Agency</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #0e0b16;
            color: #fff;
            text-align: center;
            padding: 5px;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            overflow: hidden;  /* Prevent scrolling */
        }

        .confirmation-message {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 15px;
            width: 80%;
            max-width: 600px;
            box-shadow: 0 10px 30px rgba(0, 255, 247, 0.7);
            text-align: left;
        }

        h2 {
            color: #00fff7;
            font-size: 2.5rem;
            margin-bottom: 20px;
            text-shadow: 0 0 10px #00fff7, 0 0 20px #00fff7;
        }

        p {
            font-size: 1.2rem;
            margin: 10px 0;
            line-height: 1.6;
        }

        .status {
            font-size: 1.5rem;
            font-weight: bold;
            text-shadow: 0 0 5px #00ff00, 0 0 10px #00ff00;
        }

        .status.failed {
            color: #ff007f;
            text-shadow: 0 0 5px #ff007f, 0 0 10px #ff007f;
        }

    </style>
</head>
<body>

<div class="confirmation-message">
    <h2>Payment Confirmation</h2>
    
    <p><strong>Status:</strong> <span class="status <?= $status === 'Payment Failed' ? 'failed' : ''; ?>"><?= htmlspecialchars($status) ?></span></p>

    <p>Thank you for booking with Dream Travel Agency! Your booking has been successfully processed.</p>

    <div class="destination-details">
        <p><strong>Booking Details:</strong> Your Confirmed booking Details are Sent in your Whatsapp/Mobile Number. Get ready for a wonderful experience with us. Below are the key details:</p>
        <ul style="text-align: left; list-style-type: disc; margin-left: 30px;">
            <li>Departure on [date]</li>
            <li>Guided tour to famous spots</li>
            <li>Meals and accommodation included</li>
            <li>Professional guide for your group</li>
            <li>Adventure and sightseeing tours</li>
            <li>Local cultural event</li>
        </ul>
        <p>We hope you have an unforgettable journey!</p>
    </div>
</div>

</body>
</html>
