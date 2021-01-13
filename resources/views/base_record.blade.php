<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Meta -->
    <meta name="theme-color" content="#fff">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:description" name="description" content="PAW">
    <meta property="og:author" name="author" content="Aston Gemmy O'naire">
    <meta property="og:keywords" name="keywords" content=""/>
    <meta property="og:image" name="image" content="{{ asset('images/thumbnails/PAW.webp') }}"/>
    <title>
        @if(array_key_exists('name',$view_object))
            {{ $page_title[$view_object['name']] }}
        @else
            @yield('alt_title')
        @endif
    </title>
    <!-- Meta Ends -->    
    
    <!-- Fonts -->
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Fonts Ends -->
    
    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/paw.css') }}" rel="stylesheet" type="text/css" />
    <!-- CSS Ends -->

    <!-- Site Icon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon/PAW.webp') }}">
    <!-- Site Icon Ends -->
    
    <!-- Manifest File -->
    <link rel="manifest" href="manifest.json">
    <!-- Manifest File Ends -->
    
    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" href="{{ asset('images/thumbnail/PAW.webp') }}">
    <!-- Apple Touch Icon Ends -->

</head>

<body>

    @if(array_key_exists('name',$view_object))
        <div class="cuz-navbar">

            <a href="/" class="brand-title">
                PAW DATABASE RECORD
            </a>
            
            <div class="cuz-navbar-links">
                @foreach($links as $key => $value)
                    @if($key !== $view_object['name'])
                        <a href="{{ $value['href'] }}"> {{ $value['text'] }} </a>
                    @endif
                @endforeach
            </div>

        </div>
    @endif

    <div class="container">

        @yield('main')
    
    </div>

    <div class="cuz-footer">

        Copyright {{date('Y')}}
             
    </div>
        
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
    
</body>
</html>