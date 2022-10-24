$(document).on("submit", "#form-contact-us", function(e) {
    e.preventDefault();
    $(".wrap-loading-send-mail").show();
    AjaxSetup();
    $.ajax({
        url: "/lien-he/gui",
        type: "post",
        data: $(this).serialize(),
        success: function(data) {
            if (data.status == 200) {
                $(".wrap-loading-send-mail").hide();
                $(".wrap-send-mail-contact-success").show();
                $('input').val("");
                $('textarea').val("");
            }
        }
    })
})
$(document).on("click", ".btn-close-success-mail", function(e) {
    e.preventDefault();
    $(".wrap-send-mail-contact-success").hide();
})