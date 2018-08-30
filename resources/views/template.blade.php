<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- styles -->
        <link rel="stylesheet" href="/css/app.css" type="text/css">
        <!-- end styles -->

        <title>MMartan</title>
    </head>
    <body class="application">
        <main id="application"  class="application__main">
            <template-header></template-header>
            <!-- pages -->
            <div class="application__content">
                @yield('content')
            </div>
            <!-- end scripts -->
        </main>
        <!-- scripts -->
        <script src="/js/app.js" type="text/javascript"></script>
        <!-- end scripts -->
    </body>
</html>
