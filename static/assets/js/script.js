$(document).ready(function () {
  // $('input[type="checkbox"]').click(function () {
  //   var inputValue = $(this).attr("value");
  //   $("." + inputValue).toggle();
  // });

  // Lightbox
  Array.from(document.querySelectorAll("[data-lightbox]")).forEach(
    (element) => {
      element.onclick = (e) => {
        e.preventDefault();
        basicLightbox.create(`<img src="${element.href}">`).show();
      };
    }
  );
});

function openNav() {
  // document.getElementById("nav").style.marginTop = "50vh";
  document.getElementById("body").style.marginTop = "50vh";
  document.getElementById("myTopSidebar").style.top = "0";
  document.getElementById("nav").style.top = "50vh";
}

function closeNav() {
  // document.getElementById("nav").style.marginTop = "0";
  document.getElementById("body").style.marginTop = "0";
  document.getElementById("nav").style.top = "0";
  document.getElementById("myTopSidebar").style.top = "-50vh";
}

// //////////////////////////////
// filter checkbox window scroll
// //////////////////////////////
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
