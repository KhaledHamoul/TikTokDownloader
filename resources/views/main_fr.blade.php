<!DOCTYPE html>
<html>
@include('includes.head')
<body>
    <div id="cover-screen"></div>
    <!-- Logo -->
    <section class="container">
        <div class="logo-container text-center">
            <img class="d-block mx-auto" src="{{asset('images/header.svg')}}" id="logo" alt="">
        </div>
    </section>
    <!-- Search Bar-->
    <section class="container search-bar-global-container text-center">
        <div class="title-container">
            <h1 id="main-title">Téléchargez vos vidéos Tik Tok préférés sous différents formats</h1>
            <p id="main-para">Tiktok-downloader.com est un outil qui vous permet de télécharger facilement vos vidéos Tik Tok/Musicaly favorites. Vous pouvez télécharger vos vidéo en mp4 ou en mp3.</p>
            <a href="https://youtu.be/WiErQpuytqQ" class="text-info" id="howto" target="_blank">Comment télécharger?</a>
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
                    <p class="text-danger" id="url-text-response">Url Invalide</p>
                </div>
                <div class="loader" id="main-loader"></div>
            </div>
        </div>
        <div id="result-container">
            <div class="row">
                <div class="col-sm-6 order-3 order-sm-1 text-center" id="video-container">
                </div>
                <div class="col-sm-6 order-1 order-sm-2 text-center" id="normal_container">
                    <a id="downloadbutton" class="button-class" type="button"><i class="fas fa-download"></i> Télécharger MP4</a>
                </div>
                <div id="cover_container" class="col-sm-6 order-sm-3 text-center">
                        <div class="row">
                            <div class="col-sm-12 order-2 order-sm-1">
                                <!-- Card Narrower -->
                                <div class="card card-cascade narrower">
                                    <div class="row">
                                        <div class="col-sm-12 order-2 order-sm-1">
                                            <!-- Card image -->
                                            <div class="view view-cascade overlay">
                                                <img id="tiktok_song_cover" class="card-img-top" src="" alt="Card image cap">
                                                <a>
                                                <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 order-1 order-sm-2">
                                            <!-- Card content -->
                                            <div class="card-body card-body-cascade">
                                                <!-- Label -->
                                                <span class="pink-text pb-2 pt-1" id="music-label"><i class="fa fa-music"></i> Music</span>
                                                <!-- Title -->
                                                <span id="tiktok_song_author_song" class="font-weight-bold card-title"></span>
                                                <!-- Text -->
                                                <p id="tiktok_user" class="card-text"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 order-1 order-sm-2" id="download_listen_container">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <a id="downloadbuttonsecondary" class="button-class-secondary" type="button"><i class="fas fa-download"></i> Télécharger MP4</a>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <a id="listenbutton" class="button-class-secondary" type="button"><i class="fas fa-music"></i> Ecouter MP3</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    @include('includes.scripts')
</body>
</html>