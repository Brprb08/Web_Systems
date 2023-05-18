<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="stylesheet" href="../css/rods.css" >
    <link rel="stylesheet" href="../css/global.css" >
    <title>Brothers Bait</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico" >
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
      rel="stylesheet"
    >
  </head>
  <body>
    <header>
      <div class="header-wrapper">
      <a href="../html/index.html" class="home-btn">
        <h1>Brothers Bait</h1>
      </a>
      
        <img src="../images/favicon.ico" alt="Logo" >
        <a href="#" class="nav-btn"></a>
    
      
        <p class="tagline">Home of the Best Fishing Lures</p>
    </div>
    </header>
    <nav>
      <a href="../php/lures.php">Lures</a>
      <a class="active">Rods</a>
      <a href="../html/services.html">Services</a>
      <a href="../html/pricing.html">Pricing</a>
      <a href="../html/about.html">About Us</a>
      <a href="../html/whatwedo.html">What We Do</a>
      <a href="../html/inquiries.html">Inquiries</a>
      <a href="../html/questions.html">Common Questions</a>
      <a href="../html/contact.html">Contact</a>
    </nav>
    <section>
      <div class="main-section">
        <h2>Rods</h2>
        <?php
        require_once("sql-conn.php");

        $query = "SELECT * FROM rods";
        $response = @mysqli_query($dbc,$query);
        if($response) {
          echo '<div class="cards"><div class="card"><div class="card-header"><h3>Soft Water</h3></div>';
          while ($row = mysqli_fetch_array($response)) {
              echo '<p>Length: ' . $row['length'] . '<br>Action: ' . $row['action'] . '</p>';
          }
          echo '</div>';
        }

        $query = "SELECT * FROM hardwaterrods";
        $response = @mysqli_query($dbc,$query);
        if($response) {
          echo '<div class="card"><div class="card-header"><h3>Hard Water</h3></div>';
          while ($row = mysqli_fetch_array($response)) {
              echo '<p>Length: ' . $row['length'] . '<br>Action: ' . $row['action'] . '</p>'; 
          }
          echo '<img src="../images/rod.jpg" alt="Fishing Rod" class="rod-image"/></div></div>';
      }
        mysqli_close($dbc);
        ?>
      </div>
    </section>
    <footer>Copyright 2023</footer>
     <script src="../js/index.js"></script>
  </body>
 
</html>
