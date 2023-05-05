<?php
require_once('sql-conn.php');
session_start();

@mysqli_close($dbc);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/lures.css" />
    <title>Brothers Bait</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script defer src="lures.js"></script>
    
  </head>
  
  <body>
    <header>
      <div class="header-wrapper">
      <a href="index.html" class="home-btn">
        <h1>Brothers Bait</h1>
      </a>
      
        <img src="../images/madRedFish.png" alt="Logo" />
        <a href="#" class="nav-btn">Nav</a>
    
      
        <p>Home of the Best Fishing Lures</p>
    </div>
    </header>
    <nav>
      <a class="active">Lures</a>
      <a href="rods.html">Rods</a>
      <a href="services.html">Services</a>
      <a href="pricing.html">Pricing</a>
      <a href="about.html">About Us</a>
      <a href="whatWeDo.html">What we do</a>
      <a href="inquiries.html">Inquiries</a>
      <a href="questions.html">Common Questions</a>
      <a href="contact.html">Contact</a>
    </nav>
    <section>
      <h2 class="underline">Jigs and Lures</h2>
      <div class="cards">
        <div class="card">
          <div class="card-header"><h3>Jigs!</h3></div>

          <img src="../images/HairJig.webp" alt="Hair Jigs" />
          <p>
            Custom made Hair Jigs in many colors and different Jigs!
            Find out more below!
          </p>
          <input type="button" id="info-button" value="More Info">
        </div>
        <div class="card">
          <div class="card-header"><h3>Musky Bucktails</h3></div>

          <img src="../images/bucktail.jpg" alt="Musky bucktails" />
          <p>
            Custom made Musky Bucktails in different shapes and colors!
            Find out more below!
          </p>
          <input type="button" id="info-button" value="More Info">
        </div>
        <div class="card">
          <div class="card-header"><h3>More!</h3></div>

          <img src="../images/moretackle.jpg" alt="Tackle box" />
          <p>
            We make more such like jigging wraps,cranks, you name it!
            Find out more below!
          </p>
          <input type="button" id="info-button" value="More Info">
        </div>
      </div>
    </section>
  </body>
  <script src="../js/index.js"></script>
</html>
