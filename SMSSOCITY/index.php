<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.devsnews.com/template/fande/fande/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Apr 2022 20:22:00 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fande - Crowdfunding & Charity HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.html">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.html">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/font.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <style>
        .results tr[visible="true"] {
            display: table-row;
        }

        .results tr[visible="false"],
        .no-result {
            display: none;
        }
    </style>



</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- Add your site or application content here -->
    <!-- preloader -->

    <!-- preloader end <!- header-area start -->
    <?php include 'includes/header.php' ?>
    <!-- header-area end -->

    <!-- slide-bar start -->
    <?php include 'includes/saide_menu_bar.php' ?>
    <div class="body-overlay"></div>
    <!-- slide-bar end -->



    <!-- Main Content end ---------------------------------->

    <?php

    if (isset($pages)) {

        if ($pages == 'about_page') {
            include 'pages/about_content.php';
        } elseif ($pages == 'even_page') {
            include 'pages/event_content.php';
        } elseif ($pages == 'blog_page') {
            include 'pages/blog_content.php';
        } elseif ($pages == 'project_page') {
            include 'pages/project_content.php';
        } elseif ($pages == 'contact_page') {
            include 'pages/contact_content.php';
        } elseif ($pages == 'history_page') {
            include 'pages/history_content.php';
        } elseif ($pages == 'career_page') {
            include 'pages/career_content.php';
        } elseif ($pages == 'team_page') {
            include 'pages/team_content.php';
        } elseif ($pages == 'faq_page') {
            include 'pages/faq_content.php';
        } elseif ($pages == 'event_details') {
            include 'pages/event_details_content.php';
        }
    } else {

        include 'pages/Home_content.php';
    }

    ?>










    <!-- Main Content end ---------------------------------->



    <!--footer-area start-->
    <?php include 'includes/footer.php'; ?>
    <!--footer-area end-->



    <!-- JS here -->
    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.nice-select.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.easypiechart.js"></script>
    <script src="assets/js/tilt.jquery.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>





</body>


<!-- Mirrored from www.devsnews.com/template/fande/fande/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Apr 2022 20:22:12 GMT -->

</html>