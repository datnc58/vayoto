$(function() {

    $('input[type=radio][name=option]').change(function() {
        $("input[name='option']").parent().removeClass("selectedOption");
        $("input[name='option']:checked").parent().addClass("selectedOption");
        // console.log($("input[name='ad_caroserie']:checked").val());
    });
});
