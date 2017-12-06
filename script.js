

  $(document).ready(function(){


      $('.btn').on('click', function(event){
          event.preventDefault();
          var row = '<div class="row-box-item">'+
                      '<a class="rem-btn fa fa-times" href="#">'+

                      '</a>'+
                    '</div>';
          $('.row-box').append(row);

          $('.rem-btn').on('click', function(event){
            event.preventDefault();
            $(this).closest('.row-box-item').remove();
          });

      });

  });
