<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tik Tok video and mp3 downloader</title>
    <meta name="description" content="Download your favorite Tik Tok videos in a second. You can get your video in the mp3 or mp4 format.">
    <link rel="icon" href="{{asset('images/logo.svg')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- font-awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/fa.min.css')}}">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">

</head>
<body>
    <div id="cover-screen"></div>
    <!-- Logo -->
    <section class="container">
        <div class="logo-container text-center">
            <img class="d-block mx-auto" src="{{asset('images/logo.svg')}}" id="logo" alt="">
        </div>
    </section>
    <!-- Search Bar-->
    <section class="container search-bar-global-container text-center">
        <div class="title-container">
            <h1 id="main-title">Tik Tok video and mp3 downloader</h1>
            <p id="main-para">Tiktok-downloader.com is a tool that allows you to easily download your favorite Tik Tok / Musicaly videos. You can download your video in mp4 or mp3.</p>
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
    <section class="container">
        <div class="row">
            <div class="col sm-12 spinner">
                <div class="text-center url-text-container">
                    <p class="text-danger" id="url-text-response">Invalid Url</p>
                </div>
                <div class="loader" id="main-loader"></div>
            </div>
        </div>
        <div id="result-container">
            <div class="row">
                <div class="col-sm-6 text-center" id="video-container">
                </div>
                <div class="col-sm-6 text-center">
                    <a id="downloadbutton" class="button-class" type="button"><i class="fas fa-download"></i> Video</a>
                    <a id="downloadbuttonMP3" class="button-class" type="button"><i class="fas fa-headphones"></i> Song</a>
                </div>
            </div>
        </div>
        <form id="download_form" action="{{Route('download_video')}}" method="post">
            {{csrf_field()}}
            <input type="text" name="url" id="downloadInput">
            <input type="submit">
        </form>
    </section>
    <footer class="text-center">
        TIKTOK DOWNLOADER 2018
    </footer>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <!-- font-awesome -->
    <script src="{{asset('js/fa.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>