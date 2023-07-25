function subscribe(source) {
    //token for ajax call
    var token = $("meta[name='csrf-token']").attr("content");
    var email = "";

    if (source == "body") var email = $("#email_body").val();
    if (source == "footer") var email = $("#email_footer").val();

    if (email == "") {
        Swal.fire({
            icon: "warning",
            title: "Email field is necessary",
            showConfirmButton: false,
            timer: 1500,
        });
    } else {
        $.ajax({
            type: "POST",
            url: "subscribers",
            data: {
                email: email,
                _token: token,
            },
            success: function (response) {
                //
                Swal.fire({
                    icon: "success",
                    title: response.msg,
                    showConfirmButton: false,
                    timer: 1500,
                });
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                Swal.fire({
                    icon: "warning",
                    title: errorThrown,
                    showConfirmButton: false,
                    timer: 1500,
                });
            },
        }); //ajax end
    }
}
