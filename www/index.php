<?php

/**
 * Exercise 1, Unit 3-4, ITGM-727
 * @author Richard Baker, rbaker22@student.scad.edu
 *
 * @assignment
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
 * @short desc
 * Form on this page collects interests in a multiselect, and submits values to
 * return.php.
 *
 * @dependencies
 * Bootstrap @ https://getbootstrap.com
 *
 */
?>

  <!DOCTYPE html>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="style/main.css">
  <title>Exercise 1, ITGM-727</title>
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

          <!--
          FORM -->
          <form action="return.php" method="post">
            <div class="text-center mt-5">
              <h1 class="emoji mb-0">☕️</h1>
              <h1 class="h3">Coffee Talk</h1>
            </div>

            <!-- Pick a topic -->
            <div class="form-group mt-5">
              <label for="selectFavoriteCoffee">Choose your favorite types of coffee:</label>
              <select multiple size="5" id="selectFavoriteCoffee" class="form-control form-control-lg" name="favoriteCoffee[]" required>
                <option value="espresso">Espresso</option>
                <option value="latte">Latte or Cappuccino</option>
                <option value="pourover">Pour over</option>
                <option value="drip">Drip coffee</option>
                <option value="tea">Coffee is terrible, how about some tea?</option>
              </select>
              <div class="invalid-feedback">Please select your favorite type of coffee.</div>
            </div>

            <!-- Give us your name -->
            <div class="form-group">
              <label for="inputName">Name</label>
              <input type="text" name="inputName" class="form-control" required>
              <div class="invalid-feedback">Please tell us your name.</div>
            </div>

            <!-- Submit -->
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Go!</button>
          </form>

        </div>
        <div class="col-md-3"></div>
      </div>
    </div>


  </body>

  </html>
