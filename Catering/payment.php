<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Page</title>
  <!-- Include Bootstrap CSS if needed -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3 mt-5">
        <h2 class="text-center mb-4">Payment Details</h2>
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
</body>
</html>
