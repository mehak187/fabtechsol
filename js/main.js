
// ----------responsive sidebar--------
$(document).ready(function () {
    $(".togg").click(function () {
        $(".mbl-nav").css("display", "block");
    });
});

$(document).ready(function () {
    $(".close").click(function () {
        $(".mbl-nav").css("display", "none");
    });
});

// ------search-box-on click----
$(document).ready(function(){
    $(".search-d-btn").click(function(){
        $(".search-box-d").toggle();
    });
});

// ------alert and newsletter popup----
$(document).ready(function(){
    $(".close-btn-p").click(function(){
        $(".dev-popup").hide();
    });
});

  <!--// restriction to download image--------->

    const images = document.getElementsByTagName('img');
    for (let i = 0; i < images.length; i++) {
      images[i].addEventListener('contextmenu', function(event) {
        event.preventDefault();
      });
    }




