document.getElementById('loginForm').addEventListener('submit', function(event) {
  event.preventDefault(); // Evita que el formulario se envíe

  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;

  // Verifica las credenciales
  var authenticated = users.some(function(user) {
    return user.username === username && user.password === password;
  });

  if (authenticated) {
    // Redirige al usuario a la página principal ('index.html') después de iniciar sesión correctamente
    window.location.href = 'index.html';
  } else {
    alert('Credenciales incorrectas. Inténtalo de nuevo.');
  }
});
