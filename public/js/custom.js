
// jssor slider js start

jQuery(document).ready(function ($) {

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*responsive code end*/
        });

// jssor slider js end
// function for date picker
  $( function() {
    $( "#datepicker" ).datepicker({
        changeMonth: true,
        changeYear: true,
        maxDate: '+0d',
        yearRange: '1920:2010',
        
        onSelect: function(value, ui) {
        var today = new Date(),
            dob = new Date(value),
            age = new Date(today - dob).getFullYear() - 1970;
            $('span#age').css("display", "block"); 
  $('#age').text(age+"years old.");
           
        }
         
    });     
      jQuery(document).ready(function ($) {
          
                $('span#age').css("display", "none");
      
      });
      
  } );
