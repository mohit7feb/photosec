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

<body class="sub_page">
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
            <a class="active" href="about.php">
              About
            </a>
            <a class="" href="portfolio.php">
              Portfolio
            </a>
            <a class="" href="team.php">
              Team
            </a>
            <a  href="contact.php">
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

  <!-- about section -->

  <section class="about_section">
  <div class="container-fluid">
    <div class="row">
      <div class="img-box col-lg-8 col-md-7">
        <img src="images/about-img.jpg" alt="About our Photography Studio" />
      </div>
      <div class="detail-box detail_box_common col-lg-4 col-md-5 text_center">
        <div class="heading_container heading_center">
          <h2>About Us</h2>
        </div>
        <p>
          Welcome to our photography studio, where we capture moments that last a lifetime. We specialize in
          creative and professional photography services, tailored to meet every need.
        </p>
        <div id="more-content" >
          <p>
            Whether it’s a wedding, portrait, or commercial project, we approach every session with passion and
            precision. Our team of photographers brings years of experience and a keen eye for detail to ensure
            your photos are nothing short of extraordinary.
          </p>
        </div>
        <!-- <button id="read-more-btn" style="display: inline-block;
    background-color: #85310c;
    color: #ffffff;
    padding: 10px 40px;
    border: 1px solid #85310c;
    border-radius: 0;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    text-transform: uppercase;
    margin-top: 15px;" onclick="toggleContent()">Read More</button> -->
      </div>
    </div>
  </div>
</section>

<script>
  function toggleContent() {
    var moreContent = document.getElementById("more-content");
    var btn = document.getElementById("read-more-btn");
    
    if (moreContent.style.display === "none") {
      moreContent.style.display = "block";
      btn.textContent = "Read Less";
    } else {
      moreContent.style.display = "none";
      btn.textContent = "Read More";
    }
  }
</script>


  <!-- end about section -->

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

  <!-- end contact section -->

  <!-- footer section -->
  <footer class="footer_section">
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
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>