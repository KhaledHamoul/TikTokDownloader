<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TikTok Downloader</title>
    <meta name="description" content="A website that allows you to download tiktok videos on mp4, mp3 formats">
    <link rel="icon" href="{{asset('images/logo.svg')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
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
            <h1 id="main-title">Online TikTok Video Downloader</h1>
            <p id="main-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras purus nisi, euismod id tincidunt eu, feugiat id elit. Nunc imperdiet placerat fermentum. Maecenas nec egestas nisi. Ut ex diam, finibus et mi at, venenatis pulvinar sem.</p>
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
            <div class="col-sm-12 text-center result" id="result-container">
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
    <footer class="text-center">
        TIKTOK DOWNLOADER 2018
    </footer>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>