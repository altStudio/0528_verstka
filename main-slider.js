
jQuery(document).ready(function(){

    $('.ways-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        speed: 800,
        fade: true,
        asNavFor: '.ways-slider-nav',
        responsive: [
    {
      breakpoint: 480,
      settings: {
        asNavFor: false
      }
    }
  ]
    });
    $('.ways-slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.ways-slider',
        dots: false,
        arrows: false,
        centerMode: false,
        focusOnSelect: true,
        infinite: true,
        variableWidth: true,
    });

    // $('.road-map-slider').slick({
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     dots: false,
    //     arrows: false,
    //     speed: 1000,
    //     infinite: false,
    //     variableWidth: true
    // });

    // road slider

    // work in progress - needs some refactoring and will drop JQuery i promise :)
    const instance = $("#roadmap");
    $.each( instance, function(key, value) {

        let box = $(instance[key]).find(".road-map-slider"),
            x = 0,
            mx = 0,
            maxScrollWidth = box[0].scrollWidth - (box[0].clientWidth / 2) - (box.width() / 2);

        $(box).on({
            mousemove: function(e) {
                let mx2 = e.pageX - this.offsetLeft;
                if(mx) this.scrollLeft = this.sx + mx - mx2;
            },
            mousedown: function(e) {
                this.sx = this.scrollLeft;
                mx = e.pageX - this.offsetLeft;
            }
        });

        $(document).on("mouseup", function(){
            mx = 0;
        });

    });
});