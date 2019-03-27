
function checkValidate() {
    var checkStep =  parseInt($('#setValue').val());
    var flag = false;
    switch (checkStep) {
        case 1:
            if (checkValidateStep1()) {
                setStep();
                flag = true;
                return flag;
            }
            break;
        case 2:
            if (checkValidateStep2()) {
                setStep();
                flag = true;
                return flag;
            }
            break;
        case 3:
            if (checkValidateStep3()) {
                setStep();
                flag = true;
                return flag;
            }
            break;
        case 4:
            if (checkValidateStep4()) {
                setStep();
                flag = true;
                return flag;
            }
            break;
        case 5:
            if (checkValidateStep5()) {
                flag = true;
                return flag;
            }
            break;
    }

    console.log(flag);
}

function checkValidateStep1() {
    var flag = false;
    $('#VayOtoFrom input').data("title", "").removeClass("input_error");
    $('#VayOtoFrom select').data("title", "").removeClass("input_error");

    var option = $("input[name='option']:checked").val();
    var province = $('#province').val();
    var district = $('#district').val();

    if (option) {
        flag = true;
    } else {
        flag = false;
        alert('Vui lòng chọn một dịch vụ!');
    }

    if (province == '') {
        $($('#province')).addClass('input_error').attr('title', 'Vui lòng chọn một tỉnh');
        flag = false;
    }

    if (district == '') {
        $($('#district')).addClass('input_error').attr('title', 'Vui lòng chọn một thành phố / huyện');
        flag = false;
    }

    clickInputError();
    window.scrollTo(0, 0);
    return flag;
}


function checkValidateStep2() {
    var flag = true;
    return flag;
}

function checkValidateStep3() {
    var flag = false;

    var davaychua = $("input[name='davaychua']:checked").val();
    var chachamchua = $("input[name='chachamchua']:checked").val();

    if (davaychua == 0 && chachamchua == 1) {
        flag = true;
    } else if (davaychua == 1 && chachamchua == 0) {
        flag = true;
    } else {
        flag = false;
        alert('vui lòng xác nhận lại');
    }

    return flag;
}

function checkValidateStep4() {
    var flag = true;
    return flag;
}

function checkValidateStep5() {
    var flag = true;
    return flag;
}

function clickInputError() {
    $('.input_error').click(function (event) {
        $(this).removeClass('input_error');
    });
}

function setStep() {
    var checkStep =  parseInt($('#setValue').val());
    switch (checkStep) {
        case 1:
            $('#step1').css('display', 'block');
            $('#step2').css('display', 'none');
            $('#step3').css('display', 'none');
            $('#step4').css('display', 'none');
            $('#step5').css('display', 'none');
            break;
        case 2:
            $('#step1').css('display', 'none');
            $('#step2').css('display', 'block');
            $('#step3').css('display', 'none');
            $('#step4').css('display', 'none');
            $('#step5').css('display', 'none');
            break;
        case 3:
            $('#step1').css('display', 'none');
            $('#step2').css('display', 'none');
            $('#step3').css('display', 'block');
            $('#step4').css('display', 'none');
            $('#step5').css('display', 'none');
            break;
        case 4:
            var davaychua = $("input[name='davaychua']:checked").val();
            var chachamchua = $("input[name='chachamchua']:checked").val();

            $('#step1').css('display', 'none');
            $('#step2').css('display', 'none');
            $('#step3').css('display', 'none');

            if (davaychua == 0 && chachamchua == 1) { // // B2_B
                $('#step4').css('display', 'block');
                $('#step5').css('display', 'none');
            } else if (davaychua == 1 && chachamchua == 0) { // B2_b2
                $('#step4').css('display', 'none');
                $('#step5').css('display', 'block');
            }

            break;
        case 5: // B2_C
            $('#step1').css('display', 'none');
            $('#step2').css('display', 'none');
            $('#step3').css('display', 'none');
            $('#step4').css('display', 'none');
            $('#step5').css('display', 'none');
            $('#step6').css('display', 'block');
            break;
        case 6: // B3_A
            $('#step1').css('display', 'none');
            $('#step2').css('display', 'none');
            $('#step3').css('display', 'none');
            $('#step4').css('display', 'none');
            $('#step5').css('display', 'none');
            $('#step6').css('display', 'none');
            $('#step7').css('display', 'block');
            $('#step8').css('display', 'none');
            break;
        case 7: // // B3_B
            $('#step1').css('display', 'none');
            $('#step2').css('display', 'none');
            $('#step3').css('display', 'none');
            $('#step4').css('display', 'none');
            $('#step5').css('display', 'none');
            $('#step6').css('display', 'none');
            $('#step7').css('display', 'none');
            $('#step8').css('display', 'block');
            break;
    }
}

$(document).ready(function(){
    $("*").dblclick(function(e){
        e.preventDefault();
    });

    $('input[type=radio][name=option]').change(function() {
        $("input[name='option']").parent().removeClass("selectedOption");
        $("input[name='option']:checked").parent().addClass("selectedOption");
    });

    $('#prevStep').attr('disabled','disabled');

    $('#nextStep').click(function(e) {
        e.preventDefault();
        if (checkValidate()) {
            // next
            var checkStep =  parseInt($('#setValue').val());
            if (checkStep > 0) {
                checkStep = checkStep + 1;
            }

            $('#setValue').val(checkStep);
            $('#prevStep').removeAttr('disabled');
            setStep();
        }
    });

    $('#prevStep').click(function(e) {
        e.preventDefault();
        var checkStep =  parseInt($('#setValue').val());
        if (checkStep > 1) {
            checkStep = checkStep - 1;
        }

        $('#setValue').val(checkStep);
        setStep();

    });

    // step4
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value * 1000000;

    $('#income').css('width', + slider.value - 2 + '%');
    slider.oninput = function() {
        output.innerHTML = this.value * 1000000;
        $('#income').css('width', + slider.value - 2 + '%');
    }

    // step5
    var slider2 = document.getElementById("myRange2");
    var output2 = document.getElementById("demo2");
    output2.innerHTML = slider2.value * 1000000;

    $('#recommended-loan').css('width', + slider2.value - 2 + '%');
    slider2.oninput = function() {
        output2.innerHTML = this.value * 1000000;
        $('#recommended-loan').css('width', + slider2.value - 2 + '%');
    }

    $('#cars_nha').change(function() {
        var status = $('#cars_nha').val();
        if (status == 1) {
            $('.oto').removeClass('div-hidden');
            $('.nha').addClass('div-hidden');
        }
        if (status == 2) {
            $('.nha').removeClass('div-hidden');
            $('.oto').addClass('div-hidden');
        }
    });

});
