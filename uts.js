function login()
{
  var email = document.getElementById("email");
  var password = document.getElementById("pwd");

  if (email.value == "suki" && password.value == "suki")
  {
    alert("Anda BERHASIL login!");
    window.location.replace("index.php");
  }
  else
  {
    alert("Anda GAGAL login!");
  }
}