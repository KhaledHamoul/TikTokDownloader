$(document).ready(function(){


    var $loading = $('#main-loader').hide();
    var $result_container = $('#result-container').hide();
    var $url_text_container = $('.url-text-container');
    var $url_text_response = $('#url-text-response');
    var $first_load = true;
    $(document)
    .ajaxStart(function () {
        $loading.show();
        $result_container.hide();
        $url_text_container.hide();
    })
    .ajaxStop(function () {
        $loading.hide();
    });

    $('#ajaxSubmit').click(function(e){
      if($('#search-bar').val().startsWith('http://vm.tiktok.com/')){
        if($('#search-bar').val() === 'http://vm.tiktok.com/'){
            $url_text_response.text('Please specify the video link');
            $url_text_container.show().delay(5000).fadeOut();
        }
        else{
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
              });
              $.ajax({
                  url: '/getvideo',
                  type : 'POST',
                  data: {
                      page: $('#search-bar').val()
                  },
                  dataType: 'JSON',
                  success: function(result){
                      console.log(result);
                      var formatted_video_link = 'https://' + result.video.replace(/\\/g,'/');
                      var formatted_cover_link = 'https://' + result.cover.replace(/\\/g,'/');
                      $('#downloadInput').val(formatted_video_link);
                      if(result.video === ''){
                        $url_text_response.text('Could not retrieve video from url');
                        $url_text_container.show().delay(5000).fadeOut();
                      }else{
                        if($first_load === true){
                            $first_load = false;
                            var video = $('<video />', {
                                id: 'tiktok_video',
                                src: formatted_video_link,
                                type: 'video/mp4',
                                width: '80%',
                                controls: true
                            });
                            video.prependTo($('#video-container'));
                        }else{
                            $('#tiktok_video').remove();
                            var video = $('<video />', {
                                id: 'tiktok_video',
                                src: formatted_video_link,
                                type: 'video/mp4',
                                width: '80%',
                                controls: true
                            });
                            video.prependTo($('#video-container'));
                        }
                        if(result.song.indexOf('original sound') >= 0){
                            $('#cover_container').hide();
                            $('#download_listen_container').hide();
                            $('#normal_container').show();
                        }else{
                            $('#tiktok_user').text('posted by:' + result.user);
                            $('#tiktok_song_author_song').text(result.author + ': ' + result.song);
                            $('#tiktok_song_cover').attr("src",formatted_cover_link);
                            $('#cover_container').show();
                            $('#download_listen_container').show();
                            $('#normal_container').hide();
                        }
                        $('#result-container').show();
                      }
                  },
                  error: function(jqXHR, textStatus, error){
                      console.log(error);
                      $url_text_response.text('Could not retrieve video from url');
                      $url_text_container.show().delay(5000).fadeOut();
                  }
              });
        }
      }
      else{
        if($('#search-bar').val() === 'http://vm.tiktok.com'){
            $url_text_response.text('Please specify the video link');
            $url_text_container.show().delay(5000).fadeOut();
        }else{
            $url_text_response.text('Please enter a valid tiktok url');
            $url_text_container.show().delay(5000).fadeOut();
        }
      }
    });


    $('#downloadbutton').click(function(e){
        $('#download_form').submit();
    })

    $('#downloadbuttonsecondary').click(function(e){
        $('#download_form').submit();
    })

  });