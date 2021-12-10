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

    <title>Alpine.js</title>
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
    <meta name="twitter:data1" content="5 minutes" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K76XZXLGH3"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-K76XZXLGH3');
    </script>
    
    <style>
    .jumbotron {width: 100%;height: 250px !important;}
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
                <h1 data-aos="fade-right" data-aos-delay="300">Alpine.js</h1>
                <h2 data-aos="fade-left" data-aos-delay="300">First impressions of a new javascript framework.</h2>
            </div>
            <!--container-fluid end-->
        </div>
    </section>

    <!-- blog-single Section Start -->
    <div id="blog-single">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-12 heading-1">
                    <h3>Article</h3>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-duration="700">
                <div class="col-sm-12">
                    <img src="images/alpine.jpg" alt="Wikipedia Image" class="img-thumbnail image">
                    <div class="heading">
                        <h2>Alpine.js</h2>
                    </div>
                </div>
            </div>
            <div class="social-buttons" data-aos="fade-up" data-aos-duration="700">
                <div class="row">
                    <div class="col-sm-5 col-md-6">
                        <div class="inner-text">
                            <h3>December 09, 2021 Posted by <span>Tom</span> In : <span>Tech</span></h3>
                        </div>
                    </div>
                </div>
            </div>    
            <div class="row justify-content-md-center" data-aos="fade-up" data-aos-duration="700">
                <div class="col-xs-12 col-md-8 box">
                    <p>When I first read about Alpine.js, it was described as “Tailwind for JavaScript”, and I can see how that correlation can be made. You do have to add some data attributes to make use of this very lightweight JavaScript framework. But that’s where the similarities end, and if you’re a developer, you know that data attributes and classes are two different things.</p>

                    <p>When you begin to read the <a href="https://alpinejs.dev/start-here" target="_blank">Alpine.js documentation</a>, right away developers will notice that there are quite a few data attributes being employed by this framework that look quite similar to Vue.js attributes. Alpine has "x-data" which, initializes a new component scope (state) with an object in an HTML element. All child HTML elements have access to the data object that exists in its parent element. Then there’s x-bind (similar to v-bind), x-on (v-on) and others that are exactly the same such as the @click directive. Suffice it to say, that if you’re at all familiar with Vue.js, you’ll feel right at home with Alpine.js. The main difference between the two though, is that there is no virtual DOM being utilized, Alpine.js operates on the actual DOM of your page. Vue has a great many more features and is more appropriate for something more like a highly interactive SPA, whereas Alpine is fantastic for a static HTML site that needs a sprinkling of JavaScript throughout the site to make things look and feel a bit more interactive.</p>

                    <p>The documentation is clear and easy to understand. The Alpine crew have discussions turned on for their <a href="https://github.com/alpinejs/alpine/discussions" target="_blank">GitHub repository</a>, which has a lot of activity. If you encounter an issue, you should be able to find the answer or simply ask and they’re quick with responses. </p>

                    <p>At only 7.1kB, you get a lot of JavaScript power for the cost in kilobytes and there’s no need to compile it. When it comes to JavaScript Frameworks there are many choices out there, but this one feels like it’s hitting the mark just right.</p>
                   <i class="fa fa-lightbulb" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog_single Section End -->
  <!-- Now the footer-->
  <?php include("footer.php"); ?>