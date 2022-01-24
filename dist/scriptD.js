function functionToggleFromTglKomor() {
  // Get the checkbox
  var checkBox = document.getElementById("toggleFromTglKomorbid");
  // Get the output text
  // var text = document.getElementById("text");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    // text.style.display = "block";
    // document.getElementById('tgl_komor').readOnly = false;
    document.getElementById('tgl_komor').setAttribute('readonly', true);
    // document.getElementById('gejala').setAttribute('disabled', true);

  } else {
    // text.style.display = "none";
    // document.getElementById('tgl_komor').removeAttribute('readonly');
    document.getElementById('tgl_komor').removeAttribute('readonly');
    // document.getElementById('gejala').removeAttribute('readonly');

  }
}

function functionToggleFormTglIndi() {
  // Get the checkbox
  var checkBox = document.getElementById("toggleFromTglIndi");
  // Get the output text
  // var text = document.getElementById("text");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    // text.style.display = "block";
    // document.getElementById('tgl_indi').readOnly = false;
    document.getElementById('tgl_indi').setAttribute('readonly', true);
    // document.getElementById('covid').setAttribute('disabled', true);

  } else {
    // text.style.display = "none";
    // document.getElementById('tgl_indi').removeAttribute('readonly');
    document.getElementById('tgl_indi').removeAttribute('readonly');
    // document.getElementById('covid').removeAttribute('disabled');

  }
}