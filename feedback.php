<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
    <style>
        /* General Styles */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            overflow-x: hidden; /* Prevent horizontal scrollbar */
        }

        /* Animated Background Pattern */
        body:before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: linear-gradient(180deg, rgba(0, 0, 255, 0.3), rgba(255, 0, 0, 0.3), rgba(0, 255, 0, 0.3));
            background-size: 100% 400%;
            animation: bgAnimation 3s infinite;
        }

        @keyframes bgAnimation {
            0% {
                background-position: 0% 0%;
            }
            50% {
                background-position: 100% 100%;
            }
            100% {
                background-position: 0% 0%;
            }
        }

        /* Feedback Form Styles */
        h1 {
            color: #333;
            text-align: center;
            margin-top: 50px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        form {
            width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            animation: shake 0.5s infinite alternate;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 14px;
        }

        textarea {
            height: 100px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .success {
            color: green;
            font-weight: bold;
            margin-top: 10px;
        }

        .error {
            color: red;
            font-weight: bold;
            margin-top: 10px;
        }

        .disclaimer {
            position: fixed;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(255, 255, 255, 0.8);
            padding: 10px 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            animation: moveDisclaimer 5s linear infinite;
        }

        @keyframes moveDisclaimer {
            0% { left: 50%; }
            50% { left: 40%; }
            100% { left: 50%; }
        }

        @keyframes shake {
            0% { transform: translateX(0); }
            100% { transform: translateX(10px); }
        }

        /* Additional colors */
        .success,
        .error {
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }

        .success {
            color: #28a745;
        }

        .error {
            color: #dc3545;
        }

        /* Additional effects */
        input[type="text"]:focus,
        input[type="email"]:focus,
        textarea:focus {
            box-shadow: 0 0 5px rgba(255, 193, 7, 0.5);
        }

        input[type="submit"]:active {
            transform: translateY(2px);
        }

        /* Centering feature div */
        .feature {
            text-align: center;
            margin-top: 50px;
        }

        .feature h2 {
            margin-bottom: 0;
        }

        .feature li {
            display: inline;
            list-style-type: none;
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <h1>Feedback Form</h1>
    <form id="feedbackForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        <label for="message">Message</label>
        <textarea id="message" name="message" required></textarea>
        <input type="submit" value="Submit">
    </form>

    <div class="feature">
        <h2>HOME</h2>
        <li><a href="homepage.php">Home</a></li>
    </div>

    <div class="disclaimer">
        <p>Submit your feedback to help us improve!</p>
    </div>
</body>
</html>
