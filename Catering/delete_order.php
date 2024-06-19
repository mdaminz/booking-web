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
  <!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
</head>

<body>





  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="" class="logo">
              <h1>Catering</h1>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
                        <li><a href="index.php" class="active">Home</a></li>
                        <li><a href="about_us.php">About Us</a></li>
                        <?php
                        session_start();
                        if (isset($_SESSION['user_id'])) {
                            // User is logged in, show user's first name and last name
                            echo '<li><a href="quotation_form.php">Request Quotation</a></li>';
                            echo '<li><a>Hi, ' . $_SESSION['first_name'] . ' ' . $_SESSION['last_name'] . '</a></li>';
                            echo '<li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Sign Out</a></li>';
                        } else {
                            // User is not logged in, show Sign In link
                            echo '<li><a href="signIn.php">Sign In</a></li>';
                            echo '<li><a href="quotation_form.php"><i class="fas fa-file-alt"></i> Request Quotation</a></li>';
                        }
                        ?>
                        <!-- <li><a href="contact.html">Contact Us</a></li> -->
                        <!-- <li><a href="quotation_form.php"><i class="fas fa-file-alt"></i> Request Quotation</a></li>
                        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Sign Out</a></li> -->
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
          <span class="breadcrumb"><a href="#">Admin</a> / Delete</span>
          <h3>Delete Order</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="section properties">
    <div class="container">
      <h3>Delete Order</h3><br><br>
      <?php

      // Check for a valid user ID, through GET or POST:
      if ((isset($_GET['id'])) && (is_numeric($_GET['id']))) { // From view_users.php
        $id = $_GET['id'];
      } elseif ((isset($_POST['id'])) && (is_numeric($_POST['id']))) { // Form submission.
        $id = $_POST['id'];
      } else { // No valid ID, kill the script.
        echo '<p class="error">This page has been accessed in error.</p>';
        exit();
      }

      require('../mysqli_connect_catering.php');

      // Check if the form has been submitted:
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if ($_POST['sure'] == 'Yes') { // Delete the record.

          // Make the query:
          $q = "DELETE FROM orders WHERE orders_id=$id LIMIT 1";
          $r = @mysqli_query($dbc, $q);
          if (mysqli_affected_rows($dbc) == 1) { // If it ran OK.

            // Print a message:
            echo '<p">The user has been deleted.</p>';
          } else { // If the query did not run OK.
            echo '<p class="error">The user could not be deleted due to a system error.</p>'; // Public message.
            echo '<p>' . mysqli_error($dbc) . '<br />Query: ' . $q . '</p>'; // Debugging message.
          }
        } else { // No confirmation of deletion.
          echo '<p>The user has NOT been deleted.</p>';
        }
      } else { // Show the form.

        // Retrieve the user's information:
        $q = "SELECT CONCAT(contact_person, ', ', contact_number) FROM orders WHERE orders_id=$id";
        $r = @mysqli_query($dbc, $q);

        if (mysqli_num_rows($r) == 1) { // Valid user ID, show the form.

          // Get the user's information:
          $row = mysqli_fetch_array($r, MYSQLI_NUM);

          // Display the record being deleted:
          echo "<h4>Name : $row[0]</h4></br>
		Are you sure you want to delete this user?";

          // Create the form:
          echo '<form action="delete_order.php" method="post">
	<input type="radio" name="sure" value="Yes" /> Yes 
	<input type="radio" name="sure" value="No" checked="checked" /> No
	<input type="submit" class="btn btn-danger" name="submit" value="Submit" />
	<input type="hidden" name="id" value="' . $id . '" />
	</form>';
        } else { // Not a valid user ID.
          echo '<p class="error">This page has been accessed in error.</p>';
        }
      } // End of the main submission conditional.

      mysqli_close($dbc);

      ?>

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
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

</body>

</html>