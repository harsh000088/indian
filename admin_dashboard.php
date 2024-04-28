
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css">
    <style>
      /* Reset some default styles */
body, h1, h2, p, ul, li {
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

header {
    background: linear-gradient(to right, #ff5f6d, #ffc371);
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
    color: #ff8a5c; /* Change color on hover */
}

main {
    padding: 20px;
}

section {
    margin-bottom: 30px;
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

section:hover {
    transform: translateY(-5px);
}

h2 {
    color: #333;
    font-size: 32px;
    margin-bottom: 20px;
    text-transform: uppercase;
    letter-spacing: 2px;
}

p {
    color: #666;
    font-size: 18px;
    line-height: 1.6;
}

section a {
    color: #ff5f6d; /* Link color */
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s ease;
}

section a:hover {
    color: #ff8a5c; /* Change color on hover */
}

footer {
    background: linear-gradient(to right, #ff5f6d, #ffc371);
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
        <h1>Admin Dashboard</h1>
        <nav>
            <ul>
                <li><a href="manage_candidate.php">Manage Candidates</a></li>
                <li><a href="manage_voter.php">Manage Voters</a></li>
                <li><a href="manage_election.php">Manage Elections</a></li>
                <li><a href="result.php">View Results</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Welcome, Admin!</h2>
            <p>You can manage candidates, voters, elections, and view results here.</p>
        </section>
        <section>
            <h2>Manage Candidates</h2>
            <p>Add  and delete candidates. View candidate profiles and manage them.<li><a href="manage_candidate.php"> Manage candidate</p>
        </section>
        <section>
            <h2>Manage Voters</h2>
            <p> delete or get voter information for validation by clicking here..<li><a href="manage_voter.php">Manage Voters</a></li></p>
        </section>
        <section>
            <h2>Manage Elections</h2>
            <p>Create  and delete elections. Manage election details, dates..<li><a href="manage_election.php">Manage Elections</a></li></p>
            
        </section>
        <section>
            <h2>View Results</h2>
            <p>View election results, including vote counts, winners, and other. <li><a href="result.php">View Results</a></li></p>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Your Election App. All rights reserved.</p>
    </footer>
</body>
</html>
