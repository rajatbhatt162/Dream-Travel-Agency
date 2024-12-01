<?php
session_start();
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Home - Dream Travel Agency</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: radial-gradient(circle, #000, #0d0d3a, #151546);
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            height: 100vh;
            overflow-x: hidden;
            padding: 2px;
        }

        header {
            text-align: center;
            margin-bottom: 3px;
        }

        header h1 {
            font-size: 3rem;
            font-weight: bold;
            text-shadow: 0 0 10px #ff007f, 0 0 20px #00f0ff;
            margin-bottom: 1px;
        }

        header p {
            font-size: 1.2rem;
            color: #ccc;
        }

        /* New Heading for Vacation Trips */
        .select-trip {
            font-size: 2rem;
            color: #ff007f;
            text-align: center;
            margin-top: 1px;
            margin-bottom: 1px;
            font-weight: bold;
            text-shadow: 0 0 10px #ff007f, 0 0 20px #00f0ff;
        }

        /* Tour Grid Section */
        .tour-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-top: 5px;
            width: 100%;
            max-width: 1200px;
            justify-items: center;
        }

        .tour-item {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.8), 0 0 30px rgba(255, 0, 127, 0.5);
            overflow: hidden;
            position: relative;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: 100%;
            max-width: 280px; /* Adjusting size */
        }

        .tour-item:hover {
            transform: scale(1.05);
            box-shadow: 0 12px 25px rgba(0, 255, 255, 0.8);
        }

        .tour-item img {
            width: 100%;
            height: auto;
            border-bottom: 2px solid #ff007f;
        }

        .tour-info {
            padding: 20px;
            text-align: center;
        }

        .tour-info h3 {
            color: #ff007f;
            font-size: 1.5rem;
        }

        .tour-info p {
            color: #ccc;
            font-size: 1rem;
        }

        .tour-info a {
            background: #ff007f;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .tour-info a:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 20px rgba(255, 0, 127, 0.8);
        }

        footer {
            font-size: 0.9rem;
            color: #ccc;
            margin-top: 20px;
        }

        /* Responsive Design */
        @media screen and (max-width: 768px) {
            .tour-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media screen and (max-width: 480px) {
            .tour-grid {
                grid-template-columns: 1fr;
            }
            header h1 {
                font-size: 2rem;
            }
            .select-trip {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <header>
        <h1>Welcome to Dream Travel Agency</h1>
        
    </header>

    <div class="select-trip">
        <p>Select Your Vacation Trip</p>
    </div>

    <main>
        <!-- Tour Grid Section -->
        <section class="tour-grid">
            <!-- Tour Item 1 -->
            <div class="tour-item">
                <img src="../images/paris.png" alt="Paris">
                <div class="tour-info">
                    <h3>Paris</h3>
                    <p>Price: ₹50,000</p>
                    <a href="../book/Booking-page.php?destination=paris&price=50000">Book Now </a>
                </div>
            </div>

            <!-- Tour Item 2 -->
            <div class="tour-item">
                <img src="../images/newyork.png" alt="New York">
                <div class="tour-info">
                    <h3>New York</h3>
                    <p>Price: ₹60,000</p>
                    <a href="../book/Booking-page.php?destination=New York&price=60000">Book Now </a>
                </div>
            </div>

            <!-- Tour Item 3 -->
            <div class="tour-item">
                <img src="../images/tokyo.png" alt="Tokyo">
                <div class="tour-info">
                    <h3>Tokyo</h3>
                    <p>Price: ₹55,000</p>
                    <a href="../book/Booking-page.php?destination=Tokyo&price=55000">Book Now </a>
                </div>
            </div>

            <!-- Tour Item 4 -->
            <div class="tour-item">
                <img src="../images/dubai.png" alt="Dubai">
                <div class="tour-info">
                    <h3>Dubai</h3>
                    <p>Price: ₹45,000</p>
                    <a href="../book/Booking-page.php?destination=Dubai&price=45000">Book Now </a>
                </div>
            </div>

            <!-- Add More Tours (5-12) -->
            <!-- For brevity, I've added the same structure for the next 8 tours. You can update them accordingly. -->
            <div class="tour-item">
                <img src="../images/bali.png" alt="Bali">
                <div class="tour-info">
                    <h3>Bali</h3>
                    <p>Price: ₹40,000</p>
                    <a href="../book/Booking-page.php?destination=Bali&price=40000">Book Now </a>
                </div>
            </div>

            <div class="tour-item">
                <img src="../images/australia.png" alt="Australia">
                <div class="tour-info">
                    <h3>Australia</h3>
                    <p>Price: ₹85,000</p>
                    <a href="../book/Booking-page.php?destination=Australia&price=85000">Book Now </a>
                </div>
            </div>

            <div class="tour-item">
                <img src="../images/thailand.png" alt="Thailand">
                <div class="tour-info">
                    <h3>Thailand</h3>
                    <p>Price: ₹30,000</p>
                    <a href="../book/Booking-page.php?destination=Thailand&price=30000">Book Now </a>
                </div>
            </div>

            <div class="tour-item">
                <img src="../images/singapore.png" alt="Singapore">
                <div class="tour-info">
                    <h3>Singapore</h3>
                    <p>Price: ₹40,000</p>
                    <a href="../book/Booking-page.php?destination=Singapore&price=40000">Book Now </a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Dream Travel Agency. All rights reserved.</p>
    </footer>

</body>
</html>
