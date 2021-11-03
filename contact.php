<!doctype html>
<html lang="en">

<head>
    <!-- Necessary meta tags -->
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

    <title>Contact</title>

    <meta name="description" content="Atomic is known for building fast and effective websites for small businesses. We offer graphic design, site design, development and web hosting."/>
    <meta name="keywords" content="Web Development, Hosting, Web Design, graphic design, brochures, catalogs, websites, logos." />
    <meta name="author" content="Atomic/TomPhillips" />

    <!--- Open Graph data -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Where design and technoolgy intersect." />
    <meta property="og:description" content="Atomic is known for building fast and effective websites for small businesses. We offer graphic design, site design, development and web hosting." />
    <meta property="og:url" content="https://atomicpx.com/" />
    <meta property="og:site_name" content="Atomic" />
    <meta property="article:publisher" content="https://www.facebook.com/amikasBridgeHousing" />
    <meta property="article:modified_time" content="2021-11-01T04:24:03+00:00" />
    <meta property="og:image" content="https://atomicpx.com/images/OG-image.jpg" />
    <meta property="og:image:width" content="2560" />
    <meta property="og:image:height" content="1751" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Where design and technology intersect" />
    <meta name="twitter:description" content="Atomic is known for building fast and effective websites for small businesses. We offer graphic design, site design, development and web hosting" />
    <meta name="twitter:image" content="https://atomicpx.com/images/OG-twitter.jpg" />
    <meta name="twitter:site" content="@tripdog" />
    <meta name="twitter:label1" content="Est. reading time" />
    <meta name="twitter:data1" content="3 minutes" />
    
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
            <!-- Contact Form -->
            <form action="form-submit.php" id="contact-form" method="POST">

            <input type="text" class="form-control form-control-custom" tabindex="-1"
                id="text-field" name="text-field">

            <!-- Input Name -->
            <div class="form-group" id="name-field">
            <label for="form-name" class="sr-only">Name</label>
            <input type="text" class="form-control form-control-dark"
                    id="form-name" name="name" placeholder="Name">
            </div>
            <!-- /End Input Name -->

            <!-- Input Email -->
            <div class="form-group" id="email-field">
            <label for="form-email" class="sr-only">Email</label>
            <input type="email" class="form-control form-control-dark"
                    id="form-email" name="email" placeholder="Email">
            </div>
            <!-- /End Input Email -->

            <!-- Input Message -->
            <div class="form-group" id="message-field">
            <label for="form-message" class="sr-only">Message</label>
            <textarea class="form-control form-control-dark" rows="1" id="form-message" name="message" placeholder="Message"></textarea>
            </div>

            <!-- /End Input Message -->

            <!-- Submit Button -->
            <div class="btn-row">
            <div class="form-group">
                <button type="submit" class="btn btn-primary" role="button">
                Send Message
                </button>
            </div>
            </div>
            <!-- /End Submit Button -->

            </form>
            <!-- /End Contact Form -->

          </div>
      </div>
     </div>
</div>

<!-- Contact section Ended -->
<?php include("footer.php"); ?>