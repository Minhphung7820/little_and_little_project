$(document).on("click", ".box-wrap-menu > ul > li", function(e) {
    e.preventDefault();
    var href = $(this).data('href');
    window.location.href = href;
})