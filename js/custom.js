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
  })
}
var init=function(){
  initListeners();
}
init();

})
