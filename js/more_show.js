    $(document).ready(function() {
      $('div.demo-show2> div').hide();  
      $('div.demo-show2> h3').click(function() {
        var $nextDiv = $(this).next();
        var $visibleSiblings = $nextDiv.siblings('div:visible');
     
        if ($visibleSiblings.length ) {
          $visibleSiblings.slideUp('fast', function() {
            $nextDiv.slideToggle('fast');
          });
        } else {
           $nextDiv.slideToggle('fast');
        }
      });
    });



