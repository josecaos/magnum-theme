jQuery(document).ready(()=>{

  var sections=jQuery('.hm-landing .container > div');
  var animateOnLoad=function(){
    jQuery(document).ready(function(){
      setTimeout(function(){
        sections.each(function(i,e){
          jQuery(this).addClass('show');
        })
      },1000)
    })
  }
  var animateOnMouseMove=function(){
    jQuery(sections[0]).mousemove(function(e){
      var xMove = (e.pageX * 1 / 940);
      var yMove = (e.pageY * 1 / 1222);
      jQuery(sections[0]).css({
        '-webkit-transform' : 'translate(calc(-50% - ' + xMove + 'px), calc(-50% - ' + yMove + 'px)',
        '-moz-transform'    : 'translate(calc(-50% - ' + xMove + 'px), calc(-50% - ' + yMove + 'px)',
        '-ms-transform'     : 'translate(calc(-50% - ' + xMove + 'px), calc(-50% - ' + yMove + 'px)',
        '-o-transform'      : 'translate(calc(-50% - ' + xMove + 'px), calc(-50% - ' + yMove + 'px)',
        'transform'         : 'translate(calc(-50% - ' + xMove + 'px), calc(-50% - ' + yMove + 'px)'
      });

    });
  }
  var init=function(){
    animateOnLoad();
    // animateOnMouseMove();
  }
  init();
//
})
