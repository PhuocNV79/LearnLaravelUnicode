<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/clients/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/clients/css/style.css')}}">
    <title>@yield('title') - UNICODE </title>
</head>
<body>
     @include('clients.blocks.header')
     <main>
         <aside>
             @include('clients.blocks.sidebar')
             @section('sidebar')
            
             {{-- Goi tu 1 view khac --}}
             @show
         </aside>
         <div class="content">
             @yield('content')
         </div>
     </main>
     @include('clients.blocks.footer')
     <script src="{{asset('assets/clients/js/bootstrap.min.js')}}"></script>
        @yield('js')

</body>
</html>