$(document).ready(function () {
    $("div.container").fadeIn();
    $("input[type='text']").addClass("form-control");
    $("li").addClass("list-group-item d-flex justify-content-between");
    $("li div:last-child").addClass("text-muted");
    $("#total").removeClass("text-muted");
    $('hr').addClass('my-4');
    $('form>div').addClass('my-3');
    $("form input[type='text']+div").addClass("text-danger d-none");
    $("#submit").click(function () {
        $('form').css("display", 'none');
        $('form').fadeIn();
        $("form input[type='text'][id !='email'][id !='address2']").each(function () {
            $(this).next('div').toggleClass('d-none', $(this).val().trim() != '');
            $(this).toggleClass('border-success', $(this).val().trim() != '');
            $(this).toggleClass('border-danger', $(this).val().trim() == '');
        });
        $("form input[type='text'][id !='email'][id !='address2']").keyup(function () {
            $(this).next('div').toggleClass('d-none', $(this).val().trim() != '');
            $(this).toggleClass('border-success', $(this).val().trim() != '');
            $(this).toggleClass('border-danger', $(this).val().trim() == '');
        });
        $("#address2").addClass("border-success");
        var emailExval = emailEx.test($("#email").val().trim());
        $("#email").toggleClass('border-success', emailExval);
        $("#email").toggleClass('border-danger', !emailExval);
        $("#email").next('div').toggleClass('d-none', emailExval);
        $("#email").keyup(function () {
            $(this).toggleClass('border-success', emailEx.test($(this).val().trim()));
            $(this).toggleClass('border-danger', !emailEx.test($(this).val().trim()));
            $(this).next('div').toggleClass('d-none', emailEx.test($(this).val().trim()));
        })
        $('select').each(function () {
            var val = $(this).val() == 'unchoiced';
            $(this).toggleClass('border-success', !val);
            $(this).toggleClass('border-danger', val);
        });
        $('select').change(function () {
            var val = $(this).val() == 'unchoiced';
            $(this).toggleClass('border-success', !val);
            $(this).toggleClass('border-danger', val);
        })
    });

});
var emailEx = /^[a-z]([a-z 0-9 _]+)@[a-z]{2,}(\.[a-z]{2,})+$/i;