<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <title>Catering - Register</title>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="stylesheet" href="assets/css/styles.css">
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
              <li><a href="signIn.php">Sign In</a></li>
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
          <span class="breadcrumb"><a href="#">Home</a> / Register</span>
          <h3>CREATE YOUR ACCOUNT</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div style="width: 500px;" class="section-heading">
            <h6>| Information</h6><br><br>
            <h4>The CATERING</h4>
            <br>
            <li style="text-align: justify;">Welcome to CATERING, where culinary excellence meets impeccable service to elevate your events to unforgettable experiences. At CATERING, we believe that every occasion is an opportunity to create lasting memories, and we are dedicated to making your events truly special with our exceptional catering services.</li>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="item phone">
                <img src="assets/images/phone-icon.png" alt="" style="max-width: 52px;">
                <h6>010-020-0340<br><span>Phone Number</span></h6>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item email">
                <img src="assets/images/email-icon.png" alt="" style="max-width: 52px;">
                <h6>catering@service.co<br><span>Business Email</span></h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <form id="contact-form" action="register.php" method="post">
            <div class="row">
              <h4>Register</h4><br><br>
              <div class="col-lg-12">
                <fieldset>
                  <label>First Name</label>
                  <input type="text" name="first_name" placeholder="First Name">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label>Last Name</label>
                  <input type="text" name="last_name" placeholder="Last Name">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label>Email</label>
                  <input type="email" name="email" placeholder="Email">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label>Password</label>
                  <input type="password" name="password" placeholder="Password">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="role" value="user" hidden>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button style="width: 100%;" type="submit" name="submit" id="form-submit" class="orange-button">Register</button>
                </fieldset>
              </div>
              <br>
              <br>
              <div class="col-lg-12 div-changedir">
                <fieldset>
                  <label>Already have an account? <a href="login.php">Log In</a></label>
                </fieldset>
              </div>
            </div>
            <br>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>ISB42503 - Internet Programming</p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

</body>
</html>


<?php
// Include the database connection file
require('mysqli_connect_catering.php'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = array(); // Initialize an error array.

    // Check for first name:
    if (empty($_POST['first_name'])) {
        $errors[] = 'You forgot to enter your first name.';
    } else {
        $first_name = mysqli_real_escape_string($dbc, trim($_POST['first_name']));
    }

    // Check for last name:
    if (empty($_POST['last_name'])) {
        $errors[] = 'You forgot to enter your last name.';
    } else {
        $last_name = mysqli_real_escape_string($dbc, trim($_POST['last_name']));
    }

    // Check for an email address:
    if (empty($_POST['email'])) {
        $errors[] = 'You forgot to enter your email address.';
    } else {
        $email = mysqli_real_escape_string($dbc, trim($_POST['email']));
    }

    // Check for a password:
    if (empty($_POST['password'])) {
        $errors[] = 'You forgot to enter your password.';
    } else {
        $password = mysqli_real_escape_string($dbc, trim($_POST['password']));
        // Check password strength
        if (strlen($password) < 8 || !preg_match('/[0-9]/', $password)) {
            $errors[] = 'Your password must be at least 8 characters long and include at least one number and one special character.';
        }
    }

    // Check for role:
    if (empty($_POST['role'])) {
        $errors[] = 'You forgot to select a role.';
    } else {
        $role = mysqli_real_escape_string($dbc, trim($_POST['role']));
    }

    // Check if email already exists:
    $q = "SELECT user_id FROM users WHERE email='$email'";
    $r = @mysqli_query($dbc, $q);
    if (mysqli_num_rows($r) > 0) {
        $errors[] = 'The email address is already registered. Please use a different email address.';
    }

    if (empty($errors)) { // If everything's OK.

        // Register the user in the database...

        // Make the query:
        $q = "INSERT INTO users (first_name, last_name, email, password, role) VALUES ('$first_name', '$last_name', '$email', '$password', '$role')";
        $r = @mysqli_query($dbc, $q); // Run the query.
        if ($r) { // If it ran OK.

            // Print a message:
            echo '<h1>Thank you!</h1>
            <p>You are now registered.</p><p><br /></p>';

        } else { // If it did not run OK.

            // Public message:
            echo '<h1>System Error</h1>
            <p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>';

            // Debugging message:
            echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
        } // End of if ($r) IF.

        mysqli_close($dbc); // Close the database connection.

        // Include the footer and quit the script:
        
        exit();

    } else { // Report the errors.

        echo '<h1>Error!</h1>
        <p class="error">The following error(s) occurred:<br />';
        foreach ($errors as $msg) { // Print each error.
            echo " - $msg<br />\n";
        }
        echo '</p><p>Please try again.</p><p><br /></p>';

    } // End of if (empty($errors)) IF.
} // End of the main Submit conditional.
?>
