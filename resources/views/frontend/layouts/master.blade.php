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

    <link rel="stylesheet" type="text/css" href="<?php echo asset('frontend/css/main.css');?>">


    <!-- jQuery -->
    <script src="<?php echo asset('frontend/js/jquery/jquery-2.1.1.min.js');?>"></script>
    <script src="<?php echo asset('frontend/js/jquery/jquery-migrate-1.2.1.min.js');?>"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>


    <script src="<?php echo asset('frontend/js/main.js');?>"></script>
</head>

<body>


        <!-- message error  -->
        @include('frontend.partials.message')


        <!-- Contenu -->
        @yield('content')
        <!-- Fin contenu -->



<!-- Theme -->
<script src="<?php echo asset('frontend/js/theme.js');?>"></script>

</body>
</html>