{{--
<?php header('Content-Type: charset=utf-8') ?>
@yield('fejlec')
<b>Ez minden oldalon megjelenik</b>
@yield('tartalom')
--}}

<!doctype html>
<html class="no-js" lang="hu">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laravel képgaléria</title>
    <link rel="stylesheet" href="/css/foundation.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <!-- <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css"> -->
  </head>
  <body>

    <div class="off-canvas-wrapper">
      <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

        <div class="off-canvas position-left reveal-for-large" id="my-info" data-off-canvas data-position="left">
          <div class="row column">
            <h5>Főmenü</h5>
            <ul class="vertical menu">
              <li><a href="/">Nyitólap</a></li>
              <li><a href="#">Belépés</a></li>
              <li><a href="#">Regisztráció</a></li>
              <li><a href="/gallery/create">Új képgaléria</a></li>
            </ul>
          </div>
        </div>

      @yield('tartalom')
        </div>
      </div>
    </div>

    <script src="/js/jquery-2.1.4.min.js"></script>
    <script src="/js/foundation.js"></script>
    <script src="/js/app.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>





