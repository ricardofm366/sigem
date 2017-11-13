<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SIGEM - Instituto Municipal de Planeacion Morelia">
    <meta name="keyword" content="SIGEM,IMPLAM,Mapas">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <title>SIGEM - Instituto Municipal de Planeacion Morelia</title>


    <!--<link href="http://openlayers.org/en/v3.16.0/css/ol.css" rel="stylesheet" type="text/css">-->
    <link rel="stylesheet" href="http://openlayers.org/en/latest/css/ol.css" type="text/css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    

    <link href="{{ asset('css/pretty-checkbox.min.css') }}" rel="stylesheet">

    <!-- Icons -->
    <link href="{{ asset('css/map/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/map/css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/map/bootstrap.min.css') }}" rel="stylesheet">
    
    <!-- Main styles for this application -->    
    <link href="{{ asset('css/map/css/style.css') }}" rel="stylesheet">

    


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden sidebar-minimized"><!--sidebar-hidden-->
    <!-- Main Header -->
    @include('layouts.map.header')
    
    <div class="app-body">
        <!-- Sidebar -->
        @include('layouts.map.sidebar')
        
        <!-- Main content -->
        <main class="main">

            <!-- /.content-wrapper -->
            @yield('content')
            
        </main>

        @include('layouts.map.asidebar')

    </div>

    <!-- Footer -->
    @include('layouts.map.footer')


    <!-- Plugins and scripts required by this views -->
    <!-- Custom scripts required by this view -->
    

    <!-- Bootstrap and necessary plugins -->
    <script src= "{{ asset('js/map/plugins/jquery-3.1.0.min.js') }}"></script>
    <script src= "{{ asset('js/map/plugins/popper.min.js') }}"></script>
    <script src= "{{ asset('js/map/plugins/bootstrap.min.js') }}"></script>

    
    <!-- main scripts -->
    <script src= "{{ asset('js/map/app.js') }}" ></script>

    <script src= "{{ asset('js/jquery.postjson.js') }}"></script>
    <script src= "{{ asset('js/app/namespaces.js') }}"></script>
    <script src= "{{ asset('js/knockout-min.js') }}"></script>
    <script src= "{{ asset('js/knockout.mapping.min.js') }}"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
    <script>
        $(document).ready(function() {
        });
    </script>


    @yield('viewscripts')
    
    
</body>
</html>

