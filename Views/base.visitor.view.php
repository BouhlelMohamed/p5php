<!DOCTYPE html>
<html lang="fr">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bouhlel | Mohamed </title>
    <link rel="icon" href="https://www.php.net/images/logos/new-php-logo.svg" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link rel="stylesheet" href="assets/visitor/css/plugins.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assets/visitor/css/style.css" type="text/css" media="screen" />
    <link href="assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
</head>

<body class="dark">

    <div class="inline-menu-container">
        <span class="status">Mohamed Bouhlel</span>
        <ul class="inline-menu">
            <li class="about menu-item">CV</li>
            <li class="portfolio menu-item">Articles</li>
            <li class="contact menu-item">Contact</li>
            <li id="close" class="menu-item"><i class="ion-ios-close-empty"></i></li>
        </ul>
    </div>
<?php

$width =  "'<script type='text/javascript'>
document.write(screen.width);
</script>'";

?>
    <section class="home img-bg" style="background: url(https://vironit-bevc00m.netdna-ssl.com/wp-content/uploads/2018/05/php_wallpaper_by_milesandryprower-d9o6yba.png) #333; background-size: cover;">
        <div class="overlay light opacity5"></div>
        <div class="<?php if($width > 2200){echo "container";}?>">
            <div class="name-block">
                <div class="name-block-container">
                    <h1><span>Bonjour, Je m'appelle</span>Bouhlel Mohamed</h1>
                    <h2>Développeur PHP</h2>
                    <h3><br>Curieux, dynamique et ambitieux<br> je suis un jeune développeur PHP/Symfony <br>en quête de nouveaux défis !</h3>
                    <a target="_blank" href="assets/cv.pdf" download="assets/cv.pdf" class="btn btn-download">Télécharger mon CV</a>
                    <ul class="social">
                        <li><a target="_blank" href="https://fr.linkedin.com/in/mohamed-bouhlelphp"><i class="icon ion-social-linkedin"></i></a></li>
                        <li><a href="http://mohamed-bouhlel.com/p5/admin" target="_blank"><i class="icon ion-android-contact"></i>	</a></li>
                    </ul>
                </div>
            </div>
            <div class="menu-blocks">
                <div class="about-block menu-block">
                    <div class="about-block-container">
                        <h2 class="about menu-item">CV</h2>
                    </div>
                </div>
                <a style="color: black" href="http://mohamed-bouhlel.com/">
                <div class="blog-block  menu-block">
                    <div class="portfolio-block-container">
                        <h2 class="portfolio menu-item">Mon site</h2>
                    </div>
                </div>
                </a>
                <div class="portfolio-block  menu-block">
                    <div class="blog-block-container">
                        <h2 class="blog menu-item">Blog</h2>
                    </div>
                </div>
                <div class="contact-block  menu-block">
                    <div class="contact-block-container">
                        <h2 class="contact menu-item h2-contact">Contact</h2>
                    </div>
                </div>
            </div>


        <?= $content ?>
        
        <?php require_once 'Views/visitor/template/about.view.php'; ?>


        <?php require_once 'Views/visitor/blog/blog.view.php'; ?>

        <?php require_once 'Views/visitor/template/contact.view.php'; ?>


    </section>
  

    <script src="assets/visitor/js/plugins.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmsb2nGLuIl04bt7CWJozRMhThvGa3y1w"></script>
    <script src="assets/visitor/js/main.js"></script>
    <script src="assets/jQuery/j.script.js"></script>
    <script src="assets/visitor/blog_details/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/visitor/blog_details/vendors/jquery/jquery-3.2.1.min.js"></script>

</body>


<!-- Mirrored from demo.lion-coders.com/html/alpha/index-image-light.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Feb 2020 12:21:51 GMT -->
</html>