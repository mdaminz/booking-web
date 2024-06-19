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
      var promoCode = document.getElementById('promoCode').value;

      // Check if both inputs have values
      if (pax && budgetPerPax) {
        var totalBudget = pax * budgetPerPax;

        // Check if promo code is entered and is correct
        if (promoCode && promoCode.toUpperCase() === "CATERINGPADU") {
          // Apply a 10% discount
          totalBudget *= 0.9;
        }

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
  <!-- <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div> -->
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
          <span class="breadcrumb"><a href="#">Home</a> / Basic Bento A</span>
          <h3>Basic Bento A</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div style="width: 500px;" class="section-heading">
            <h6>| Menu Information</h6><br><br>
            <h4>Basic Bento A</h4>
            <br>
            <li>Price: RM 12 / Pax</li>
            <li>Min Pax: 20 Pax</li>
            <li>Serving Style: Pre-Packed Meals / Lunchbox</li>
            <li>Menu Type: Malay</li>
            <li>Recommended For: Breakfast/ Tea, Lunch/ Dinner</li>
            <li>Setup Info: Food Delivery Only</li>
            <br>
            <h4>Menu Description</h4>
            <br>
            <li>Bento Set</li>
            <br>
            <h4>Bento Item</h4>
            <br>
            <li>Ayam Kicap Pedas Nasi Kerabu</li>
          </div>

          <!-- <div class="row">
            <div class="col-lg-12">
              <div class="item phone">
                <img src="assets/images/phone-icon.png" alt="" style="max-width: 52px;">
                <h6>010-020-0340<br><span>Phone Number</span></h6>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item email">
                <img src="assets/images/email-icon.png" alt="" style="max-width: 52px;">
                <h6>info@villa.co<br><span>Business Email</span></h6>
              </div>
            </div>
          </div> -->




        </div>
        <div class="col-lg-6">
          <form id="contact-form" action="thank_you.php" method="post">
            <div class="row">
              <h4>Event Details</h4><br><br>
              <div class="col-lg-12">
                <fieldset>
                  <label>Occasion</label>
                  <?php
                  $occasions = array(1 => 'Chinese New Year', 'Breakfast / Tea', 'Lunch / Dinner', 'Aqiqah', 'Baby Full Moon', 'Birthday', 'Corporate / Seminar', 'Wedding', 'Christmas', 'Ramadan / Raya');

                  echo '<select class="select-input" name = "occasion">';
                  foreach ($occasions as $key => $value) {
                    echo "<option value=\"$value\">$value</option>\n";
                  }
                  echo '</select>';
                  ?>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label>Event Date</label>
                  <input type="date" name="event_date" placeholder="Date" onfocus="(this.type='date')" onblur="(this.type='text')">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label>Event Time</label>
                  <input type="time" name="event_time" onfocus="(this.type='time')" onblur="(this.type='text')" placeholder="Event Time" autocomplete="on">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label>Location</label>
                  <?php
                  $locations = array(1 => 'Kuala Lumpur', 'Selangor');

                  echo '<select class="select-input" name = "location">';
                  foreach ($locations as $key => $value) {
                    echo "<option value=\"$value\">$value</option>\n";
                  }
                  echo '</select>';
                  ?>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label>Event Address</label>
                  <textarea name="event_address" placeholder="Event Address"></textarea>
                </fieldset>
              </div>
              <!-- <div class="col-lg-6">
                <fieldset>
                  <label for="pax">Number of Pax:</label>
                  <input type="number" id="pax" name="pax" min="1" oninput="calculateTotal()" placeholder="Budget Per Pax" required>
                </fieldset>
              </div> -->
              <div class="col-lg-6">
                <fieldset>
                  <label for="budgetPerPax">Budget Per Pax:</label>
                  <input type="number" id="budgetPerPax" name="budget_per_pax" min="0.01" step="0.01" value="12" oninput="calculateTotal()">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="pax">Number of Pax:</label>
                  <input type="number" id="pax" name="number_of_pax" min="1" oninput="checkPaxValidity()" required>
                  <p id="paxErrorMessage" style="color: red; display: none;">Minimum 20 Pax required.</p>
                </fieldset>
                </fieldset>
                <!-- Hidden input field to store the calculated total -->
                <input type="hidden" id="totalBudgetInput" name="totalBudget">

                <!-- Display the total budget dynamically -->
                <div id="totalBudget" style="display: none;"></div>

                <!-- Use the total budget value in HTML -->
                <!-- <p>The total budget can be used here: <span id="totalBudgetValue"></span></p> -->
              </div>
            </div>
            <br>
            <div class="row">
              <h4>Contact Details</h4><br><br>
              <div class="col-lg-6">
                <fieldset>
                  <label>Contact Person</label>
                  <input type="text" name="contact_person" placeholder="Contact Person">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label>Contact</label>
                  <input type="text" name="contact_number" placeholder="Contact Number">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label>Company Name</label>
                  <input type="text" name="company_name" placeholder="Company Name">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label>Email</label>
                  <input type="text" name="email" placeholder="Email">
                </fieldset>
              </div>
            </div>
            <br>
            <div class="row">
              <h4>Other Details</h4><br><br>
              <div class="col-lg-12">
                <fieldset>
                  <label>Special Request</label>
                  <textarea name="special_request" placeholder="Special Request ..."></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label>Promo Code</label>
                  <input type="text" id="promoCode" name="promo_code" placeholder="Promo Code" oninput="calculateTotal()">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="newsletterCheckbox">
                    <input type="hidden" id="sub_newsletter" name="sub_newsletter" value="0">
                    <input style="width: 15px; height: 15px; margin-right: 10px;" type="checkbox" id="newsletterCheckbox" onclick="updateNewsletterSubscription()">Subscribe to Our Newsletter
                  </label>
                </fieldset>
              </div>
              <br>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" name="submit" id="form-submit" class="orange-button">submit for FREE Quote</button>
                </fieldset>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>ISB42503 - Internet Programming
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script>
    function checkPaxValidity() {
      var paxInput = document.getElementById("pax");
      var paxErrorMessage = document.getElementById("paxErrorMessage");

      var paxValue = parseInt(paxInput.value);

      if (paxValue < 20) {
        paxErrorMessage.style.display = "block";
        // You can optionally disable the submit button or take other actions
      } else {
        paxErrorMessage.style.display = "none";
        calculateTotal(); // Recalculate total when pax is valid
      }
    }
  </script>

  <script>
    function updateNewsletterSubscription() {
      var checkbox = document.getElementById("newsletterCheckbox");
      var hiddenInput = document.getElementById("sub_newsletter");

      hiddenInput.value = checkbox.checked ? 1 : 0;
    }
  </script>
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