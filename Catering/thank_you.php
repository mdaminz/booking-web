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
  <?php
  // Check for form submission:


  $errors = array(); // Initialize an error array.

  // Check for a Occasion:
  if (empty($_POST['occasion'])) {
    $errors[] = 'You Forgot to Select your Occasion';
  } else {
    $occasion = trim($_POST['occasion']);
    $occasion = $_POST['occasion'];
  }

  // Check for a Event Date:
  if (empty($_POST['event_date'])) {
    $errors[] = 'You Forgot to Enter your Event Date.';
  } else {
    $event_date = $_POST['event_date'];
    $event_date = trim($_POST['event_date']);
  }

  // Check for a Event Time:
  if (empty($_POST['event_time'])) {
    $errors[] = 'You Forgot to Enter your Event Time.';
  } else {
    $event_time = trim($_POST['event_time']);
  }

  // Check for a Location:
  if (empty($_POST['location'])) {
    $errors[] = 'You Forgot to Select your Location.';
  } else {
    $location = trim($_POST['location']);
  }

  // Check for a Event Address:
  if (empty($_POST['event_address'])) {
    $errors[] = 'You Forgot to Enter your Event Address.';
  } else {
    $event_address = trim($_POST['event_address']);
  }

  // Check for a budget Per_Pax:
  if (empty($_POST['budget_per_pax'])) {
    $errors[] = 'You Forgot to Enter your Budget Per Pax.';
  } else {
    $budget_per_pax = trim($_POST['budget_per_pax']);
  }

  // Check for a Number of Pax:
  if (empty($_POST['number_of_pax'])) {
    $errors[] = 'You Forgot to Enter your Number of Pax.';
  } else {
    $number_of_pax = trim($_POST['number_of_pax']);
  }



  // Check for a Contact Person:
  if (empty($_POST['contact_person'])) {
    $errors[] = 'You Forgot to Enter your Contact Person.';
  } else {
    $contact_person = trim($_POST['contact_person']);
  }

  // Check for a Contact:
  if (empty($_POST['contact_number'])) {
    $errors[] = 'You Forgot to Enter your Contact Number.';
  } else {
    $contact_number = trim($_POST['contact_number']);
  }

  // Check for a Company Name:
  if (empty($_POST['company_name'])) {
    $errors[] = 'You Forgot to Enter your Company Name.';
  } else {
    $company_name = trim($_POST['company_name']);
  }

  // Check for a Email:
  if (empty($_POST['email'])) {
    $errors[] = 'You Forgot to Enter your Email.';
  } else {
    $email = trim($_POST['email']);
  }

  // // Check for a sub newletter:
  // if (empty($_POST['sub_newsletter'])) {
  // } else {
  //   $sub_newsletter = trim($_POST['sub_newsletter']);
  // }

  // Check for a Promo Code:
  if (empty($_POST['promo_code'])) {
    $promo_code = trim($_POST['promo_code']);
    $_POST["promo_code"] = "No Promo Code";
  } else if ($_POST['promo_code'] !== "CATERINGPADU") {
    $errors[] = 'Invalid Promo Code';
  } else {
    $promo_code = trim($_POST['promo_code']);
  }

  // Check for a Special Request:
  if (empty($_POST['special_request'])) {
    $special_request = trim($_POST['special_request']);
    $_POST["special_request"] = "No Special Request";
  } else {
    $special_request = trim($_POST['special_request']);
  }

  // Check for a Email:
  if (empty($_POST['totalBudget'])) {
    $errors[] = 'Please Re-enter your Number of Pax.';
  } else {
    $totalBudget = trim($_POST['totalBudget']);
  }

  $sub_newsletter = trim($_POST['sub_newsletter']);
  // $special_request = trim($_POST['special_request']);
  // $promo_code = trim($_POST['promo_code']);
  // $totalBudget = trim($_POST['totalBudget']);



  if (empty($errors)) { // If everything's OK.

    // Register the user in the database...

    require('../mysqli_connect_catering.php'); // Connect to the db.

    // Make the query:
    $q = "INSERT INTO orders (occasion, event_date, event_time, location, event_address, budget_per_pax, number_of_pax, totalBudget, contact_person, contact_number, company_name, email, special_request, promo_code, sub_newsletter)
  VALUES ('$occasion', '$event_date','$event_time', '$location', '$event_address', '$budget_per_pax', '$number_of_pax', '$totalBudget', '$contact_person', '$contact_number', '$company_name', '$email', '$special_request', '$promo_code', '$sub_newsletter')";
    $r = mysqli_query($dbc, $q); // Run the query.


    if ($r) { // If it ran OK.

      // Print a message:
      // Print a thank you message and display submitted data:
      echo '<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="#">Form</a> / Order Comfirmation</span>
          <h3>Order Comfirmation !</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div style="width: 500px;" class="section-heading">
            <h6 style="text-align: center;">| Thank You !</h6><br><br>
            <h4 style="text-align: center;">Thank You for Your Enquiry</h4>
            <br>
            <h4 style="text-align: center;">We Have Emailed You a Copy of Your Enquiry</h4>
            <br>
            <h4 style="text-align: center;">We will contact You Shortly</h4>
          </div>
        </div>
        <div class="col-lg-6">
        <form id="contact-form" action="" method="post">
        <div class="row">
          <h4>Event Details</h4><br><br>
          <div class="col-lg-12">
            <fieldset>
              <label>Occasion : ' . $_POST['occasion'] . '</label>
            </fieldset>
          </div>
          <div class="col-lg-12">
            <fieldset>
              <label>Event Date : ' . $_POST['event_date'] . '</label>
            </fieldset>
          </div>
          <div class="col-lg-12">
            <fieldset>
              <label>Event Time : ' . $_POST['event_time'] . '</label>
            </fieldset>
          </div>
          <div class="col-lg-12">
            <fieldset>
              <label>Venue : ' . $_POST['event_address'] . '</label>
            </fieldset>
          </div>
          <br><br>
          <h4>Contact Details</h4><br><br>
          <div class="col-lg-12">
            <fieldset>
              <label>Company : ' . $_POST['company_name'] . '</label>
            </fieldset>
          </div>
          <div class="col-lg-12">
            <fieldset>
              <label>Contact Person : ' . $_POST['contact_person'] . '</label>
            </fieldset>
          </div>
          <div class="col-lg-12">
            <fieldset>
              <label>Contact Number : ' . $_POST['contact_number'] . '</label>
            </fieldset>
          </div>
          <div class="col-lg-12">
            <fieldset>
              <label>Email : ' . $_POST['email'] . '</label>
            </fieldset>
          </div>
          <br><br>
          <h4>Order Details</h4><br><br>
          <div class="col-lg-12">
            <fieldset>
              <label>Budget per Pax : RM ' . $_POST['budget_per_pax'] . '.00</label>
            </fieldset>
          </div>
          <div class="col-lg-12">
            <fieldset>
              <label>Number of Pax : ' . $_POST['number_of_pax'] . '</label>
            </fieldset>
          </div>
          <div class="col-lg-12">
            <fieldset>
              <label>Promo Code : ' . $_POST['promo_code'] . '</label>
            </fieldset>
          </div>
          <div class="col-lg-12">
            <fieldset>
              <label>Total Budget : RM ' . $_POST['totalBudget'] . '</label>
            </fieldset>
          </div>
          <br><br>
          <h4>Remarks</h4><br><br>
          <div class="col-lg-12">
            <fieldset>
              <label>' . $_POST['special_request'] . '</label>
            </fieldset>
          </div>
        </div>
      </form>
        </div>
      </div>
    </div>
  </div>';

      echo '<footer>
        <div class="container">
          <div class="col-lg-12">
            <p>ISB42503 - Internet Programming</p>
          </div>
        </div>
      </footer>';

      echo '<script>
        // Update the total budget value in HTML
        document.getElementById(\'totalBudgetInput\').addEventListener(\'input\', function() {
          document.getElementById(\'totalBudgetValue\').textContent = \'RM\' + this.value;
        });
      </script>
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/js/isotope.min.js"></script>
      <script src="assets/js/owl-carousel.js"></script>
      <script src="assets/js/counter.js"></script>
      <script src="assets/js/custom.js"></script>';
    } else { // If it did not run OK.

      // Public message:
      echo '<h1>System Error</h1>
  <p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>';

      // Debugging message:
      echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
    } // End of if ($r) IF.

    mysqli_close($dbc); // Close the database connection.


    exit();
  } else { // Report the errors.

    echo '<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="#">Form</a> / Order Comfirmation</span>
          <h3>Order Comfirmation !</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div style="width: 500px;" class="section-heading">
            <h6 style="text-align: center;">| Error !</h6><br><br>
            <h4 style="text-align: center;">There Was an Error Processing your Enquiry</h4>
            <br>
            <h4 style="text-align: center;">Please Try Again</h4>
            
            
          </div>
        </div>
        <div class="col-lg-6">
        <form id="contact-form" action="" method="post">
        <div class="row">
          <h4>Error !</h4><br><br>
          <div class="col-lg-12">
            <fieldset>
            <p class="error">The following error(s) occurred:<br />';
    foreach ($errors as $msg) { // Print each error.
      echo " - $msg<br />\n";
    }

    echo '</fieldset>
          </div>
        </div>
      </form>
        </div>
      </div>
    </div>
  </div>';

    echo '<footer>
        <div class="container">
          <div class="col-lg-12">
            <p>ISB42503 - Internet Programming</p>
          </div>
        </div>
      </footer>';

    echo '<script>
        // Update the total budget value in HTML
        document.getElementById(\'totalBudgetInput\').addEventListener(\'input\', function() {
          document.getElementById(\'totalBudgetValue\').textContent = \'RM\' + this.value;
        });
      </script>
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/js/isotope.min.js"></script>
      <script src="assets/js/owl-carousel.js"></script>
      <script src="assets/js/counter.js"></script>
      <script src="assets/js/custom.js"></script>';
  } // End of if (empty($errors)) IF.

  ?>






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