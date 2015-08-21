<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="@Designpond | Cindy Leschaud">
    <meta name="description" content="Organisation Neuchâteloise des ASSC">
    <title>ONEA | Organisation Neuchâteloise des ASSC</title>
    <meta name="_token" content="<?php echo csrf_token(); ?>">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo asset('frontend/css/styles.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('frontend/css/main.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('frontend/css/font-awesome.css');?>">


    <!-- jQuery -->
    <script src="<?php echo asset('frontend/js/jquery/jquery-2.1.1.min.js');?>"></script>
    <script src="<?php echo asset('frontend/js/jquery/jquery-migrate-1.2.1.min.js');?>"></script>

    <!-- General Site Configuration -->
    <script src="<?php echo asset('frontend/js/common.js');?>"></script>
    <!-- Carousels (Modified bxSlider) -->
    <script src="<?php echo asset('frontend/js/jquery.carousel-main.min.js');?>"></script>
    <script src="<?php echo asset('frontend/js/jquery.carousel-content.min.js');?>"></script>
    <script src="<?php echo asset('frontend/js/home-slider-settings.js');?>"></script>

    <script src="<?php echo asset('frontend/js/main.js');?>"></script>

</head>

<body class="light-bg home">

<!-- Main Container -->
<div class="main-container">

    <!-- Footer -->
    @include('frontend.partials.nav')

    @include('frontend.partials.slider')

    <!-- CTA Bar - Set "white", "accent" or "dark" -->
    <div class="home-cta-bar-container accent">

        <div class="content-width">
            <div class="home-cta-bar">
                <!-- Text -->
                <div class="text">
                    A super easy to use PSD, HTML and WordPress theme ready to serve almost all business types.
                </div>
                <!-- Button -->
                <div class="home-cta-bar-button">
                    <a class="button transparent" href="#"><i class="fa fa-shopping-cart"></i>Purchase Theme</a>
                </div>
            </div>
        </div>

    </div>
    <!-- END CTA Bar -->

    <!-- Main Content -->
    <div class="main-content">
        <div class="main-content-inner content-width">


        <!-- message error  -->
        @include('frontend.partials.message')


        <!-- Contenu -->
        @yield('content')
        <!-- Fin contenu -->


        </div>
    </div>
    <!-- END Main Content -->

    <!-- Footer -->
    @include('frontend.partials.footer')

</div>
<!-- END Main Container -->

</body>
</html>