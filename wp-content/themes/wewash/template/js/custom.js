var $ = jQuery;

$(document).ready(function () {
  $("#collapse1").addClass("show");
  $(" .accordion-item button").attr("aria-expanded","false");
  $(" .accordion-item:first-child button").attr("aria-expanded","true");
  $(".fourth-section-slider").slick({
    autoplay: false,
    dots: true
  });
});
