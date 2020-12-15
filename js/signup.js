$(document).ready(function () {
  $("#signUpFormSubmit").on("click", function (e) {
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
      contentType: "application/json; charset=utf-8",
      dataType: "json",
      async: false,

      success: function (resp) {
        // const json_resp = JSON.parse(resp);

        if (resp.status == "success") {
          swal("Signup", resp.msg, resp.status).then(function () {
            $("#signUpForm").trigger("reset");
            window.location.replace(resp.return_url);
          });
        } else {
          swal("Signup", resp.msg, resp.status);
        }
      },

      error: function () {
        swal("Signup", "Endpoint Failure", "error");
      }
    }); // Ajax End
  }); // Click Trigger End
}); // Document End