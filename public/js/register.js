document.getElementById("registerForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const fullname = document.getElementById("fullname").value;
  const email = document.getElementById("email").value;
  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;
  const confirmPassword = document.getElementById("confirm-password").value;

  if (password !== confirmPassword) {
    alert("Kata sandi tidak cocok!");
    return;
  }

  // Simpan sementara ke localStorage
  const userData = { fullname, email, username, password };
  localStorage.setItem("userData", JSON.stringify(userData));

  alert("Pendaftaran berhasil! Silakan login.");
  window.location.href = "login.html";
});
