<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $cardNumber = $_POST['card_number'];
    $expDate = $_POST['exp_date'];
    $cvv = $_POST['cvv'];
    $cardHolder = $_POST['card_holder'];

    // Simulate payment processing (in a real scenario, you would securely process the payment)
    $paymentSuccessful = true; // Simulate success

    if ($paymentSuccessful) {
        // Payment success
        echo '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Successful</title>
  <!-- Include Bootstrap CSS if needed -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3 mt-5">
        <div class="alert alert-success" role="alert">
          Payment successful!
        </div>
      </div>
    </div>
  </div>
</body>
</html>';
    } else {
        // Payment failed
        echo '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Failed</title>
  <!-- Include Bootstrap CSS if needed -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3 mt-5">
        <div class="alert alert-danger" role="alert">
          Payment failed. Please try again.
        </div>
      </div>
    </div>
  </div>
</body>
</html>';
    }
} else {
    // Redirect if accessed directly without POST method
    header('Location: payment.php');
    exit;
}
?>
