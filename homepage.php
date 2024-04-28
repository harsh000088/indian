<!DOCTYPE html>
<html>
<head>
  <title>My Homepage</title>
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
      background: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80"%3E%3Cg fill="%23dddddd" fill-opacity="0.4"%3E%3Cpath fill-rule="evenodd" d="M80 40c0 22.092-17.908 40-40 40-8.285 0-16.05-2.542-22.471-6.856C17.061 66.142 14 53.422 14 40c0-13.423 3.06-26.143 8.529-37.144C23.951 2.542 31.715 0 40 0c22.092 0 40 17.908 40 40zM28 40c0 13.422 3.06 26.142 8.528 37.144C37.715 77.458 45.479 80 53.764 80c8.284 0 16.049-2.542 22.472-6.856C62.939 66.141 66 53.42 66 40c0-13.422-3.06-26.143-8.528-37.143C56.285 2.542 48.52 0 40 0c-8.285 0-16.05 2.542-22.472 6.857C31.061 13.858 28 26.578 28 40z" /%3E%3C/g%3E%3C/svg%3E');
      animation: animateBackground 60s linear infinite;
    }

    @keyframes animateBackground {
      from { transform: translateX(0); }
      to { transform: translateX(-80px); }
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 10px 0;
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 1000;
    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      text-align: center;
    }

    nav ul li {
      display: inline;
      margin: 0 10px;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
      padding: 5px 10px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    nav ul li a:hover {
      background-color: #555;
    }

    /* Hero Section Styles */
    .hero-section {
      background: linear-gradient(45deg, #ff3366, #33ccff, #ffff66, #ff9900);
      text-align: center;
      padding: 100px 0;
      margin-top: 60px; /* Compensate for fixed header */
    }

    .hero-content h1 {
      font-size: 3em;
      margin-bottom: 20px;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    }

    .hero-content p {
      font-size: 1.2em;
      margin-bottom: 30px;
    }

    .btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #333;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #555;
    }

    /* About Section Styles */
    .about-section {
      background-color: #f9f9f9;
      text-align: center;
      padding: 50px 0;
    }

    /* Features Section Styles */
    .features-section {
      background-color: #fff;
      padding: 50px 0;
      display: flex;
      justify-content: center;
    }

    .feature {
      flex: 1;
      text-align: center;
      margin: 0 20px;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 4px 6px rgba(0,0,0,0.1);
    }

    .feature:hover {
      transform: translateY(-5px);
      box-shadow: 0px 10px 15px rgba(0,0,0,0.2);
    }

    footer {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 20px 0;
      margin-top: 20px; /* Compensate for footer overlap */
    }

    /* Animation */
    @keyframes glitter {
      0% { background-position: -200px 0; }
      100% { background-position: calc(200px + 100%) 0; }
    }

    .glitter {
      background: linear-gradient(45deg, #ff3366, #33ccff, #ffff66, #ff9900);
      background-size: 400% 100%;
      animation: glitter 5s linear infinite;
    }

    @keyframes slidein {
      0% { opacity: 0; transform: translateY(-100px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    .slidein {
      animation: slidein 1s ease;
    }

    @keyframes pulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.1); }
      100% { transform: scale(1); }
    }

    .pulse {
      animation: pulse 2s infinite;
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
  animation: rain 1s linear infinite;
  background: 
    radial-gradient(1px 1px at 1px 1px, rgba(255, 0, 0, 0.8), transparent 1px),
    radial-gradient(1px 1px at 50% 0, rgba(0, 255, 0, 0.8), transparent 1px),
    radial-gradient(1px 1px at 100% 1px, rgba(0, 0, 255, 0.8), transparent 1px);
}

@keyframes rain {
  from { background-position: 0 0, 0 0, 0 0; }
  to { background-position: 40px 40px, 0 40px, -40px 40px; }
}

  </style>
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="registration.php">Registration</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="feedback.php">Feedback</a></li>
      </ul>
    </nav>
  </header>

  <section class="hero-section">
    <div class="hero-content slidein">
      <h1>Welcome to My Homepage</h1>
      <p>Get started with the online voting system</p>
      <a href="registration.php" class="btn pulse">Register Now</a>
    </div>
  </section>

  <section class="about-section">
    <div class="about-content slidein">
      <h2>About Us</h2>
      <p>Secure, convenient, and user-friendly online voting system with robust security measures, easy registration, and efficient vote counting, promoting democratic participation and enhancing trust in the electoral process.</p>
    </div>
  </section>

  <section class="features-section">
    <div class="feature glitter">
      <h3>Easy Registration</h3>
      <p>Register as a voter, admin, or candidate with just a few simple steps.</p>
    </div>
    <div class="feature glitter">
      <h3>Feedback</h3>
      <a href="feedback.php" class="btn pulse">Feedback</a>
      <p>Give your important Feedback it will help us to improve our system!</p>
    </div>
    <div class="feature glitter">
      <h3>Election & Results</h3>
      <p>Participate in elections and view results in real-time.</p>
    </div>
    <div class="feature glitter">
      <h3>User Support</h3>
      <p>24/7 customer support to assist you with any issues or queries.CONTACT-8767816441,9168214169,8855882144</p>
    </div>
    <div class="feature glitter">
      <h3>User Friendly</h3>
      <p>Access the online voting system from any device, anywhere.</p>
    </div>
  </section>

  <footer>
    <p>Contact Us: onlinevoting55@gmail.com | Phone: 7775555888</p>
  </footer>

</body>
</html>
