$(document).ready(function() {	
    $("#register_form").submit(function(e) {
        e.preventDefault();
        $.showLoading({name: 'line-scale'});  
        let data = {
            _token: $('meta[name="csrf-token"]').attr('content'),
            name: $("[name='name']").val(),
            email: $("[name='email']").val(),
            password: $("[name='password']").val(),
            password_confirmation: $("[name='password_confirmation']").val()
        }
        if (data.password !== data.password_confirmation) {
            $.hideLoading();
            toastr.error("The password field should be same with the confirm password field.", "Warning");
        } else {
            $.ajax({
                url: `${baseUrl}/register`,
                type: "POST",
                data: data
            }).then(function(result) {
                $.hideLoading();
                if (result.error) {
                    toastr.error(error, "Warning");
                } else {
                    toastr.success("You have registered successfully.", "Success");
                    setTimeout(function() {
                        location.href = baseUrl + '/login'
                    }, 1500);
                }
            }, function(err) {
                $.hideLoading();
                toastr.error(err.responseText, "Warning");
            });
        }
    })
});