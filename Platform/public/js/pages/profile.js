$(document).ready(function() {
    $("a.upload_btn").click(function() {
        $("input[type='file']").click();
    });
    $("input[type='file'").change(function(e) {
        var photoUrl = URL.createObjectURL(e.target.files[0])
        $(".image-preview img").attr("src", photoUrl);
    })
});