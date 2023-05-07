<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/rods.css" />
    <title>Brothers Bait</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <div class="header-wrapper">
      <a href="index.html" class="home-btn">
        <h1>Brothers Bait</h1>
      </a>
      
        <img src="../images/favicon.ico" alt="Logo" />
        <a href="#" class="nav-btn">Nav</a>
    
      
        <p class="tagline">Home of the Best Fishing Lures</p>
    </div>
    </header>
    <nav>
      <a href="lures.html">Lures</a>
      <a class="active">Rods</a>
      <a href="services.html">Services</a>
      <a href="pricing.html">Pricing</a>
      <a href="about.html">About Us</a>
      <a href="whatwedo.html">What We Do</a>
      <a href="inquiries.html">Inquiries</a>
      <a href="questions.html">Common Questions</a>
      <a href="contact.html">Contact</a>
    </nav>
    <section>
      <div class="main-section">
        <h2>Rods</h2>
        <?php
        require_once("sql-conn.php");

        $query = "SELECT length, action FROM rods";
        $response = @mysqli_query($dbc,$query);
        if($response) {
            echo '<h3>Rods</h3>';
            while ($row = mysqli_fetch_array($response)) {
                echo '<div><p>Length: ' . $row['length'] . '</p><p>Action: ' . $row['action'] . '</p></div>';
            }
        }

        $query = "SELECT length, action FROM hardwaterrods";
        $response = @mysqli_query($dbc,$query);
        if($response) {
            echo '<h3>Hard Water Rods</h3>';
            while ($row = mysqli_fetch_array($response)) {
                echo '<div><p>Length: ' . $row['length'] . '</p><p>Action: ' . $row['action'] . '</p></div>'; 
            }
        }
        mysqli_close($dbc);
        ?>
      </div>
    </section>
    <footer>Copyright 2023</footer>
  </body>
  <script src="../js/index.js"></script>
</html>
