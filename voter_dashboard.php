
<html>
<head>
    <title>Voter Dashboard</title>
    <link rel="stylesheet" type="text/css" >
    <style>
        body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

header {
    background-color: #4CAF50; /* Green color */
    color: #fff;
    padding: 20px;
    text-align: center;
    border-bottom: 4px solid #388E3C; /* Darker shade of green */
    animation: fadeInDown 1s ease;
}

@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    text-decoration: none;
    color: #fff;
    font-size: 18px;
    transition: color 0.3s ease;
}

nav ul li a:hover {
    color: #FF9800; /* Orange color on hover */
}

main {
    padding: 20px;
}

section {
    margin-bottom: 30px;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    animation: slideInLeft 1s ease;
}

@keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translateX(-50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

h1, h2 {
    color: #673AB7; /* Purple color */
    text-align: center;
}

h1 {
    font-size: 40px;
    margin-bottom: 20px;
    animation: fadeInUp 1s ease;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

h2 {
    font-size: 28px;
    margin-bottom: 10px;
}

p {
    font-size: 18px;
    line-height: 1.5;
}

footer {
    background-color: #2196F3; /* Blue color */
    color: #fff;
    padding: 20px;
    text-align: center;
    border-top: 4px solid #1976D2; /* Darker shade of blue */
    animation: fadeInUp 1s ease;
}

    </style>
</head>
<body>
    <header>
        <h1>Voter Dashboard</h1>
        <nav>
            <ul>
                <li><a href="viewcandidate.php">View Candidates</a></li>
                <li><a href="vote.php">Vote</a></li>
                <li><a href="result.php">View Results</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Welcome, Voter!</h2>
            <p>You can view candidates, vote, and view results here.</p>
        </section>
        
        <section>
            <h1>View result<a href="result.php"></a></h1>
            <h2><a href="result.php"></h2>
            <p>Stay updated with the latest election results, including the winners and vote counts.</p>
        </section>
    </main>
    <footer>
        <p> 2024 Your Election App. All rights reserved.</p>
    </footer>
</body>
</html>
