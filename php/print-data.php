<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/random.css" />
    <title>Brothers Bait</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

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
      <a href="lures.html">Lures</a>
      <a href="services.html">Services</a>
      <a href="pricing.html">Pricing</a>
      <a href="about.html">About Us</a>
      <a href="whatWeDo.html">What we do</a>
      <a class="active">Random</a>
      <a href="inquiries.html">Inquiries</a>
      <a href="questions.html">Common Questions</a>
      <a href="contact.html">Contact</a>
    </nav>
    <section>
      <div class="main-section">
        <?php
        require_once("../php/sql-conn.php");

        $query = "SELECT rodLength, color, rodAction  FROM rods";

        $response = @mysqli_query($dbc,$query);

        if($response) {
            echo('<script>console.log("Connection Successful")');
            echo('<div class="card-container">');
            while($row = mysqli_fetch_array($response)) {
                echo('<div class="card"><p>' .
                $row['rodLength'] . '</p><p>' .
                $row['color'] . '</p><p>' .
                $row['rodAction'] . '</p></div>'
                );
            }
            echo('</div>');
        } else {
            echo('Unable to Connect to Database');
            echo mysqli_error($dbc);
        }

        mysqli_close($dbc);
        ?>
      </div>
    </section>
  </body>
  <script src="../js/index.js"></script>
</html>

