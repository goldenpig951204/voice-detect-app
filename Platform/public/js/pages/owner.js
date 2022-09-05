$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();

    $("#domain_clipboard").click(function() {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($("[name='domain']").val()).select();
        document.execCommand("copy");
        $temp.remove();
    });

    $("#token_clipboard").click(function() {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($("[name='token']").val()).select();
        document.execCommand("copy");
        $temp.remove();
    });

});