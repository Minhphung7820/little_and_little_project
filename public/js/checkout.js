function formatCreditCardOnKey(event) {
    //on keyup, check for backspace to skip processing
    var code = (event.which) ? event.which : event.keyCode;
    if (code != 8)
        formatCreditCard();
    else {
        //trim whitespace from end; trimEnd() doesn't work in IE
        document.getElementById("cardNumber").value = document.getElementById("cardNumber").value.replace(/\s+$/, '');
    }

}

function formatCreditCard() {
    var cardField = document.getElementById("cardNumber");
    //remove all non-numeric characters
    var realNumber = cardField.value.replace(/\D/g, '');
    var newNumber = "";
    for (var x = 1; x <= realNumber.length; x++) {
        //make sure input is a digit
        if (isNumeric(realNumber.charAt(x - 1)))
            newNumber += realNumber.charAt(x - 1);
        //add space every 4 numeric digits
        if (x % 4 == 0 && x > 0 && x < 15)
            newNumber += " ";
    }
    cardField.value = newNumber;
}

function isNumeric(char) {
    return ('0123456789'.indexOf(char) !== -1);
}


function FormatNameCard(el) {
    var slug;

    //Lấy text từ thẻ input title 
    slug = $(el).val();
    slug = slug.toUpperCase();
    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'A');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'E');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'I');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'O');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'U');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'Y');
    slug = slug.replace(/đ/gi, 'D');
    //Xóa các ký tự đặt biệt
    // slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    //Đổi khoảng trắng thành ký tự gạch ngang
    // slug = slug.replace(/ /gi, "-");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    // slug = slug.replace(/\-\-\-\-\-/gi, '-');
    // slug = slug.replace(/\-\-\-\-/gi, '-');
    // slug = slug.replace(/\-\-\-/gi, '-');
    // slug = slug.replace(/\-\-/gi, '-');
    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox có id “slug”
    $(el).val(slug);
}
$(document).on("submit", "#form-checkout-ticket", function(e) {
    e.preventDefault();
    if ($('input[id="cardNumber"]').val().length < 19) {
        $('.wrap-icon-error-checkout').show();
        return false;
    } else if ($('input[id="cvc-cvv-card"]').val().length < 3) {
        $('.wrap-icon-error-checkout').show();
        return false;
    }
    AjaxSetup();
    $.ajax({
        url: "/thanh-toan",
        type: "post",
        data: $(this).serialize(),
        success: function(data) {
            if (data.status == 200) {
                // console.log(data.msg);
                window.location.href = '/thanh-toan-thanh-cong';
            }
        }
    })
})
$(document).ready(function() {
        $(window).click(function() {
            $('.wrap-icon-error-checkout').hide();
        })
    })
    //
var count = $('input[id="count-ticket"]').val();
for (let index = 1; index <= count; index++) {
    var qrcode = new QRCode(document.getElementById("qrcode" + index), {
        width: 100,
        height: 100
    });

    function makeCode() {
        var elText = document.getElementById("title-ticket" + index);

        if (!elText.textContent) {
            alert("Input a text");
            elText.focus();
            return;
        }

        qrcode.makeCode(elText.textContent);
    }

    makeCode();

    $("#title-ticket" + index).
    on("blur", function() {
        makeCode();
    }).
    on("keydown", function(e) {
        if (e.keyCode == 13) {
            makeCode();
        }
    });
}
$(document).on("click", "#btn-next-slide-ticket-sucess", function(e) {
    e.preventDefault();
    var numberCurrent = $('.number-page-ticket > span').text();
    numberCurrent++;

    var countEl = $('input[id="count-ticket"]').val();
    var totalPage = Math.ceil(countEl / 4);
    if (numberCurrent > totalPage) {
        numberCurrent = 1;
    }
    $('.number-page-ticket > span').text(numberCurrent)
})
$(document).on("click", "#btn-prev-slide-ticket-sucess", function(e) {
    e.preventDefault();
    var numberCurrent = $('.number-page-ticket > span').text();
    var countEl = $('input[id="count-ticket"]').val();
    var totalPage = Math.ceil(countEl / 4);
    numberCurrent--;
    if (numberCurrent == 1) {
        numberCurrent = 1;
    } else if (numberCurrent < 1) {
        numberCurrent = totalPage;
    }
    $('.number-page-ticket > span').text(numberCurrent)
})
$(document).ready(function() {
    $("#btn-dowload-ticket").click(function() {
        html2canvas(document.querySelector("#all-ticket-checkout-dowload")).then((canvas) => {
            let base64image = canvas.toDataURL('image/png');
            // console.log(base64image);
            let pdf = new jsPDF('p', 'px', [1600, 1131]);
            pdf.addImage(base64image, "png", 15, 15, 1110, 381);
            pdf.save('ve_dam_sen_park.pdf');
        })
    })
})


$(document).on("click", "#btn-send-mail-ticket", function(e) {
    e.preventDefault();
    $(".wrap-loading-send-mail").show();
    html2canvas(document.querySelector("#all-ticket-checkout-dowload")).then((canvas) => {
        let base64images = canvas.toDataURL('image/png');
        AjaxSetup();
        $.ajax({
            url: "/gui-ve-mail",
            type: "post",
            data: {
                total: $('input[id="count-ticket"]').val(),
                numpage: $('.number-page-ticket > span').text(),
                base64images: base64images
            },
            success: function(data) {
                if (data.status == 200) {
                    $(".wrap-loading-send-mail").hide();
                }
            }
        })
    })





})