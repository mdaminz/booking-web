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
          <span class="breadcrumb"><a href="#">Home</a> / About Us</span>
          <h3>About us</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div style="width: 95%;" class="section-heading">
            <h6>| About Us</h6><br><br>
            <h4>The CATERING</h4>
            <br>
            <li style="text-align: justify;">Welcome to CATERING, where culinary excellence meets impeccable service to elevate your events to unforgettable experiences. At CATERING, we believe that every occasion is an opportunity to create lasting
              memories, and we are dedicated to making your events truly special with our exceptional catering services.</li><br>

            <h4>Our Passion for Culinary Excellence</h4>
            <br>
            <li style="text-align: justify;">At the heart of CATERING is a team of passionate and skilled culinary professionals committed to crafting exquisite dishes that tantalize the taste buds. Our chefs bring creativity, expertise, and a commitment to quality to every dish they create.
              From the finest ingredients to innovative presentation, we ensure that each bite is a delightful experience.</li><br>

            <h4>Tailored Menus for Every Occasion
            </h4>
            <br>
            <li style="text-align: justify;">Whether you're planning an intimate gathering, a corporate event, or a grand celebration, our diverse menu options cater to every palate and dietary preference. We work closely with our clients to customize menus that suit the theme and vision of their events.
              From mouthwatering appetizers to decadent desserts, our culinary offerings are designed to impress.</li><br>

            <h4>Impeccable Service with a Smile</h4>
            <br>
            <li style="text-align: justify;">At CATERING, we understand that exceptional service is just as important as outstanding food. Our team of professional and courteous staff is dedicated to ensuring that every aspect of your event runs seamlessly.
              From setup to cleanup, we take care of the details, allowing you to relax and enjoy the festivities with your guests.</li><br>

            <h4>Quality Ingredients, Sustainable Practices</h4>
            <br>
            <li style="text-align: justify;">We are committed to using the highest quality, locally sourced ingredients to create dishes that not only taste incredible but also reflect our dedication to sustainability.
              Our eco-friendly practices extend to our packaging and waste management, as we strive to minimize our environmental impact.</li><br>

            <h4>Experience the CATERING Difference</h4>
            <br>
            <li style="text-align: justify;">With years of experience in the catering industry, CATERING has earned a reputation for excellence.
              Whether it's a wedding, corporate event, or social gathering, we bring a combination of passion, professionalism, and attention to detail to every project. Our goal is to exceed your expectations and leave a lasting impression on you and your guests.
            </li><br>
            <li style="text-align: justify;">At CATERING, we don't just provide food; we create culinary experiences that elevate your events to new heights. Contact us to discuss your upcoming event, and let us bring our expertise to your table.
              Experience the CATERING difference and make your next celebration truly extraordinary.</li>
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
          <img style="margin-top: 120px; margin-left: 20px;" src="https://www.sunjaya.com.my/wp-content/uploads/2019/11/Wedding-Catering-Fusion.jpg" alt=""><br><br><br>
          <img style="margin-left: 20px;" src="https://www.sunjaya.com.my/wp-content/uploads/2019/11/Wedding-Catering-Fusion.jpg" alt=""><br><br><br>
          <img style="margin-left: 20px;" src="https://www.sunjaya.com.my/wp-content/uploads/2019/11/Wedding-Catering-Fusion.jpg" alt=""><br><br><br>
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