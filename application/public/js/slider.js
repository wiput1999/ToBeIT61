$(document).ready(function() {
  setInterval(rotateImages, 4000);
});

function rotateImages(){
  $(".photo-show").animate({marginLeft: "-400px"}, 1000).delay(4000);

  $(".photo-show").animate({marginLeft: "-800px"}, 1000).delay(4000);

  $(".photo-show").animate({marginLeft: "0px"}, 1000).delay(4000);
}
