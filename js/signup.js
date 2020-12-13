$(document).ready(function () {
    $("#submit").on("click", function (e) {
        e.preventDefault();

        const uname = $("#username").val();
        const upass = $("#password").val();
        const ucpass = $("#cpassword").val();

        let arr = { 
            uname: uname,
            upass: upass,
            ucpass: ucpass
             };

        $.ajax({
            url: "submit.php",
            type: "POST",
            data: JSON.stringify(arr),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            async: false,

            // success: function (response) {
            //     const resp = JSON.parse(response);
            //     if (resp.status == "success") {
            //       window.location.replace(resp.return_url);
            //     } else {
            //       sweetAlert("Dashboard Login", resp.reason, resp.status);
            //     }
            //   },
        
            //   error: function () {
            //     sweetAlert("Dashboard Login", "Endpoint Failure", "error");
            //   }

        })// Ajax End
    }) // save-user-data Click End
}) // Document End