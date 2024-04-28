<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        /* General Styles */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            overflow-x: hidden; /* Prevent horizontal scrollbar */
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
        }

        .container {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            animation: fadeIn 0.5s ease;
            background: linear-gradient(45deg, #fff, #f2f2f2); /* Background behind the form */
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Form Styles */
        form input[type="text"],
        form input[type="password"],
        form input[type="date"],
        form textarea,
        form select,
        form input[type="email"],
        form input[type="radio"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            background-color: rgba(255, 255, 255, 0.8);
        }

        form input[type="radio"] {
            width: auto;
            margin-right: 10px;
        }

        form button[type="submit"],
        form button[type="button"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form button[type="submit"] {
            background-color: #007bff;
            color: #fff;
        }

        form button[type="button"] {
            background-color: #dc3545;
            color: #fff;
        }

        form button[type="submit"]:hover,
        form button[type="button"]:hover {
            background-color: #0056b3;
        }

        label {
            font-weight: bold;
        }

        /* Feature Styles */
        .feature {
            text-align: center;
            margin-top: 20px;
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
    <div class="container">
        <h2>Registration Form</h2>
        <form id="registrationForm" action="registerprocess.php" method="post">
            <input type="text" name="username" placeholder="Username" required pattern="[A-Za-z\s]+" title="Username should only contain letters">
            <input type="password" id="password" name="password" placeholder="Password" required>
            <button type="button" onclick="toggleVisibility()">Show/Hide</button>

            <script>
            function toggleVisibility() {
                var passwordInput = document.getElementById("password");
                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                } else {
                    passwordInput.type = "password";
                }
            }
            </script>

            <input type="text" name="aadhar" placeholder="Aadhar Number" pattern="[0-9]{12}" title="Aadhar should contain 12 numbers" required>
            
            <!-- Date of Birth Input with Age Validation -->
            <input type="date" id="dob" name="dob" placeholder="Date of Birth" required>
            <script>
            document.getElementById("dob").max = new Date(new Date().setFullYear(new Date().getFullYear() - 18)).toISOString().split("T")[0];
            </script>

            <input type="text" name="voterid" placeholder="Voter ID" required>
            <textarea name="address" placeholder="Address" required></textarea>
            <input type="email" name="email" placeholder="Email" required>
            <select name="user_role" required>
                <option value="">Select User Role</option>
                <option value="admin">Admin</option>
                <option value="candidate">Candidate</option>
                <option value="voter">Voter</option>
            </select>
            <label for="gender">Gender:</label>
            <input type="radio" name="gender" value="male" required> Male
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender" value="other"> Other
            <button type="submit">Register</button>
        </form>
       <div class="feature">
        <h2>HOME</h2>
        <li><a href="homepage.php">Home</a></li>
    </div>
    </div>
</body>
</html>
