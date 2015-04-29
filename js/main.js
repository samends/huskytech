(function( $ ) {
$('#carousel1').carousel('cycle');
$('#carousel2').carousel('cycle');
$('#carousel-employ').carousel('cycle');

$( document ).ready(function() {
	
/* Is the client using a mobile device? */
var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};
	
/* Changes tabs on software page */
      $("paper-tab").click(function(){
	  var tabContentId=this.id;
	  console.log(tabContentId);
	  	var tabContentClicked = "#software-"+tabContentId;
		$('.tabContent').css('display','none');
		$(tabContentClicked).css('display','inline');
  });
  
      $("paper-tab").on("tap",function(){
	  var tabContentId=this.id;
	  console.log(tabContentId);
	  	var tabContentClicked = "#software-"+tabContentId;
		$('.tabContent').css('display','none');
		$(tabContentClicked).css('display','inline');
  });
  
        $(".mobile-tab").click(function(){
	  var tabContentId=this.id;
	  console.log(tabContentId);
	  	var tabContentClicked = "#software-"+tabContentId;
		$('.tabContent').css('display','none');
		$(tabContentClicked).css('display','inline');
  });
  
      $(".mobile-tab").on("tap",function(){
	  var tabContentId=this.id;
	  console.log(tabContentId);
	  	var tabContentClicked = "#software-"+tabContentId;
		$('.tabContent').css('display','none');
		$(tabContentClicked).css('display','inline');
  });
  
  /* Stops images from loading on main page if on mobile device */
    if (   ($(window).width() < 982 )    &&    (isMobile.any())  )  {
        NoLoad(); // !
		console.log("I'm working");
    } else {
        loadAllTheImages();
    }
});

function loadAllTheImages() {
    $(".top-picture").each(function(){
        $(this).attr('src', $(this).attr('data-src'));
		console.log("I kept src");
    });
}
	
function NoLoad() {
    $(".top-picture").each(function(){
        $(this).removeAttr('src');
		console.log("I removed src");
    });
}

/* Postit Note Hover */

$(".postit").hover(function(e){
	$(this).removeClass('paper-shadow-bottom-z-2');
	$(this).addClass('paper-shadow-bottom-z-4');
	$(".underline",this).css('text-decoration','underline');
},function(e){
	$(this).removeClass('paper-shadow-bottom-z-4');
	$(this).removeClass('paper-shadow-bottom-z-2');
	$(".underline",this).css('text-decoration','none');
});

}(jQuery));