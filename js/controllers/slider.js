jQuery(document).ready(()=>{
  alert("broadcast?")
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
    })
  }
  var init=function(){
    initListeners();
  }
  init();
})()ss("active"),a.addClass("active"),o.children().removeClass("active"),jQuery(o.children()[a.index()]).addClass("active"),jQuery("html, body").animate({scrollTop:jQuery(".slider-elements").offset().top},300);var t=jQuery("<a>",{class:"btn-gotop"});t.html('<img src="/wp-content/themes/magnum-theme/images/global/magnum-more.png" alt="">'),o.append(t),i(a.index())});var a=n();console.log(a),e[a].click()};!function(){e()}()}();
