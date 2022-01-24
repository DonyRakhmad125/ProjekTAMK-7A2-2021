function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

// $(document).ready(function() {
//   document.getElementById("uname").on('keyup', function() {
//     let empty = false;

//     document.getElementById("uname").each(function() {
//       empty = $(this).val().length == 0;
//     });

//     if (empty)
//       // document.getElementById("masuk").attr('disabled', 'disabled');
//       document.getElementById('masuk').setAttribute('disabled', true);
//     else
//       // document.getElementById("masuk").attr('disabled', false);
//       document.getElementById('masuk').setAttribute('disabled', false);

//   });
// });