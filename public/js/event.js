$(document).on("click", ".box-slider-each-element-event>.card>.card-body>button", function(e) {
    e.preventDefault();
    var slug = $(this).data("slug");
    var id = $(this).data("id");
    window.location.href = '/su-kien/chi-tiet-' + id + '/' + slug + '.html';
})