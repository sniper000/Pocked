//Register
$("#registerSubmit").click(function(e) {
    e.preventDefault();
    var mail = $("#newMail").val();
    var pass = $("#newPass").val();
    var name = $("#newName").val();
  
    if (mail != null && pass != null) {
      $.ajax({
        url: "php/register.php",
        type : 'post',
        data : {
            mail: mail,
            password: pass,
            name: name
        },
        success: function(data)
         {
            if (data === 'success') {
              $('#newMail').removeClass("is-invalid");
              $('#newPass').removeClass("is-invalid");
              $('#newName').removeClass("is-invalid");
                $('.modal-title').html("The registration was a success! Log-in with your credentials.");
                location.reload();
            }
            else if (data === 'alreadyExists'){
              $('.modal-title').html("Error: this email is alredy registered!");
              $('#newMail').addClass("is-invalid");
              $('#newName').removeClass("is-invalid");
              $('#newPass').removeClass("is-invalid");
            } else if (data === 'nullFields') {
                $('#newMail').addClass("is-invalid");
                $('#newPass').addClass("is-invalid");
                $('#newName').addClass("is-invalid");
                $('.modal-title').html("Error: some fields are empty!");
                
            }  else {
                alert('Uh oh! Something went wrong! Please, send us this error log to our email: pockedsap@gmail.com ( ' + data + ' )');
            }
         }
        });
    }
  });