$(document).ready(function () {
    $('[data-mask]').inputmask();
    $(".photo-upload-btn").on("click", function (event) {
        $("input[name='photo']").click();
    });

    $("input[name='photo']").on("change", function (event) {
        var photo = event.target.files[0];
        var imgSrc = URL.createObjectURL(photo);
        $(".photo-content img").attr("src", imgSrc);
    });
})