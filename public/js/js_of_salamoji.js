var slideIndex = 1;

var x = document.getElementsByClassName("slide_pic");

var intial = 0;

function plusImages(n) {

  showImages(slideIndex += n);

}

function showImages(n) {

  if (n > x.length) {slideIndex = 1}

  if (n < 1) {slideIndex = x.length} ;

  for (var i = 0; i < x.length; i++) {

    x[i].style.display = "none";
  }

  x[slideIndex-1].style.display = "block";

}

function slide (){


    if( intial < x.length ){

        intial = intial  + 1 ;

    }
    else{

        intial = 1;

    }

    for (var i = 0; i < x.length; i++) {

        x[i].style.display = "none";
      }

    x[intial-1].style.display = "block";

}

setInterval(slide , 5000);
