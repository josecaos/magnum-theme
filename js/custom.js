jQuery(document).ready(()=>{

  // initListeners()
  slider()

  //slide for broadcast
  let obj = document.querySelector('#broadcast-cats')
  if(obj) {
    jQuery("html, body").animate(
      {scrollTop:jQuery(".slider-elements").offset().top},
      1000
    );
  }
  //

  // index about hover
  jQuery('#inicio-nosotros, #inicio-about').hover(() => {
    jQuery('.index-about-text').removeClass('hide');
    jQuery('.float-more').addClass('hide');
  },() => {
    jQuery('.float-more').removeClass('hide');
    jQuery('.index-about-text').addClass('hide');
  })

  //
})//ready

function regresa() {
  window.history.back()
}

function initLIsteners(){
  var buttons=jQuery('.slider-titles li');
  var elements=jQuery('.slider-elements');
  buttons.on('click', function(e){
    e.preventDefault();
    var that=jQuery(this);
    buttons.removeClass('active');
    that.addClass('active');
    elements.children().removeClass('active');
    jQuery(elements.children()[that.index()]).addClass('active');
    jQuery("html, body").animate(
      {scrollTop:jQuery(".slider-elements").offset().top},
      500
    );
  })
}

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
