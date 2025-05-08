
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'Play Tailwind' }}</title>
  
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
  
    <!-- Tailwind CDN بدل الملف المحلي -->
    <script src="https://cdn.tailwindcss.com"></script>
  
    <!-- ==== WOW JS ==== -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script>
      new WOW().init();
    </script>
    @livewireStyles
  </head>
  