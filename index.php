<?php 
$appBaseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://"); 
$appBaseUrl.= $_SERVER['HTTP_HOST'];
?>

<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lời mời dự Hôn lễ K&#9829;H</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Lời mời, giới thiệu, hình ảnh về Hôn lễ của Ngọc Kha vs Nguyễn Hạnh"/>
    <meta name="keywords" content="Phạm Ngọc Kha, Nguyễn Thị Hạnh, Ngọc Kha, Nguyễn Hạnh, Hôn lễ, Lễ cưới"/>
    <meta name="author" content="khamin0503@gmail.com"/>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="Lời mời dự Hôn lễ KvsH"/>
    <meta property="og:image" content="<?= $appBaseUrl ?>/images/img_share.png"/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content="Lời mời, giới thiệu, hình ảnh về Hôn lễ của Ngọc Kha vs Nguyễn Hạnh"/>
    <meta name="twitter:title" content="Lời mời dự Hôn lễ KvsH"/>
    <meta name="twitter:image" content="<?= $appBaseUrl ?>/images/img_share.png"/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700' rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link href="lib/simplelightbox-master/dist/simple-lightbox.min.css" rel="stylesheet"/>

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css?v=15">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/custom.css?v=15">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div class="fh5co-loader"></div>

<div id="page">
    <?php include 'html/header.php' ?>
    <?php include 'html/section_couple.php' ?>
    <?php include 'html/section_event.php' ?>
    <?php include 'html/section_couple-story.php' ?>
    <?php include 'html/section_gallery-travels.php' ?>
    <?php include 'html/section_gallery-wedding.php' ?>
    <?php include 'html/section_testimonial.php' ?>
    <?php include 'html/section_contact.php' ?>
    <?php include 'html/footer.php' ?>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- As A Vanilla JavaScript Plugin -->
<script src="lib/simplelightbox-master/dist/simple-lightbox.min.js"></script>

<!-- For legacy browsers -->
<script src="lib/simplelightbox-master/dist/simple-lightbox.legacy.min.js"></script>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<script src="lib/simplelightbox-master/dist/simple-lightbox.jquery.min.js"></script>

<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- countTo -->
<script src="js/jquery.countTo.js"></script>

<!-- Stellar -->
<script src="js/jquery.stellar.min.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>

<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
<script src="js/simplyCountdown.js"></script>
<!-- Main -->
<script src="js/main.js?v=15"></script>

<script src="js/custom.js?v=15"></script>

</body>
</html>