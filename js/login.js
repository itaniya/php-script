$(document).ready(function () {
  $("#loginApp").on("click", function (e) {
    e.preventDefault();

    const uname = $("#username").val();
    const upass = $("#password").val();

    let arr = {
      username: uname,
      password: upass
    };

    $.ajax({
      url: "ajax/ajax-login.php",
      type: "POST",
      data: JSON.stringify(arr),
      contentType: "application/json; charset=utf-8",
      dataType: "json",
      async: false,

      success: function (resp) {
        // const json_resp = JSON.parse(resp);

        if (resp.status == "success") {
          $("#loginForm").trigger("reset");
          window.location.replace(resp.return_url);
        } else {
          swal("login", resp.msg, resp.status);
        }
      },

      error: function () {
        swal("login", "Endpoint Failure", "error");
      }
    }); // Ajax End
  }); // Click Trigger End
}); // Document End
