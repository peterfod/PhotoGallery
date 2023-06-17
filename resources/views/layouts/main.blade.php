<!DOCTYPE html>
<html>

<head>
    <title>Photo Gallery</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body, h1, h2, h3, h4, h5, h6 {
            font-family: "Raleway", sans-serif
        }
    </style>
</head>

<body class="w3-light-grey w3-content" style="max-width:1600px">

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
        <div class="w3-container">
            <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey"
                title="close menu">
                <i class="fa fa-remove"></i>
            </a>
            <img src="/fotok/cool-girl.jpg" style="width:45%;" class="w3-round"><br><br>
            <h4><b>PORTFOLIO</b></h4>
            <p class="w3-text-grey">Template by W3.CSS</p>
        </div>
        <div class="w3-bar-block">
            <a href="/" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i
                    class="fa fa-th-large fa-fw w3-margin-right"></i>FOTÓGALÉRIA</a>
            <?php
    if (!Auth::check()) {
?>
            <a href="/login" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i
                    class="fa fa-th-large fa-fw w3-margin-right"></i>Belépés</a>
            <a href="/register" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i
                    class="fa fa-th-large fa-fw w3-margin-right"></i>Regisztráció</a>
            <?php
}
else {
?>
            <a href="/gallery/create" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i
                    class="fa fa-th-large fa-fw w3-margin-right"></i>Új képgaléria</a>
            <a href="/logout" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i
                    class="fa fa-th-large fa-fw w3-margin-right"></i>Kilépés</a>
            <?php
}
?>
            <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i
                    class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a>
            <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i
                    class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
        </div>
        <div class="w3-panel w3-large">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
    </nav>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer"
        title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px">

        <!-- Header -->

        <header id="portfolio">
            @yield('fejlec')
        </header>
        <!-- First Photo Grid-->
        <div class="w3-row-padding">
            @yield('tartalom')
        </div>



        <!-- End page content -->
    </div>

    <script>
        // Script to open and close sidebar
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("myOverlay").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("myOverlay").style.display = "none";
        }
    </script>

</body>

</html>
