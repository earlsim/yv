btnEffect.init();
var buttonRequest = $(".js-sender");
buttonRequest.on("click", function (e) {
    e.preventDefault();
    $(".error").remove();

    var fields = {};
    $("#form-request").find(":input").each(function () {
        fields[this.name] = $(this).val();
    });
    var dataObj = {fields: fields};
    var title = $(".js-event-title").text();
    dataObj.fields.event = title;
    BX.ajax({
        url: "/add_form_result.php",
        data: dataObj,
        method: 'POST',
        dataType: 'json',
        async: true,
        processData: true,
        timeout: 30,
        onsuccess: function (data) {
            if (data.status == "ok") {
                $(".inner__form").text("");
                $(".inner__form").append($( "<div class='success'>"+data.message+"</div>" ));
                $.fancybox.update();
            } else {
                $("#form-request").append($( "<div class='error'>"+data.message+"</div>" ));
                $(".error").focus();
                $.fancybox.update();
            }
        }
    });
})