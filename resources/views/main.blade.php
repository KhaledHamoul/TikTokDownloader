<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TicToc Converter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


</head>
<body>
    <!-- Logo -->
    <section class="container">
        <div class="logo text-center">
            <img class="d-block mx-auto" src="images/logo.png" alt="">
        </div>
    </section>
    <!-- Search Bar-->
    <section class="container search-bar-global-container text-center">
        <div class="title-container">
            <h1>Online TikTok Video Downloader</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras purus nisi, euismod id tincidunt eu, feugiat id elit. Nunc imperdiet placerat fermentum. Maecenas nec egestas nisi. Ut ex diam, finibus et mi at, venenatis pulvinar sem.</p>
        </div>
        <div class="search-bar-container container text-center">
                <div class="row search-bar-row">
                        <div class="col-sm-9 columns">
                            <input type="search" placeholder="Enter Video Link" id="search-bar">
                        </div>
                        <div class="col-sm-3 columns">
                            <button id="ajaxSubmit" class="search-bar-submit"><i class="fas fa-rocket"></i></button>
                        </div>
                </div>
        </div>
    </section>
    <!-- Results -->
    <section class="container result-container">
        <div class="row">
            <div class="col sm-12 spinner">
                <div class="loader" id="main-loader"></div>
            </div>
            <div class="col-sm-12 text-center result">
                <div class="overlay-image">
                    <img alt="" id="videocover" class="rounded mx-auto d-block img-thumbnail cover">
                    <div class="normal"></div>
                    <div class="hover">
                        <a download id="videolink" href="" type="button" class="btn btn-success download-button" target="_blank"><i class="fas fa-download"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container text-center">
            <a href="https://scontent-lga3-1.xx.fbcdn.net/v/t66.18014-6/10000000_205975130296851_7390806429063446528_n.mp4?_nc_cat=109&efg=eyJ2ZW5jb2RlX3RhZyI6Im9lcF9oZCJ9&_nc_ht=scontent-lga3-1.xx&oh=8df706823695a9c31a3049e497625a63&oe=5C686D33" download>Download</a>
            <span class="text-muted">TIKTOK</span>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Jquery -->
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>