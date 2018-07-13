<?php

/**
 * Exercise 1, Unit 3-4, ITGM-727
 * @author Richard Baker, rbaker22@student.scad.edu
 *
 * @assignment:
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
 * @short desc:
 * Form on index.php calls this page on submit. Content set at top.
 * Switch statement loops through multiselect values to display related HTML.
 *
 */

/*  Set all content variables first to make editing easier.
    Also cleans up the hybrid PHP/HTML text down below. */
  $espressoTitle = "Espresso";
  $espressoDesc = "Hot water, 197º, forced through a fine coffee powder at 217
    pound-force per square inch of pressure to create an amazing,
    viscous liquid with a light crema on top.";
  $espresso = array(
    "Different types of espresso-based drinks" => "http://cdn.shopify.com/s/files/1/0211/4926/files/PopChartLab__Expresso_Large506.jpg?1290",
    "How to make espresso" => "https://prima-coffee.com/learn/article/making-espresso",
    "Try an Americola at Octane Coffee in Atlanta" => "http://www.atlantamagazine.com/bestofatlanta/coffee-octane/"
  );

  $latteTitle = "Latte or Cappuccino";
  $latteDesc = "Lattes and cappuccinos are very similar, and are essentially
  varying ratios of espresso, steamed milk, and milk foam. A latte has more steamed
  milk and a touch of foamed milk. Whereas a cappuccino is 1/3
  steamed milk and 1/3 foamed milk. Both are delicious.";
  $latte = array(
    "How to make a latte" => "https://www.youtube.com/watch?v=UxwscVIZ8Qg",
    "How to steam milk" => "https://www.youtube.com/watch?v=0vD--H7poxU",
    "Bonus round: Explore the flat white if you've never tried it." => "http://en.ilovecoffee.jp/posts/view/168"
  );

  $pouroverTitle = "Pour over Coffee";
  $pouroverDesc = "Pour over coffee is kind of like the manual version of the
    machine drip coffee. However, pour over is made by-the-cup,
    by a human, ensuring all grounds are evenly extracted at the
    right temperature.";
  $pourover = array(
    "Pour over instructions" => "https://bluebottlecoffee.com/preparation-guides/pour-over",
    "Pour over equipment" => "hhttps://prima-coffee.com/equipment/abid/pcc-10",
    "Troubleshooting bad coffee" => "http://club.atlascoffeeclub.com/bitter-coffee-and-6-fixes/"
  );

  $dripTitle = "Drip Coffee";
  $dripDesc = "Drip coffee is your basic, industrial, often free, work-place
  coffee. It consists of a sack of grounds, with a pre-determined
  amount of hot water sprayed on top.";
  $drip = array(
    "Best drip coffee makers" => "https://thewirecutter.com/reviews/best-drip-coffee-maker/f",
    "Making the perfect cup of drop coffee..." => "https://www.foodnetwork.com/videos/making-a-perfect-cup-of-coffee-0129414",
    "Keurig is the worst form of drip coffee" => "https://www.kcupbarista.com/2015/07/five-reasons-i-wont-buy-a-keurig/"
  );

  $teaTitle = "Coffee is terrible, how about some tea?";
  $teaDesc = "Tea is okay, too. 🤷🏻‍♂️";
  $tea = array(
    "Some of the bet tea comes from Sri Lanka" => "https://www.cnn.com/travel/article/sri-lanka-tea-experiences/index.html",
    "Instructions for making yummy tea" => "https://www.wikihow.com/Make-Tea",
    "Tea traditions from around the world" => "http://mentalfloss.com/article/72891/15-tea-traditions-around-world"
  );

  // Pull data from POST array IF it's not empty
  if (!empty($_POST)) {

    // Grab data from our POST array & make it easier to reference in the future
    $choices = $_POST['favoriteCoffee'];
    $name = $_POST['inputName'];

  }
?>

  <!DOCTYPE html>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="style/main.css">
  <title>Results | Exercise 1, ITGM-727</title>
  </head>

  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap-4/js/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap-4/js/bootstrap.bundle.min.js"></script>

    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
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
              /*  Give a personalized greeting to the user;
                  $name is defined at top from POST array. */
              echo "<p>Good choice, <strong> {$name} </strong>. Here's a few links to enjoy: ";
            ?>
          </div>

          <?php
          /*  For each value in the $choices array (submitted from multiselect form on previous page),
              if it matches the case, print that section's HTML. */
          foreach ($choices as $value) {

            //$value = array item; switch runs for each item in multiselect array
            switch ($value) {
              case "espresso":
              // ---------------------------------------------------------------
                echo "
                  <div id='espresso'>
                    <h3 class='h5'>{$espressoTitle}</h3>
                    <p>{$espressoDesc}</p>
                    <ul>";

                // Loop through our link arrays set above
                foreach ( $espresso as $key => $value) {
                  echo "<li><a href='{$value}'>{$key}</a></li>";
                }

                echo "</ul><hr></div>";
                break;

              case "latte":
              // ---------------------------------------------------------------
                echo "
                  <div id='latte'>
                    <h3 class='h5'>{$latteTitle}</h3>
                    <p>{$latteDesc}</p>
                    <ul>";

                // Loop through our link arrays set above
                foreach ( $latte as $key => $value) {
                  echo "<li><a href='{$value}'>{$key}</a></li>";
                }

                echo "</ul><hr></div>";
                break;

              case "pourover":
              // ---------------------------------------------------------------
                echo "
                  <div id='pourover'>
                    <h3 class='h5'>{$pouroverTitle}</h3>
                    <p>{$pouroverDesc}</p>
                    <ul>";

                // Loop through our link arrays set above
                foreach ( $pourover as $key => $value) {
                  echo "<li><a href='{$value}'>{$key}</a></li>";
                }

                echo "</ul><hr></div>";
                break;
                break;

              case "drip":
              // ---------------------------------------------------------------
                echo "
                  <div id='drip'>
                    <h3 class='h5'>{$dripTitle}</h3>
                    <p>{$dripDesc}</p>
                    <ul>";

                // Loop through our link arrays set above
                foreach ( $drip as $key => $value) {
                  echo "<li><a href='{$value}'>{$key}</a></li>";
                }

                echo "</ul><hr></div>";
                break;

              case "tea":
                // ---------------------------------------------------------------
                echo "
                  <div id='tea'>
                    <h3 class='h5'>{$teaTitle}</h3>
                    <p>{$teaDesc}</p>
                    <ul>";

                // Loop through our link arrays set above
                foreach ( $drip as $key => $value) {
                  echo "<li><a href='{$value}'>{$key}</a></li>";
                }

                echo "</ul><hr></div>";
                break;

              default:
                break;
            }
          }
          ?>

          <div class="mt-4 mb-4">
            <a href="index.php">Want to go again?</a>
          </div>

        </div>
        <div class="col-md-3"></div>
      </div>
    </div>


  </body>

  </html>
