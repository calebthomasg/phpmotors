<? php
//show password function

function showpassword(){
    $password = document.getElementById("myInput");
  if ($password.type === "password") {
    $password.type = "text";
  } else {
    $password.type = "password";
  }
}
showpassword();