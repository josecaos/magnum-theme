jQuery(document).ready(()=>{

var initListeners=function(){
  var buttons=jQuery('.slider-titles li');
  var elements=jQuery('.slider-elements');
  buttons.on('click', function(e){
    e.preventDefault();
    var that=jQuery(this);
    buttons.removeClass('active');
    that.addClass('active');
    elements.children().removeClass('active');
    jQuery(elements.children()[(that.index())]).addClass('active');
    //
    // if(jQuery(window).width > 720) {
    //
    //   jQuery("html, body").animate(
    //     {scrollTop:jQuery(".slider-elements").offset().top},
    //     500
    //   );
    // } else {
    //   jQuery("html, body").animate(
    //     {scrollTop:jQuery(".slider-elements").offset().bottom},
    //     500
    //   );
    // }
  })
}
var init=function(){
  initListeners();
}

init()

slider()
})


function slider() {
  var initCarrousel=function(){
    var carrousel=jQuery('.carrousel');
    carrousel.slick({
      autoplay : true,
      arrows : false,
      dots: true,
    });
  }
  var init=function(){
    initCarrousel();
  }
  init()
}
