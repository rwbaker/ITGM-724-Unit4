<?php

/**
 * Exercise 1, Unit 3-4, ITGM-727
 * @author Richard Baker, rbaker22@student.scad.edu
 *
 * Option 1: Have your Web site provide a list of five interests
 * (e.g., sports, music, art, dance, history, science, current
 * affairs, etc.). Then ask users to select one or more interests
 * from that list. As a result of that selection, have your program
 * display three suggested Web site links per interest expressed.
 *
 * Question: Choose your favorite type of coffee
 * Options: Espresso
 *          Latte or cappuccinos
 *          Pour over
 *          Drip coffee
 *          Coffee is terrible, how about tea?
 *
 */

  // Core data store
  $espresso = array(
    "Different types of espresso-based drinks" => "http://cdn.shopify.com/s/files/1/0211/4926/files/PopChartLab__Expresso_Large506.jpg?1290",
    "How to make espresso" => "https://prima-coffee.com/learn/article/making-espresso",
    "Try an Americola at Octane Coffee in Atlanta" => "http://www.atlantamagazine.com/bestofatlanta/coffee-octane/"
  );

  $latte = array(
    "How to make a latte" => "https://www.youtube.com/watch?v=UxwscVIZ8Qg",
    "How to steam milk" => "https://www.youtube.com/watch?v=0vD--H7poxU",
    "Bonus round: Explore the flat white if you've never tried it." => "http://en.ilovecoffee.jp/posts/view/168"
  );

  $pourover = array(
    "Pour over instructions" => "https://bluebottlecoffee.com/preparation-guides/pour-over",
    "Pour over equipment" => "hhttps://prima-coffee.com/equipment/abid/pcc-10",
    "Troubleshooting bad coffee" => "http://club.atlascoffeeclub.com/bitter-coffee-and-6-fixes/"
  );

  $drip = array(
    "Best drip coffee makers" => "https://thewirecutter.com/reviews/best-drip-coffee-maker/f",
    "Making the perfect cup of drop coffee..." => "https://www.foodnetwork.com/videos/making-a-perfect-cup-of-coffee-0129414",
    "Keurig is the worst form of drip coffee" => "https://www.kcupbarista.com/2015/07/five-reasons-i-wont-buy-a-keurig/"
  );

  $tea = array(
    "Some of the bet tea comes from Sri Lanka" => "https://www.cnn.com/travel/article/sri-lanka-tea-experiences/index.html",
    "Instructions for making yummy tea" => "https://www.wikihow.com/Make-Tea",
    "Tea traditions from around the world" => "http://mentalfloss.com/article/72891/15-tea-traditions-around-world"
  );

  // Initial flags set to hide all data by default;
  // This is used as a Bootstrap-specific CSS class name to hide elements
  $showEspresso = $showLatte = $showPourover = $showDrip = $showTea = 'd-none';


  if (isset($_POST['submit'])) {
    // Grab data from our POST object & make it easier to reference in the future
    $choices = $_POST['favoriteCoffee'];
    $name = $_POST['inputName'];

    // For each option, check if that choice was in the users selection
    // If so, wipe out the 'd-none' class
    if (in_array("espresso", $choices)){ $showEspresso = ''; }
    if (in_array("latte", $choices)){ $showLatte = ''; }
    if (in_array("pourover", $choices)){ $showPourover = ''; }
    if (in_array("drip", $choices)){ $showDrip = ''; }
    if (in_array("tea", $choices)){ $showTea = ''; }
  }


?>

  <!DOCTYPE html>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="style/main.css">
  <title>ITGM-727—Unit 4</title>
  </head>

  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="bootstrap-4/js/bootstrap.bundle.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Results</li>
            </ol>
          </nav>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">

          <!--
          Content Header -->
          <div class="text-center mt-5">
            <h1 class="emoji mb-0">☕️</h1>
            <h1 class="h3">Coffee Talk</h1>
          </div>

          <div class="lead mt-4">
            <?php
              echo("<p>Good choice, <strong>" . $_POST['inputName'] . "</strong>. " .
                "Here's a few links to enjoy: ");
            ?>
          </div>

          <!--
          Espresso -->
          <div id="espresso" class="<?php echo "{$showEspresso}" ?>">
            <h3 class="h5">Espresso</h3>
            <p>Hot water, 197º, forced through a fine coffee powder at 217
              pound-force per square inch of pressure to create an amazing,
              viscous liquid with a light crema on top.</p>
            <ul>
              <?php
                // Loop through our link arrays above
                foreach ( $espresso as $key => $value) {
                  echo "<li><a href='{$value}'>{$key}</a></li>";
                }
              ?>
            </ul>
            <hr>
          </div>

          <!--
          Latte or Cappuccino -->
          <div id="latte" class="<?php echo "{$showLatte}" ?>">
            <h3 class="h5">Latte or Cappuccino</h3>
            <p>
              Lattes and cappuccinos are very similar, and are essentially
              varying ratios of espresso, steamed milk, and milk foam. A latte has more steamed
              milk and a touch of foamed milk. Whereas a cappuccino is 1/3
              steamed milk and 1/3 foamed milk. Both are delicious.
            </p>
            <ul>
              <?php
                foreach ( $latte as $key => $value) {
                  echo "<li><a href='{$value}'>{$key}</a></li>";
                }
              ?>
            </ul>
            <hr>
          </div>

          <!--
          Pour over -->
          <div id="pourover" class="<?php echo "{$showPourover}" ?>">
            <h3 class="h5">Pour over Coffee</h3>
            <p>Pour over coffee is kind of like the manual version of the
              machine drip coffee. However, pour over is made by-the-cup,
              by a human, ensuring all grounds are evenly extracted at the
              right temperature.</p>
            <ul>
              <?php
                foreach ( $pourover as $key => $value) {
                  echo "<li><a href='{$value}'>{$key}</a></li>";
                }
              ?>
            </ul>
            <hr>
          </div>

          <!--
          Drip coffee -->
          <div id="drip" class="<?php echo "{$showDrip}" ?>">
            <h3 class="h5">Drip Coffee</h3>
            <p>
              Drip coffee is your basic, industrial, often free, work-place
              coffee. It consists of a sack of grounds, with a pre-determined
              amount of hot water sprayed on top.
            </p>
            <ul>
              <?php
                foreach ( $drip as $key => $value) {
                  echo "<li><a href='{$value}'>{$key}</a></li>";
                }
              ?>
            </ul>
            <hr>
          </div>

          <!--
          Coffee is terrible, how about some tea? -->
          <div id="tea" class="<?php echo "{$showTea}" ?>">
            <h3 class="h5">Coffee is terrible, how about some tea?</h3>
            <p>Tea is okay, too. 🤷🏻‍♂️</p>
            <ul>
              <?php
                foreach ( $tea as $key => $value) {
                  echo "<li><a href='{$value}'>{$key}</a></li>";
                }
              ?>
            </ul>
            <hr>
          </div>

          <div class="mt-4 mb-4">
            <a href="/">Want to go again?</a>
          </div>

        </div>
        <div class="col-md-3"></div>
      </div>
    </div>


  </body>

  </html>
