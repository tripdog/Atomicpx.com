<!doctype html>
<html lang="en">

<head>
    <!-- Necessary meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/nat4hnx.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link rel="stylesheet" href="css/bootstrap.css">
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

    <meta name="description" content="Get in touch so we can discuss your next project."/>
    <meta name="keywords" content="Web Development, Hosting, Web Design, graphic design, brochures, catalogs, websites, logos." />
    <meta name="author" content="Atomic/TomPhillips" />
    <link rel="canonical" href="https://atomicpx.com/contact.php" />

    <!--- Open Graph data -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Where design and technoolgy intersect." />
    <meta property="og:description" content="Get in touch so we can discuss your next project." />
    <meta property="og:url" content="https://atomicpx.com/contact.php" />
    <meta property="og:site_name" content="Atomic" />

    <meta property="article:modified_time" content="2021-11-01T04:24:03+00:00" />
    <meta property="og:image" content="https://atomicpx.com/images/OG-image.jpg" />
    <meta property="og:image:width" content="2560" />
    <meta property="og:image:height" content="1751" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Where design and technology intersect" />
    <meta name="twitter:description" content="Get in touch so we can discuss your next project." />
    <meta name="twitter:image" content="https://atomicpx.com/images/OG-twitter.jpg" />
    <meta name="twitter:site" content="@tripdog" />
    <meta name="twitter:label1" content="Est. reading time" />
    <meta name="twitter:data1" content="3 minutes" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K76XZXLGH3"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-K76XZXLGH3');
    </script>

    <script type='application/ld+json'>
        {
        "@context": "http://www.schema.org",
        "@type": "LocalBusiness",
        "name": "atomic",
        "url": "https://atomicpx.com/contact.php",
        "sameAs": [
            ""
        ],
        "logo": "https://atomicpx.com/images/atomic-g-logo.jpg",
        "image": "https://atomicpx.com/images/3.jpg",
        "description": "Get in touch so we can discuss your next project.",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "San Diego",
            "addressRegion": "California",
            "postalCode": "92115",
            "addressCountry": "United States of America"
        },
        "openingHours": "Mo 10:00-20:00 Tu 10:00-20:00 We 10:00-20:00 Th 10:00-20:00 Fr 01:00-20:00 Sa 01:00-20:00"
        }
    </script>

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
                <h2 class="shadows" data-aos="fade-left" data-aos-delay="300">A proposal is the next step.</h2>
            </div>
            <!--container-fluid end-->
        </div>
    </section>

<!-- Contact section Start -->
<div id="contact">
  <div class="container">
  <h3>Let's get a proposal started for you.</h3>
  <div class="row" data-aos="fade-up" data-aos-delay="300">
      <div class="col-md-12 text-left">
          <p>The first step is learning about your business and goals. If you prefer to chat via Phone, Skype, Whatsapp or Zoom head over to the <a href="consult.php"><strong>consultation</strong></a> page and book some face time with me. I'm always happy to hear from you. You can also contact me via Twitter, LinkedIn or GitHub.</p>
          <p>Some folks prefer to talk on the phone, <a href="tel:1-619-964-6678"><strong>619-964-6678</strong></a>. I'm up for that as well.</p>
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
<!-- Load the Google reCAPTCHA API -->
<script src="https://www.google.com/recaptcha/api.js"></script>

<!-- Contact section Ended -->
<?php include("footer.php"); ?>
