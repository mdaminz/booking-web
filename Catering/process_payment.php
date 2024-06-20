<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Simulate payment processing delay
    sleep(2); // Simulate a delay for the loading GIF to be visible

    // Get form data
    $cardNumber = $_POST['card_number'];
    $expDate = $_POST['exp_date'];
    $cvv = $_POST['cvv'];
    $cardHolder = $_POST['card_holder'];

    // Simulate payment processing (in a real scenario, you would securely process the payment)
    $paymentSuccessful = true; // Simulate success

    $status = $paymentSuccessful ? 'success' : 'danger';
    $message = $paymentSuccessful ? 'Payment successful!' : 'Payment failed. Please try again.';
    $title = $paymentSuccessful ? 'Payment Successful' : 'Payment Failed';

    echo '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>' . htmlspecialchars($title) . '</title>
  <!-- Include Bootstrap CSS if needed -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
  <style>
    body {
      font-family: "Poppins", sans-serif;
    }
    .container {
      margin-top: 50px;
    }
    .alert {
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    .loading-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .loading-gif {
      width: 100px;
    }
    .page-header {
      background: url("assets/images/page-heading-bg.jpg") no-repeat center center;
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
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      
      z-index: 0;
    }
    .details {
      margin-top: 20px;
      background-color: #ffffff;
      border: 1px solid #dee2e6;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    .details h2 {
      font-size: 1.5em;
      margin-bottom: 20px;
    }
    .details p {
      font-size: 1.1em;
      margin-bottom: 10px;
    }
       .btn-primary {
      background-color: darkorange;
      border: none;
    }
    .btn-primary:hover {
      background-color: orangered;
    }
  </style>
</head>
<body>
  <header class="page-header">
    <div class="container">
      <h1>' . htmlspecialchars($title) . '</h1>
    </div>
  </header>
  <div id="loading" class="loading-container">
    <img src="assets/images/loading.gif" class="loading-gif" alt="Loading...">
  </div>
  <div id="result" class="container" style="display:none;">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="alert alert-' . htmlspecialchars($status) . '" role="alert">
          ' . htmlspecialchars($message) . '
        </div>
        <div class="details">
          <h2>Payment Details</h2>
          <p><strong>Card Number:</strong> ' . htmlspecialchars($cardNumber) . '</p>
          <p><strong>Expiration Date:</strong> ' . htmlspecialchars($expDate) . '</p>
          <p><strong>CVV:</strong> ' . htmlspecialchars($cvv) . '</p>
          <p><strong>Card Holder Name:</strong> ' . htmlspecialchars($cardHolder) . '</p>
          <a href="index.php" class="btn btn-primary mt-4" >Back to Home</a>
        </div>
      </div>
    </div>
  </div>
  <script>
    // Simulate a delay for loading
    window.onload = function() {
      setTimeout(function() {
        document.getElementById("loading").style.display = "none";
        document.getElementById("result").style.display = "block";
      }, 2000);
    };
  </script>
</body>
</html>';
} else {
    // Redirect if accessed directly without POST method
    header('Location: payment.php');
    exit;
}
?>
