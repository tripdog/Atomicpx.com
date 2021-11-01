<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.typekit.net/nat4hnx.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/main.css">


        <!-- Site Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
        <link rel="manifest" href="site.webmanifest">
        <link rel="mask-icon" href="safari-pinned-tab.svg" color="#f26522">
        <meta name="msapplication-TileColor" content="#603cba">
        <meta name="theme-color" content="#ffffff">

    <title>Portfolio</title>
    <style>
    .jumbotron {width: 100%;height: 250px;}
        .jumbotron h2 {padding-bottom: 0;}
    </style>
</head>
<body>
<?php include("inner-header.php"); ?>

<!--Section-1-->
<section class="section-1">
        <div class="jumbotron d-flex align-items-center">
            <div class="gradient"></div>
            <div class="container-fluid content">
                <h1 class="shadows" data-aos="fade-right" data-aos-delay="300">Let's get in touch!</h1>
                <h2 class="shadows" data-aos="fade-left" data-aos-delay="300">I'm looking forward to hearing from you.</h2>
            </div>
            <!--container-fluid end-->
        </div>
    </section>
    
<!-- Contact section Start -->
<div id="contact">
  <div class="container">
  <h3>Contact Me</h3>
  <div class="row" data-aos="fade-up" data-aos-delay="300">
      <div class="col-md-12 text-left">
          <p>Drop me a line!  If you prefer to chat via Phone, Skype, Whatsapp or Zoom head over to the <a href="consultation.php"><strong>consultation</strong></a> page and book some face time with me. I'm always happy to hear from you. You can also contact me via Twitter, LinkedIn or GitHub.</p>
          <p>Some folks prefer to talk on the phone, <a href="tel:619-964-6678"><strong>619-964-6678</strong></a>. I'm up for that as well.</p>
      </div>
  </div>
    </div>
     <div class="container py-5">
      <div class="row" data-aos="fade-up" data-aos-delay="300">
          <div class="col-md-12">
          <form action="php/contact-process.php" id="contact-form" method="post">
          <input type="text" class="form-control form-control-custom" tabindex="-1" id="text-field" name="text-field">
                <!-- Input Name -->
                  <div class="form-group row">
                      <div class="col-sm-6">
                          <input type="text" class="form-control" id="form-name" name="form-name" placeholder="Your Name" required/>
                      </div>
                <!-- /End Input Name -->
                          <div class="col-sm-6">
                          <input type="email" class="form-control" id="form-email" name="form-email" placeholder="Email">
                      </div>
                      <div class="col-sm-12">
                          <input type="text" class="form-control" placeholder="Your Phone Number" name="form-phone" id="form-phone">
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-xs-12 col-md-12">
                        <textarea class="form-control" rows="1" id="form-message" name="form-message" placeholder="Your Message" required></textarea>
                      </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Alright Submit it</button>
              </form>
          </div>
      </div>
     </div>
</div>

<!-- Contact section Ended -->
<?php include("footer.php"); ?>