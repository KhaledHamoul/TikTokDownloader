$(document).ready(function(){


    var $loading = $('#main-loader').hide();
    $(document)
    .ajaxStart(function () {
        $loading.show();
    })
    .ajaxStop(function () {
        $loading.hide();
    });

    $('#ajaxSubmit').click(function(e){
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
              $('.result-container').show();
              $('#videocover').attr('src',result.cover);
              $('#videolink').attr('href',result.video);
          },
          error: function(jqXHR, textStatus, error){
              console.log(error);
          }
      });
    });

    $('#main-loader')
    .hide()  // Hide it initially
    .ajaxStart(function() {
        $(this).show();
    })
    .ajaxStop(function() {
        $(this).hide();
    });

  });