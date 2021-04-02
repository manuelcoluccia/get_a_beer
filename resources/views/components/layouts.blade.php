<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{$title ?? 'Birrerie locali'}}i</title>

      

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Bootstrap Core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

       

        {{$style ?? ' '}}
        
    </head>
    <body id="page-top">
        <x-_navbar />
        <div id="app">

        {{$slot}}

            <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <x-_footer />

       
        
        @stack('scripts')
        
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
    
    <!-- Bootstrap core JavaScript -->
 {{--    <script src="vendor/jquery/jquery.min.js"></script> --}}
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    
     <!-- Scripts -->
     <script src="https://kit.fontawesome.com/bab8fbb0e4.js" crossorigin="anonymous"></script>
    </body>

</html>
