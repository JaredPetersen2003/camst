$(document).ready(function(){
    $(".dropdown-toggle").dropdown();
    $(window).scroll(function(){
      if (document.body.scrollTop >= 200 || document.documentElement.scrollTop >= 200 ) {
            $(".navbar-custom").css({"background-color":"#002650"});
            $(".navbar").css({"-webkit-box-shadow":"0px 0px 4px 1px rgba(0, 0, 0, 0.74)"});
            $(".navbar").css({"-moz-box-shadow":"0px 0px 4px 1px rgba(0, 0, 0, 0.74)"});
            $(".navbar").css({"box-shadow":"0px 0px 4px 1px rgba(0, 0, 0, 0.74)"});
  
        }
        else{  
            $(".navbar-custom").css({"background-color":"transparent"});
            $(".navbar").css({"-webkit-box-shadow":"0px 0px 0px 0px"});
            $(".navbar").css({"-moz-box-shadow":"0px 0px 0px 0px"});
            $(".navbar").css({"box-shadow":"0px 0px 0px 0px"});
        }
  
    })
  })