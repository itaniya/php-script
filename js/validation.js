$(document).ready(function () {
    $("#login-as-admin").on("click", function (e) {
      e.preventDefault();
  
      function sweetAlert(title, text, icon) {
        swal(title, text, icon);
      }
  
      const identifier = $("#identifier").val();
      const username = $("#username").val();
      const password = $("#password").val();
  
      let arr = {
        identifier: identifier,
        username: username,
        password: password
      };
  
      $.ajax({
        url: "",
        type: "POST",
        data: JSON.stringify(arr),
        contentType: "application/json; charset=utf-8",
        async: false,
  
        success: function (response) {
          const resp = JSON.parse(response);
          if (resp.status == "success") {
            window.location.replace(resp.return_url);
          } else {
            sweetAlert("Dashboard Login", resp.reason, resp.status);
          }
        },
  
        error: function () {
          sweetAlert("Dashboard Login", "Endpoint Failure", "error");
        }
      }); // Ajax End
    }); // #branch-edit-save Click Function End
  });