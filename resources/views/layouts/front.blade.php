<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield(('title'))
    </title>

 <!--     Fonts and icons     -->
 <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"> 

    <!--styles -->

    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet" />


    <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">
 

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
     
                @include('layouts.inc.frontnavbar')
                <div class="content">
                    @yield('content')
                </div>

                
    


 

     <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer></script>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 @if(session ('status'))
        <script>
            swal("{{session('status')}}")
        </script>
 @endif
        @yield('scripts')

    
</body>
</html>