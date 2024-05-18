<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com" rel="preconnect" />
        <link
          href="https://fonts.gstatic.com"
          rel="preconnect"
          crossorigin="anonymous"
        />
        <script
          src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"
          type="text/javascript"
        ></script>
        <script type="text/javascript">
          WebFont.load({
            google: {
              families: [
                "Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic",
                "DM Serif Text:regular",
                "Inter:regular,500,600,700,800,900",
                "Lora:regular,500,600,700",
                "Abril Fatface:regular",
                "Playfair Display:regular,500,600,700,800,900",
                "Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic",
              ],
            },
          });
        </script>
        <!-- Scripts -->

        <script src="{{asset('assets/js/jquery.js')}}"
        type="text/javascript"></script>
        <script src="{{asset('assets/js/webflow-script.js')}}"
        type="text/javascript"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.2.2/dist/js/splide.min.js"></script>
        <script>
         <script
    src="{{asset('assets/js/65e18c7f1e395b37dc7bbc49-2f65708800710a99a2fe369cf8-2f660e4c665e01020f0e439221-2fwebflowembed65e18c7f1e395b37dc7bbc49693-1.0.0.js')}}"
    type="text/javascript"
  ></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script
    src="{{asset('assets/js3/65e18c7f1e395b37dc7bbc49-2f65708800710a99a2fe369cf8-2f660e4c665e01020f0e439221-2fwebflowembed65e18c7f1e395b37dc7bbc49693-1.0.0.js')}}"
      type="text/javascript"
    ></script>


    </head>
    <body class="font-sans antialiased">
        <div >
            <!--class="min-h-screen bg-gray-100"-->
            @include('layouts.navigation')

            <!-- Page Heading -->
            {{-- @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

            <!-- Page Content -->
            <main>
                {{ $slot }}

            </main>
        </div>
    </body>
    @include('footer')
</html>
