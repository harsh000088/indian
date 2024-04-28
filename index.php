<!DOCTYPE html>
<html>
<head>
  <title>Online Voting System</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      overflow-x: hidden; /* to prevent horizontal scrolling */
    }
    
    .hero {
      background: linear-gradient(45deg, #4CAF50, #2196F3);
      color: #fff;
      text-align: center;
      padding: 100px 0;
      position: relative;
      overflow: hidden;
    }
    
    .hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(45deg, #4CAF50, #2196F3);
      animation: animate 10s linear infinite; /* Adjust animation speed as needed */
    }
    
    @keyframes animate {
      0% { transform: translateX(-50%) }
      100% { transform: translateX(50%) }
    }
    
    .hero-content {
      position: relative;
      z-index: 1;
    }
    
    .hero h1 {
      font-size: 3em;
      margin-bottom: 20px;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    }
    
    .hero p {
      font-size: 1.2em;
      margin-bottom: 30px;
    }
    
    .btn {
      display: inline-block;
      padding: 10px 20px;
      background: #FFC107;
      color: #333;
      text-decoration: none;
      margin: 0 10px;
      border-radius: 5px;
      transition: background 0.3s ease;
      box-shadow: 0px 4px 6px rgba(0,0,0,0.1);
    }
    
    .btn:hover {
      background: #FFD54F;
      transform: translateY(-2px);
      box-shadow: 0px 8px 12px rgba(0,0,0,0.2);
    }
    
    .about-section {
      background: #f8f9fa;
      padding: 50px 0;
      text-align: center;
    }
    
    .features-section {
      background: #dee2e6;
      padding: 50px 0;
      display: flex;
      justify-content: center;
    }
    
    .feature {
      flex: 1;
      text-align: center;
      margin: 0 20px;
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 4px 6px rgba(0,0,0,0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .feature:hover {
      transform: translateY(-5px);
      box-shadow: 0px 10px 15px rgba(0,0,0,0.2);
    }
    
    footer {
      background: #343a40;
      color: #fff;
      text-align: center;
      padding: 20px 0;
    }
    
    footer p {
      margin: 0;
    }
  </style>
</head>
<body>
  <header class="hero">
    <div class="hero-content">
      <h1>Welcome to Online Voting System</h1>
      <p>Register to cast your vote and make your voice heard</p>
      <a href="registration.php" class="btn">Register</a>
      <a href="login.php" class="btn">Login</a>
      <a href="homepage.php" class="btn">Learn More</a>
    </div>
  </header>

  <section class="about-section">
    <div class="about-content">
      <h2>About Us</h2>
      <p>Secure, convenient, and user-friendly online voting system with robust security measures, easy registration, and efficient vote counting, promoting democratic participation and enhancing trust in the electoral process.</p>
    </div>
  </section>

  <section class="features-section">
    <div class="feature">
      <h3>Easy Registration</h3>
      <p>Register with your details in just a few simple steps</p>
    </div>
    <div class="feature">
      <h3>Secure Login</h3>
      <p>Login with your username and password to access your dashboard.</p>
    </div>
    
    <div class="feature">
      <h3>Cast Your Vote</h3>
      <p>Participate in the election by casting your vote online</p>
    </div>
  </section>

  <footer>
    <p>&copy; 2024 Online Voting System. All rights reserved.</p>
  </footer>
</body>
</html>
