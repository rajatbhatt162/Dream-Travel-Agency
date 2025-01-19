<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Travel Agency</title>
    <style>
        /* General Styling */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            overflow: hidden;
            color: #fff;
            perspective: 1000px;
        }

        /* Dark Blue Neon Background */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #000022, #001144, #000000);
            z-index: -2;
        }

        /* Animated Stars */
        .stars {
            position: fixed;
            top: 0;
            left: 0;
            width: 200%;
            height: 200%;
            background: transparent url('https://assets.codepen.io/13471/stars.png') repeat;
            animation: move-stars 100s linear infinite;
            z-index: -1;
            opacity: 0.5; /* Reduced opacity for subtle stars */
        }

        @keyframes move-stars {
            from {
                transform: translate(-50%, -50%);
            }
            to {
                transform: translate(-45%, -45%);
            }
        }

        /* Neon Header Box */
        .header-box {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3), 0 0 20px rgba(0, 0, 255, 0.5), 0 0 40px rgba(0, 0, 255, 0.7);
            padding: 30px 60px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 50px;
        }

        .header-box:hover {
            transform: translateY(-15px) rotateX(3deg) rotateY(-3deg);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4), 0 0 25px rgba(0, 0, 255, 0.7), 0 0 50px rgba(0, 0, 255, 1);
        }

        .header-box h1 {
            font-size: 4rem;
            font-weight: bold;
            color: #fff;
            text-transform: uppercase;
            text-shadow: 0 0 10px #00f, 0 0 20px #00f, 0 0 40px #00f, 0 0 80px #00f;
        }

        /* Explore Button Styling */
        .explore-btn {
            padding: 15px 50px;
            background: linear-gradient(45deg, #0033ff, #0000ff);
            color: #fff;
            border: none;
            border-radius: 30px;
            font-size: 1.8rem;
            font-weight: bold;
            text-transform: uppercase;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0, 0, 255, 0.7), 0 0 20px rgba(0, 0, 255, 0.5);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .explore-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 15px rgba(0, 0, 255, 0.9), 0 0 30px rgba(0, 0, 255, 1);
        }

        .explore-btn:active {
            transform: scale(1.05);
        }

        /* Centering Content */
        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }

        /* Footer */
        footer {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
            color: #ccc;
            font-size: 1rem;
        }

        /* Cursor Animation */
        .cursor {
            position: fixed;
            width: 15px;
            height: 15px;
            background: rgba(0, 0, 255, 0.7);
            border-radius: 50%;
            pointer-events: none;
            mix-blend-mode: difference;
            z-index: 9999;
            transition: transform 0.1s ease;
        }

        body:hover .cursor {
            transform: scale(1.5);
        }
    </style>
</head>
<body>
    <div class="stars"></div> <!-- Animated Stars Background -->

    <main>
        <div class="header-box">
            <h1>Dream Travel Agency</h1>
        </div>
        <button class="explore-btn" onclick="location.href='./login/Login-page.php'">Explore</button>
    </main>

    <footer>
        <p>&copy; 2024 Dream Travel Agency. All rights reserved.</p>
    </footer>

    <!-- Cursor Script -->
    <script>
        const cursor = document.createElement('div');
        cursor.className = 'cursor';
        document.body.appendChild(cursor);

        document.addEventListener('mousemove', (e) => {
            cursor.style.left = e.pageX + 'px';
            cursor.style.top = e.pageY + 'px';
        });

        document.querySelectorAll('button, .header-box').forEach((el) => {
            el.addEventListener('mouseover', () => cursor.style.transform = 'scale(2)');
            el.addEventListener('mouseout', () => cursor.style.transform = 'scale(1)');
        });
    </script>
</body>
</html>
