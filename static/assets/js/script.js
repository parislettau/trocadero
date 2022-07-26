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
  $("body").addClass("top-sidebar-open");
  $("#myTopSidebar").addClass("top-sidebar-open");
  $("#nav").addClass("top-sidebar-open");
}

function closeNav() {
  $("body").removeClass("top-sidebar-open");
  $("#myTopSidebar").removeClass("top-sidebar-open");
  $("#nav").removeClass("top-sidebar-open");
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
