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
            <a href="" class="logo">
              <h1>Catering</h1>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="order_list.php" class="active">Order List</a></li>


              <!-- <li><a href="contact.html">Contact Us</a></li> -->
              <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Sign Out</a></li>
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
          <span class="breadcrumb"><a href="#">Admin</a> / Order List</span>
          <h3>Order List</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="section properties">
    <div class="container">
      <h3>Orders Table</h3><br><br>
      <?php
      require('../mysqli_connect_catering.php');

      // Define the query:
      $q = "SELECT orders_id, contact_person, contact_number, number_of_pax, location, DATE_FORMAT(event_date, '%M %d, %Y') AS rd, orders_id FROM orders ORDER BY orders_id ASC";
      $r = @mysqli_query($dbc, $q);

      // Count the number of returned rows:
      $num = mysqli_num_rows($r);

      if ($num > 0) { // If it ran OK, display the records. 

        // Print how many users there are:
        echo "<p>There are currently $num orders.</p>\n";

        // Table header:
        echo '<table class="table" align="center" cellspacing="3" cellpadding="3" width="100%" style="text-align: center;">
          <tr>
            <td align="center"><b>Order Id</b></td>
            <td align="center"><b>Contact Person</b></td>
            <td align="center"><b>Contact Number</b></td>
            <td align="center"><b>Number of Pax</b></td>
            <td align="center"><b>Event Date</b></td>
            <td align="center"><b>Location</b></td>
            <td align="center"><b>Action</b></td>
          </tr>';

        // Fetch and print all the records:
        while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
          echo
          '<tr>
            <td align="center">' . $row['orders_id'] . '</td>
            <td align="center">' . $row['contact_person'] . '</td>
            <td align="center">' . $row['contact_number'] . '</td>
            <td align="center">' . $row['number_of_pax'] . '</td>
            <td align="center">' . $row['rd'] . '</td>
            <td align="center">' . $row['location'] . '</td>
            <td align="center"><a style="color: red;" href="delete_order.php?id=' . $row['orders_id'] . '">Delete</a></td>
		      </tr>';
        }

        echo '</table>';
        mysqli_free_result($r); // Free memory associated with $r	

      } else { // If no records were returned.
        echo '<p class="error">There are currently no registered users.</p>';
      }

      mysqli_close($dbc); // Close database connection

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