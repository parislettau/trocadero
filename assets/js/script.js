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

// function openNav() {
//   var offsetHeight = document.getElementById("myTopSidebar").offsetHeight;
//   // var offsetHeight = $("#myTopSidebar").height();
//   $("body").addClass("top-sidebar-open");
//   $("body").css("margin-top", offsetHeight + "px");
//   $("#myTopSidebar").addClass("top-sidebar-open");
//   $("#nav").addClass("top-sidebar-open");
// }

// function closeNav() {
//   $("body").css("margin-top", "0");
//   $("body").removeClass("top-sidebar-open");
//   $("#myTopSidebar").removeClass("top-sidebar-open");
//   $("#nav").removeClass("top-sidebar-open");
// }

// ========================================================================================
// OPEN/CLOSE FILTER PANE
// ========================================================================================

function openNav() {
  if ($("#myTopSidebar").hasClass("top-sidebar-open")) {
    setTimeout(function () {
      $("#myTopSidebar").hide();
    }, 750);
  } else {
    $("#myTopSidebar").show();
  }

  $("#myTopSidebar").toggleClass("top-sidebar-open");
  $("body").toggleClass("filter-pane-open");
  // $(".home-articles").toggleClass("filter-pane-open");
}

function closeNav() {
  if ($("#myTopSidebar").hasClass("top-sidebar-open")) {
    setTimeout(function () {
      $("#myTopSidebar").hide();
    }, 750);
  }
  $("#myTopSidebar").removeClass("top-sidebar-open");
  $("body").removeClass("filter-pane-open");
  // $(".home-articles").removeClass("filter-pane-open");
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
