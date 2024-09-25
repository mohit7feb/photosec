<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Photosec</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- fonts awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <div class="custom_menu-btn">
          <button onclick="openNav()">
            <span class="s-1"> </span>
            <span class="s-2"> </span>
            <span class="s-3"> </span>
          </button>
        </div>
        <div id="myNav" class="overlay">
          <div class="menu_btn-style ">
            <button onclick="closeNav()">
              <span class="s-1"> </span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>
          </div>
          <div class="overlay-content">
            <a  href="index.php">
              Home
            </a>
            <a class="" href="about.php">
              About
            </a>
            <a class="" href="portfolio.php">
              Portfolio
            </a>
            <a class="" href="team.php">
              Team
            </a>
            <a class="active" href="contact.php">
              Contact Us
            </a>
          </div>
        </div>
        <a class="navbar-brand" href="index.php">
          <span>
            Photosec
          </span>
        </a>
        <!-- <a href="tel:+01 1234567890" class="call_btn">
          Call Us Now
        </a> -->
      </nav>
    </header>
    <!-- end header section -->
   
  </div>
  </div>

 


  <!-- portfolio section -->

  
  <section class="contact_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Contact Us
      </h2>
    </div>
    <div class="form_container">
      <form id="contactForm" action="" method="post">
        <div class="form-group">
          <input type="text" class="form-control" name="name" placeholder="Your Name" required>
        </div>
        <div class="form-group">
          <input type="email" class="form-control" name="email" placeholder="Your Email" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" placeholder="Subject" required>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="4" placeholder="Message" required></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn" style="background-color: #a34318; color: white;">Send Message</button>
        </div>
        <div id="formMessage" style="display:none; color: green; margin-top: 10px;">
          Thank you for contacting us! We will get back to you soon.
        </div>
      </form>
    </div>
  </div>
</section>

<script>
  document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault();
    document.getElementById("formMessage").style.display = "block";
  });
</script>

<style>
  .form-group input, .form-group textarea {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
  }

  .btn {
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    font-size: 16px;
  }
</style>

  <!-- end portfolio section -->

  
  <!-- contact section -->

  <!-- <section class="contact_section ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 map_container" >
          <div class="map" >
            <div id="googleMap" ></div>
          </div>
        </div>
        <div class="col-md-4 detail-box detail_box_common">
          <div>
            <div class="heading_container">
              <h2>
                Get In Touch
              </h2>
            </div>
            <div class="info_contact">
              <div class="contact_link_box">
                <a href="">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  <span>
                    Location
                  </span>
                </a>
                <a href="tel:+01 1234567890">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <span>
                    Call +01 1234567890
                  </span>
                </a>
                <a href="">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <span>
                    demo.photosec@gmail.com
                  </span>
                </a>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
<br><br>
  <!-- end contact section -->

  <!-- footer section -->
  <footer class="footer_section" style="margin-top:3px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-6">
          <p>
            &copy; <span id="displayYear"></span> All Rights Reserved. Design
            by
            <a href="index.php">Photosec</a>
          </p>
        </div>
        <div class="col-xl-6">
          <div class="link_box">
            <a class="" href="index.php">
              Home
            </a>
            <a class="" href="about.php">
              About
            </a>
            <a class="" href="portfolio.php">
              Portfolio
            </a>
            <a class="" href="team.php">
              Team
            </a>
            <a class="" href="contact.php">
              Contact Us
            </a>
            <a class="" href="policy.php">
              Privacy Policy
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>
 

</body>

</html>
