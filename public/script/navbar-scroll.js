$(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $nav.togggleClass("scrolled", $(this).scrollTop() > nav.height());
  });
});
