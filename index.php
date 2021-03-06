<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Delicious</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- =======================================================
    Theme Name: Delicious
    Theme URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!--banner-->
  <section id="banner">
    <div class="bg-color">
      <header id="header">
        <div class="container">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#about">About</a>
            <a href="#event">Event</a>
            <a href="#menu-list">Menu</a>
            <a href="#contact">Contact</a>
          </div>
          <!-- Use any element to open the sidenav -->
          <span onclick="openNav()" class="pull-right menu-icon">☰</span>
        </div>
      </header>
      <div class="container">
        <div class="row">
          <div class="inner text-center">
            <h1 class="logo-name">Delicious</h1>
            <h2>Food To fit your lifestyle & health.</h2>
            <p>Specialized in Sea Food!!</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / banner -->
  <!--about-->
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">Delicious Journey</h1>
          <p class="header-p">Get Upto 30% off across all your orders. Currently we are only serving in Mumbai area. Free delivery on order Rs.699 </p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="col-md-6 col-sm-6">
            <div class="about-info">
              <h2 class="heading">Health benefits</h2>
              <p>There is broad scientific consensus that docosahexaenoic acid (DHA) and eicosapentaenoic acid (EPA) found in seafood are beneficial to neurodevelopment and cognition, especially at young ages. The United Nations Food and Agriculture Organization has described fish as "nature's super food."Seafood consumption is associated with improved neurologic development during gestation and early childhood and more tenuously linked to reduced mortality from coronary heart disease</p>
              <div class="details-list">
                <ul>
                  <li><i class="fa fa-check"></i>Fresh and quality products.</li>
                  <li><i class="fa fa-check"></i>90 Mins & Fast delivery</li>
                  <li><i class="fa fa-check"></i>Majory accepting all kind of online payments</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <img src="img/res01.jpg" alt="" class="img-responsive">
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </section>
  <!--/about-->
  <!-- event -->
  <section id="event">
    <div class="bg-color" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center" style="padding:60px;">
            <h1 class="header-h">Up Coming events</h1>
            <p class="header-p">We helps you to learn cooking by sharing our receipes</p>
          </div>
          <div class="col-md-12" style="padding-bottom:60px;">
            <div class="item active left">
              <div class="col-md-6 col-sm-6 left-images">
                <img src="img/res02.jpg" class="img-responsive">
              </div>
              <div class="col-md-6 col-sm-6 details-text">
                <div class="content-holder">
                  <h2>Joyful party</h2>
                  <p>Stay tuned, soon we are comming online events to help to cook delicious food with out receipes. We as platform also gives opportunity to share your receipe to generate open market community</p>
                  <address>
                              <strong>Place: </strong>
                              TBA
                              <br>
                              <strong>Time: </strong>
                              TBA
                            </address>
                  <!-- <a class="btn btn-imfo btn-read-more" href="events-details.html">Read more</a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ event -->
  <!-- menu -->
  <section id="menu-list" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">Menu List</h1>
          <!-- <p class="header-p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
            <br>nibh euismod tincidunt ut laoreet dolore magna aliquam. </p> -->
        </div>

        <div class="col-md-12  text-center" id="menu-flters">
          <?php
              $arr = array();

              // Prawns
              $arr["prawns"][] = array("head" => "Prawns", "price" => 230, "desc" => "60/80 Pcs");
              $arr["prawns"][] = array("head" => "Prawns", "price" => "250", "desc" => "Head On Upto 10kg / 5kg");
              $arr["prawns"][] = array("head" => "Prawns", "price" => "350", "desc" => "30/40 Pcs");
              $arr["prawns"][] = array("head" => "Tiger", "price" => "800", "desc" => "");
              $arr["prawns"][] = array("head" => "Tiger", "price" => "570", "desc" => "15/20 Pcs");
              $arr["prawns"][] = array("head" => "Tiger", "price" => "900", "desc" => "5/7 Pcs");

              // Lobster
              $arr["lobster"][] = array("head" => "Lobster", "price" => 1000, "desc" => "300 gm");
              $arr["lobster"][] = array("head" => "Baby Lobster", "price" => 400, "desc" => "5/10 Pcs");

              // Crab
              $arr["crab"][] = array("head" => "Live Crab Mud", "price" => 400, "desc" => "8/10 Pcs");

              // Fish
              $arr["fish"][] = array("head" => "Promfret", "price" => 450, "desc" => "100/150 Gm");
              $arr["fish"][] = array("head" => "Promfret", "price" => 800, "desc" => "200/300 Gm");
              $arr["fish"][] = array("head" => "Promfret", "price" => 1000, "desc" => "300/400 Gm");
              $arr["fish"][] = array("head" => "Bombay Duck", "price" => 150, "desc" => "1kg");
              $arr["fish"][] = array("head" => "Croaker (Dhoma)", "price" => 130, "desc" => "1kg");
              $arr["fish"][] = array("head" => "Ribbon (Bale)", "price" => 180, "desc" => "200/300 Gm");
              $arr["fish"][] = array("head" => "King (Surmai)", "price" => 500, "desc" => "1kg");
              $arr["fish"][] = array("head" => "Bangda (Mackerel)", "price" => 230, "desc" => "1kg");
              $arr["fish"][] = array("head" => "Rawas", "price" => 500, "desc" => "1kg");


          ?>
          <ul>
            <li><a class="filter active" data-filter=".menu-restaurant">Show All</a></li>
            <?php
            foreach($arr as $key => $values) {
            ?>    
            <li><a class="filter" data-filter=".<?=$key;?>"><?=$key; ?></a></li>
            <?php
            }
            ?>
          </ul>
        </div>

        <div id="menu-wrapper">
          <?php
              foreach($arr as $key => $values) {
                foreach($values as $value) {
                ?>
                
                <div class="<?= $key;?> menu-restaurant">
                  <span class="clearfix">
                    <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg"><?=$value["head"]; ?></a>
                    <span style="left: 166px; right: 44px;" class="menu-line"></span>
                    <span class="menu-price"><?=$value["price"]; ?></span>
                  </span>
                  <span class="menu-subtitle"><?=$value["desc"]; ?></span>
                </div>
                <?php
            }
          }
            echo "\n";            
          ?>

      </div>
    </div>
  </section>
  <!--/ menu -->
  <!-- contact -->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="header-h">Book Your order</h1>
          <!-- <p class="header-p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
            <br>nibh euismod tincidunt ut laoreet dolore magna aliquam. </p> -->
        </div>
      </div>
      <div class="row msg-row">
        <div class="col-md-4 col-sm-4 mr-15">
          <div class="media-2">
            <div class="media-left">
              <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-phone"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Phone Numbers</h4>
              <p class="light-blue regular alt-p">+91 77100 81786 / 8655525566 - <span class="contacts-sp">Phone Booking</span></p>
            </div>
          </div>
          <div class="media-2">
            <div class="media-left">
              <div class="contact-email bg-14 text-center"><span class="hour-icon fa fa-clock-o"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Opening Hours</h4>
              <p class="light-blue regular alt-p"> Monday to Friday 09.00 - 24:00</p>
              <p class="light-blue regular alt-p">
                Friday and Sunday 08:00 - 03.00
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-sm-8" style="display: none;">
          <form action="" method="post" role="form" class="contactForm">
            <div id="sendmessage">Your booking request has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <div class="col-md-6 col-sm-6 contact-form pad-form">
              <div class="form-group label-floating is-empty">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>

            </div>
            <div class="col-md-6 col-sm-6 contact-form pad-form">
              <div class="form-group">
                <input type="email" class="form-control label-floating is-empty" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="text" class="form-control label-floating is-empty" name="phone" id="phone" placeholder="Phone" data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-12 contact-form">
              <div class="form-group label-floating is-empty">
                <textarea class="form-control" name="message" rows="5" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

            </div>
            <div class="col-md-12 btnpad">
              <div class="contacts-btn-pad">
                <button class="contacts-btn">Book a order</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- / contact -->
  <!-- footer -->
  <footer class="footer text-center">
    <div class="footer-top">
      <div class="row">
        <div class="col-md-offset-3 col-md-6 text-center">
          <div class="widget">
            <h4 class="widget-title">Delicious</h4>
            <address>Antop Hill, Wadala Mumbai</address>
            <div class="social-list">
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
            <p class="copyright clear-float">
              © Delicious Theme. All Rights Reserved
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Delicious
                -->
                <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
              </div>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
