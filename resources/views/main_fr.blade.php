<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Téléchargez vos vidéos Tik Tok préférés</title>
    <meta name="description" content="Téléchargez facilement vos vidéos Tik Tok favorites en mp3 ou en mp4.">
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
            <h1 id="main-title">Téléchargez vos vidéos Tik Tok préférés sous différents formats</h1>
            <p id="main-para">Tiktok-downloader.com est un outil qui vous permet de télécharger facilement vos vidéos Tik Tok/Musicaly favorites. Vous pouvez télécharger vos vidéo en mp4 ou en mp3.</p>
        </div>
        <div class="search-bar-container container text-center">
                <div class="row search-bar-row">
                        <div class="col-sm-9 columns">
                            <input type="search" placeholder="Donner l'url vidéo" id="search-bar">
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
                <div class="col-sm-6 col-centered text-right" id="video-container">
                    <video id="tiktok_video" width="80%" controls>
                        <source type="video/mp4" src="http://m-v16.akamaized.net//10503f67224fca7b63c3cb762a7586a4//5c06219a//video//n//v0102//421ed2443a0348e6b2abd0a9c0b15d4c//?rc=amdmZmtza2x2aDMzOzgzM0ApQHRAbzdEMzU0NTM0NDw0OzY1OzNAKXUpQGczdylAZmV6ZXpvZnZwZjY1QHItcWxmY2Bmcl8tLTMvNHNzNW8jbyMxNC8zNS8uLS0uMS4tLi4vaTpiLW8jOmAtbyNiK2IrXmZyOiMwLl4%3D">
                    </video>
                </div>
                <div class="col-sm-6 col-centered text-center">
                    <a id="downloadbutton" class="button-class" type="button"><i class="fas fa-download"></i> Vidéo</a>
                    <a id="downloadbuttonMP3" class="button-class" type="button"><i class="fas fa-headphones"></i> Musique</a>
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