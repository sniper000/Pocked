//Login
$("#logIn").click(function(e) {
  e.preventDefault();
  var mail = $("#mail").val();
  var pass = $("#password").val();

  if (mail != null && pass != null) {
    $.ajax({
      url: "php/checkCredentials.php",
      type : 'post',
      data : {
          mail: mail,
          password: pass
      },
      success: function(data)
       {
          if (data === 'login') {
            window.location="php/main.php";
          }
          else {
            alert('Invalid Credentials');
          }
       }
      });
  }
});

//Submit your answer
$("#submitAnswer").click(function(e) {
  e.preventDefault();
if ($("[name=checkAnswer]").is(":checked")) {
  $.ajax({
      url: "sendAnswer.php",
      type : 'post',
      data : {
          answer: $('[name=checkAnswer]:checked', "#answerForm").val(),
          question: $('#question').val()
      }, success: function(data)
      {
         if (data === 'correct') {
          $('#modalSuccess').modal('toggle');
         }
         else {
          $('#modalFail').modal('toggle');
         }
      }
      });
} else alert("Your answer is empty!");
});

$("#next").click(function(e) {
  var sum = parseInt($('#question').val(), 10) + 1;
  window.location = "main.php?opt=2&idAns=" + sum;
});

$("#back").click(function() {
  var course = $('#question').val();
  window.location = "?opt=6&course="+course;
});

$('input[type=radio]').change(function() {
  $('.card').each(function(index) {
    if($(this).hasClass('active-card')) {
      $(this).removeClass('active-card');
    }
  });
  var string = '.box_'+$('[name=checkAnswer]:checked', "#answerForm").val();
  $(string).addClass('active-card');
});


//Image Upload
$(document).ready(function (e) {
  $('#profilePicUpload').on('submit',(function(e) {
      e.preventDefault();
      var formData = new FormData(this);

      $.ajax({
          type:'POST',
          url: 'imgUpload.php',
          data:formData,
          userId: $("#idProfile").val(),
          cache:false,
          contentType: false,
          processData: false,
          success:function(data){
              console.log("success");
              location.reload();
          },
          error: function(data){
              console.log("error");
              location.reload();
          }
      });
  }));

  $("#file_input").on("change", function() {
      $("#profilePicUpload").submit();
  });
});

$("#updateName").click(function(e) {
  e.preventDefault();
  $.ajax({
    type: 'POST',
    url: 'changeName.php',
    data: {
      newName: $("#yourName").val()
    },
    success:function(data) {
      if (data === 'changeOK') {
        $('.modal-title').html("Success!");
        location.reload();
       }
       else {
        $('.modal-title').html("An error ocurred. Check your input and try again later. " + data);
       }
    }
  });
});

$("#logout").click(function(e) {
  e.preventDefault();
  $.ajax({
    type: 'GET',
    url: 'doLogout.php',
    data: {
      logout: $("#logout").val()
    }, success:function(data) {
      if (data === 'ok') {
        window.location = "../index.php";
      } else {
        alert('Uh oh! Something went wrong! Please, send us this error log to our email: pockedsap@gmail.com ( ' + data + ' )');
      }
    }
  });
});
