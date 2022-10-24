$(document).on("submit", "#form-order-ticket", function(e) {
    e.preventDefault();
    AjaxSetup();
    $.ajax({
        url: "/dat-ve",
        type: "post",
        data: $(this).serialize(),
        success: function(data) {
            if (data.status == 200) {
                window.location.href = '/thanh-toan';
            }
        }
    })
})
$(document).on("click", ".btn-chooser-calendar", function(e) {
    e.preventDefault();
    $('input[id="date-use"]').focus();

})