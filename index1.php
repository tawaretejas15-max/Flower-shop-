<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nursery Plant Shopping</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');

    body {
      margin: 0;
      box-sizing: border-box;
    }

    /* CSS for header */
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #f5f5f5;
    }

    .header .logo {
      font-size: 25px;
      font-family: 'Sriracha', cursive;
      color: #000;
      text-decoration: none;
      margin-left: 30px;
    }

    .nav-items {
      display: flex;
      justify-content: space-around;
      align-items: center;
      background-color: #f5f5f5;
      margin-right: 20px;
    }

    .nav-items a {
   
      text-decoration: none;
      color: #000;
      padding: 35px 20px;
    }

    /* CSS for main element */
    .intro {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 520px;
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%),
       url("images/log.jpg");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-color:green;
    }

    .intro h1 {
      font-family: sans-serif;
      font-size: 60px;
      color: #fff;
      font-weight: bold;
      text-transform: uppercase;
      margin: 0;
    }

    .intro p {
      font-size: 20px;
      color: #d1d1d1;
      text-transform: uppercase;
      margin: 20px 0;
    }

    .intro button {
      background-color:green;
      color:whitesmoke;
      padding: 10px 25px;
      border: none;
      border-radius: 5px;
      font-size: 20px;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.4)
    }

    .achievements {
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 40px 80px;
    }

    .achievements .work {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 0 40px;
    }

    .achievements .work i {
      width: fit-content;
      font-size: 50px;
      color: green;
      border-radius: 50%;
      border: 2px solid green;
      padding: 12px;
    }

    .achievements .work .work-heading {
      font-size: 30px;
      color:green;
      text-transform: uppercase;
      margin: 20px 0;
    }

    .achievements .work .work-text {
      font-size: 15px;
      color: black;
      margin: 10px 0;
    }

    .about-me {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px 80px;
      border-top: 2px solid #eeeeee;
    }

    .about-me img {
      width: 500px;
      max-width: 100%;
      height: auto;
      border-radius: 10px;
    }

    .about-me-text h2 {
      font-size: 30px;
      color:green;
      text-transform: uppercase;
      margin: 0;
    }

    .about-me-text p {
      font-size: 15px;
      color:black;
      margin: 10px 0;
    }

    /* CSS for footer */
    .footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: darkgreen;
      padding: 10px 40px;
    }

    .footer {
      color: #fff;
    }

    .bottom-links {
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 40px 0;
    }

    .bottom-links .links {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 0 40px;
    }

    .bottom-links .links span {
      font-size: 20px;
      color: #fff;
      text-transform: uppercase;
      margin: 10px 0;
    }

    .bottom-links .links a {
      text-decoration: none;
      color: #a1a1a1;
      padding: 10px 20px;
    }
  </style>
</head>

<body>
  <header class="header">
    <a href="#" class="logo">plant nursery</a>
    <nav class="nav-items">
        <a href="#">Home</a>
        
        <a href="about us.html">About Us</a>
        <a href="Products.html">Products</a>
        <a href="Gallary.html">Gallary</a>
        <a href="Services.html">Services</a>
        <a href="feedback.html">Feedback</a>
        <a href="order_cancel.html">Order Cancel</a>
        
        
      
    </nav>
  </header>
  <main>
    <div class="intro">
      <h1>🌱Onilne Nursery Plant Shop🌱</h1>
      <p><b>“🍂To plant a garden is to believe in tomorrow🍂”</b></p>
      <button><a href="login.html">Login</a></button>
    </div>
    <div class="achievements">
      <div class="work">
        <i class="fas fa-atom"></i>
        <p class="work-heading">Workshop</p>
        <p class="work-text">Attend our workshops to learn essential plant care tips and tricks to keep your garden thriving.</p>
      </div>
      <div class="work">
        <i class="fas fa-skiing"></i>
        <p class="work-heading">Services</p>
        <p class="work-text">We provide expert assistance in selecting the right plants for your garden, considering factors like climate, soil, and sunlight.</p>
      </div>
      <div class="work">
        <i class="fas fa-ethernet"></i>
        <p class="work-heading">Internet</p>
        <p class="work-text">we can view and purchase various plants using the internet.it means that by going to that place we can save the time that is going to be spend.</p>
      </div>
    </div>
    <div class="about-me">
      <div class="about-me-text">
        <h2>About Us
</h2>
        <p>Welcome.....to our Nursery Plant Shop, your one-stop destination for all things related to plants.
          Founded in 20XX, our passion for plants and the environment drove us to create a platform where plant enthusiasts like you can find a wide variety of nursery plants, gardening tools, and expert advice.
          At Nursery Plant Shop, we are dedicated to promoting green living and sustainable gardening practices. Our mission is to make it easy for individuals and families to connect with nature, grow their own plants, and beautify their homes and surroundings.
          We have a team of experienced botanists, horticulturists, and gardening experts who are here to assist you in every step of your plant journey. Whether you're a seasoned gardener or just getting started, we're here to help you succeed.</p>
      </div>
      <img src="C:\xampp\htdocs\Project\images\about.jpg" alt="me">
    </div>
  </main>
  <footer class="footer">
    
    <div class="bottom-links">
      <div class="links">
        <span>More Info</span>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
      </div>
      <div class="links">
        <span>Social Links</span>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-search"></i></a>
      </div>
    </div>
  </footer>
</body>
</html>