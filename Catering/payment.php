<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Page</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Page</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!---->
  <style>
  
    .container {
      margin-top: 50px;
      
    }
    .card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
    }
    .card-header {
      background-color: black;
      color: white;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
      text-align: center;
    }
    .btn-primary {
      background-color: darkorange;
      border: none;
    }
    .btn-primary:hover {
      background-color: orangered;
    }
    .form-control:focus {
      box-shadow: none;
      border-color: #007bff;
    }
    .page-header{
      background: url('assets/images/page-heading-bg.jpg') no-repeat center center;
      background-size: cover;
      color: white;
      padding: 60px 0;
      text-align: center;
      margin-bottom: 20px;
      position: relative;
    }
    .page-header h1 {
      position: relative;
      z-index: 1;
    }
    .page-header::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      
      z-index: 0;
    }
  </style>
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

  <header class="page-header">
    <div class="container">
      <h1 style="color:#fbfaf2;">Please enter your payment details</h1>
    </div>
  </header>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h2 class="mb-0" style="color: #fbfaf2;">Payment Details</h2>
          </div>
          <div class="card-body">
            <form action="process_payment.php" method="post">
              <div class="form-group">
                <label for="card-number">Card Number</label>
                <input type="text" class="form-control" id="card-number" name="card_number" required>
              </div>
              <div class="form-group">
                <label for="exp-date">Expiration Date</label>
                <input type="text" class="form-control" id="exp-date" name="exp_date" placeholder="MM/YYYY" required>
              </div>
              <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" class="form-control" id="cvv" name="cvv" required>
              </div>
              <div class="form-group">
                <label for="card-holder">Card Holder Name</label>
                <input type="text" class="form-control" id="card-holder" name="card_holder" required>
              </div>
              <button class="btn btn-primary btn-block mt-4" type="submit">Pay Now</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Include Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


      background-color: #f8f9fa;
      font-family: Arial, sans-serif;
    }
    .container {
      margin-top: 50px;
    }
    .card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
    }
    .card-header {
      background-color: black;
      color: white;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
      text-align: center;
    }
    .btn-primary {
      background-color: darkorange;
      border: none;
    }
    .btn-primary:hover {
      background-color: orangered;
    }
    .form-control:focus {
      box-shadow: none;
      border-color: #007bff;
    }
    .page-header {
      background: url('assets/images/page-heading-bg.jpg') no-repeat center center;
      background-size: cover;
      color: white;
      padding: 60px 0;
      text-align: center;
      margin-bottom: 20px;
      position: relative;
    }
    .page-header h1 {
      position: relative;
      z-index: 1;
    }
    .page-header::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      
      z-index: 0;
    }
  </style>
</head>
<body>
  <header class="page-header">
    <div class="container">
      <h1>Please enter your payment details</h1>
    </div>
  </header>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h2 class="mb-0">Payment Details</h2>
          </div>
          <div class="card-body">
            <form action="process_payment.php" method="post">
              <div class="form-group">
                <label for="card-number">Card Number</label>
                <input type="text" class="form-control" id="card-number" name="card_number" required>
              </div>
              <div class="form-group">
                <label for="exp-date">Expiration Date</label>
                <input type="text" class="form-control" id="exp-date" name="exp_date" placeholder="MM/YYYY" required>
              </div>
              <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" class="form-control" id="cvv" name="cvv" required>
              </div>
              <div class="form-group">
                <label for="card-holder">Card Holder Name</label>
                <input type="text" class="form-control" id="card-holder" name="card_holder" required>
              </div>
              <button class="btn btn-primary btn-block mt-4" type="submit">Pay Now</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Include Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

