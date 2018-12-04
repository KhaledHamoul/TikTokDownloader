$(document).ready(function(){


    var $loading = $('#main-loader').hide();
    var $result_container = $('#result-container').hide();
    var $url_text_container = $('.url-text-container');
    var $url_text_response = $('#url-text-response');
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
                      $('#downloadInput').val(result.video);
                      console.log(result.video);
                      if(result.video === ''){
                        $url_text_response.text('Could not retrieve video from url');
                        $url_text_container.show().delay(5000).fadeOut();
                      }else{
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

    $('#main-loader')
    .hide()  // Hide it initially
    .ajaxStart(function() {
        $(this).show();
    })
    .ajaxStop(function() {
        $(this).hide();
    });


    $('#downloadbutton').click(function(e){
        $('#download_form').submit();
    })

  });