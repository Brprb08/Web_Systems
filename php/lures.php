<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="lures.css" />
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
      <?php
        require_once("sql-conn.php");

        $query = "SELECT * FROM bucktail";
        $response = @mysqli_query($dbc,$query);
        if($response) {
          echo '<div class="cards">';
          while ($row = mysqli_fetch_array($response)) {
              echo '<div class="card"><div class="card-header"><h3>' . $row['type'] . '<h3></div><p>Size of Blade: ' . $row['size of blade'] . '</p><p>Number of Blades: ' . $row['Number of blades'] .'</div>'; 
          }
        }

        $query = "SELECT * FROM hairjig";
        $response = @mysqli_query($dbc,$query);
        if($response) {
            echo '<div class="cards"><div class="card"><div class="card-header"><h3>Jigs</h3></div>';
            while ($row = mysqli_fetch_array($response)) {
                echo '<p>' . $row['Size'] . '</p>'; 
            }
            echo '</div></div></div>';
        }
        mysqli_close($dbc);
        ?>
    </section>
  </body>
  <script src="../js/index.js"></script>
</html>
