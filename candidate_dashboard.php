
<html>
<head>
    <title>Candidate Dashboard</title>
    <link rel="stylesheet" type="text/css" >
    <style>
        /* Reset some default styles */
body, h1, h2, p, ul, li {
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif; /* Use Google Font Roboto for a modern look */
}

header {
    background: linear-gradient(to right, #4CAF50, #2196F3); /* Vibrant gradient background */
    color: #fff;
    padding: 20px;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

nav ul {
    list-style-type: none;
    padding: 0;
    text-align: center;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s ease;
}

nav ul li a:hover {
    color: #FFC107; /* Change color on hover */
    transform: translateY(-2px); /* Add slight upward movement on hover */
}

main {
    padding: 20px;
}

section {
    margin-bottom: 30px;
    background-color: #f2f2f2; /* Light background color */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

section:hover {
    transform: scale(1.02); /* Scale up slightly on hover */
}

h1 {
    font-size: 36px;
    margin-bottom: 20px;
    text-transform: uppercase;
}

h2 {
    color: #333;
    font-size: 28px;
    margin-bottom: 15px;
    text-transform: uppercase;
}

p {
    color: #666;
    font-size: 18px;
    line-height: 1.6;
}

footer {
    background: linear-gradient(to right, #4CAF50, #2196F3); /* Same as header background */
    color: #fff;
    text-align: center;
    padding: 10px;
    position: fixed;
    bottom: 0;
    width: 100%;
    box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
}
    </style>
</head>
<body>
    <header>
        <h1>Candidate Dashboard</h1>
        <nav>
            <ul>
                <li><a href="result.php">View Results</a></li>
                <li><a href="electionregister.php">Election register</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Welcome, Candidate!</h2>
            <p>You can view results and monitor your campaign here.</p>

        </section>
        <section>
            <h2><a href="electionregister.php">Election register</a></h2>
            <p>Register yourself for the election, which you want to stand for.</p>
            
        </section>
        
    </main>
    <footer>
        <p>&copy; 2024 Your Election App. All rights reserved.</p>
    </footer>
</body>
</html>
