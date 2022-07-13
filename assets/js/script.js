// $(document).ready(function() {
//     $('#top-slidenav').animate({
//         marginTop: '-380px'
//     }, 200);
//     $('#open-visit').toggle(
//         function(){
//             $('#top-slidenav').animate({
//                 marginTop: '0'
//             }, 500);
//         },
//         function(){
//             $('#top-slidenav').animate({
//                 marginTop: '380px'
//             }, 500);
//     });
//     });

function openNav() {
  // document.getElementById("myTopSidebar").style.width = "100%";
  document.getElementById("main").style.marginTop = "50vh";
  document.getElementById("myTopSidebar").style.top = "0";
}

// function TestsFunction() {
//     var T = document.getElementById("myTopSidebar");
//     T.style.display = "flex";
// }

function closeNav() {
  document.getElementById("main").style.marginTop = "0";
  document.getElementById("myTopSidebar").style.top = "-50vh";

  // setTimeout(function () {
  //   document.getElementById("myTopSidebar").style.display = "none";
  // }, 750);
}

$(document).ready(function () {
  $('input[type="checkbox"]').click(function () {
    var inputValue = $(this).attr("value");
    $("." + inputValue).toggle();
  });
});

// filter checkbox window scroll

function checkOffset() {
  var a = $(document).scrollTop() + window.innerHeight;
  var b = $("#mainFooter").offset().top;
  if (a < b) {
    $("#filterCheckbox").css("bottom", "10px");
  } else {
    $("#filterCheckbox").css("bottom", 10 + (a - b) + "px");
  }
}
$(document).ready(checkOffset);
$(document).scroll(checkOffset);

// var filterCheckbox = document.querySelector('#filterCheckbox');
// var mainFooter = document.querySelector('#mainFooter');

// function checkOffset() {
//   function getRectTop(el){
//     var rect = el.getBoundingClientRect();
//     return rect.top;
//   }

//   if((getRectTop(filterCheckbox) + document.body.scrollTop) + filterCheckbox.offsetHeight >= (getRectTop(mainFooter) + document.body.scrollTop) - 10)
//   filterCheckbox.style.position = 'absolute';
//   if(document.body.scrollTop + window.innerHeight < (getRectTop(mainFooter) + document.body.scrollTop))
//   filterCheckbox.style.position = 'fixed'; // restore when you scroll up

//   filterCheckbox.innerHTML = document.body.scrollTop + window.innerHeight;
// }

// document.addEventListener("scroll", function(){
//   checkOffset();
// });
