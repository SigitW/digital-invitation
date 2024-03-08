$(document).ready(() => {
  console.log("tes");
  window.scrollTo({ top: 0, behavior: "smooth" });
});

var btns = $(".nav-link");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function () {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

$(window)
  .scroll(function () {
    var distance = $(window).scrollTop();
    $(".page-section").each(function (i) {
      if ($(this).position().top <= distance + 250) {
        $(".nav-item a.active").removeClass("active");
        $(".nav-item a").eq(i).addClass("active");
      }
    });
  })
  .scroll();
