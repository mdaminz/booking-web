<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Catering</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  <script>
    function calculateTotal() {
      var pax = document.getElementById('pax').value;
      var budgetPerPax = document.getElementById('budgetPerPax').value;

      // Check if both inputs have values
      if (pax && budgetPerPax) {
        var totalBudget = pax * budgetPerPax;

        // Update the hidden input field with the calculated total
        document.getElementById('totalBudgetInput').value = totalBudget.toFixed(2);

        // Display the total budget dynamically
        document.getElementById('totalBudget').innerHTML = "Total Budget: RM" + totalBudget.toFixed(2);
        document.getElementById('totalBudget').style.display = "block"; // Show the total budget

        // Update the total budget value in HTML
        document.getElementById('totalBudgetValue').textContent = 'RM' + totalBudget.toFixed(2);
      } else {
        document.getElementById('totalBudget').style.display = "none"; // Hide the total budget
        document.getElementById('totalBudgetValue').textContent = ''; // Clear the total budget value
      }
    }
  </script>

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <h1>Catering</h1>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="about_us.php">About Us</a></li>
              <li><a href="signIn.php">For Admin</a></li>
              <!-- <li><a href="property-details.html">Property Details</a></li>
                      <li><a href="contact.html" class="active">Contact Us</a></li> -->
              <li><a href="quotation_form.php"><i class="fas fa-file-alt"></i> Request Quotation</a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="#">Home</a> / Logged Out</span>
          <h3>See you Again</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <?php
          // This page lets the user logout.
          // This version uses sessions.
          session_start(); // Access the existing session.

          // If no session variable exists, redirect the user:
          if (!isset($_SESSION['user_id'])) {

            // Need the functions:
            require('includes/login_functions.inc.php');
            redirect_user();
          } else { // Cancel the session:

            $_SESSION = array(); // Clear the variables.
            session_destroy(); // Destroy the session itself.
            setcookie('PHPSESSID', '', time() - 3600, '/', '', 0, 0); // Destroy the cookie.

          }

          // Set the page title and include the HTML header:
          $page_title = 'Logged Out!';

          // Print a customized message:
          echo "<h1>Logged Out!</h1>
<p>You are now logged out!</p>";

          ?>
        </div>
      </div>
    </div>
  </div>

  <footer style="position: absolute; bottom: 0; width: 100%;">
    <div class="container">
      <div class="col-lg-12">
        <p>ISB42503 - Internet Programming
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script>
    // Update the total budget value in HTML
    document.getElementById('totalBudgetInput').addEventListener('input', function() {
      document.getElementById('totalBudgetValue').textContent = 'RM' + this.value;
    });
  </script>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>


</body>

</html>