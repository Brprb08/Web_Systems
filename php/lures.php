<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/lures.css" />
    <link rel="stylesheet" href="../css/global.css" />
    <title>Brothers Bait</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script defer src="lures.js"></script>
    
  </head>
  
  <body>
    <header>
      <div class="header-wrapper">
      <a href="../html/index.html" class="home-btn">
        <h1>Brothers Bait</h1>
      </a>
      
        <img src="../images/madRedFish.png" alt="Logo" />
        <a href="#" class="nav-btn"></a>
    
      
        <p>Home of the Best Fishing Lures</p>
    </div>
    </header>
    <nav>
      <a class="active">Lures</a>
      <a href="../php/rods.php">Rods</a>
      <a href="../html/services.html">Services</a>
      <a href="../html/pricing.html">Pricing</a>
      <a href="../html/about.html">About Us</a>
      <a href="../html/whatWeDo.html">What we do</a>
      <a href="../html/inquiries.html">Inquiries</a>
      <a href="../html/questions.html">Common Questions</a>
      <a href="../html/contact.html">Contact</a>
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
              echo '<div class="card lure-card"><div class="card-header"><h3 class="card-title">' . $row['type'] . '<h3></div><p>Size of Blade: ' . $row['size of blade'] . '</p><p>Number of Blades: ' . $row['Number of blades'] .'</p></div>'; 
          }
        }

        $query = "SELECT * FROM hairjig";
        $response = @mysqli_query($dbc,$query);
        if($response) {
            echo '<div class="card jig-card"><div class="card-header"><h3 class="card-title">Jigs</h3></div><p>';
            while ($row = mysqli_fetch_array($response)) {
                echo $row['Size'] . '<br>'; 
            }
            echo '</p></div></div>';
        }
        mysqli_close($dbc);
        ?>
    </section>
    <footer>Copyright 2023</footer>
  </body>
  <script src="../js/index.js"></script>
</html>
