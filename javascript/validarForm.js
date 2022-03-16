const formularioRegistro = document.querySelector("#register-form");

formularioRegistro.onsubmit = (evento) => {
  var nome = document.querySelector("#register-form-name").value;
  var username = document.querySelector("#register-form-username").value;
  var password = document.querySelector("#register-form-password").value;
  var rePassword = document.querySelector("#register-form-repassword").value;

  if (nome === "") {
    evento.preventDefault();
    document.getElementById("msgAlerta").innerHTML =
      "Por favor, preencha o campo nome";
    return;
  }

  if (username === "") {
    evento.preventDefault();
    document.getElementById("msgAlertaUser").innerHTML =
      "Por favor, preencha o campo nome de Utilizador";
    return;
  }

  if (password === "") {
    evento.preventDefault();
    document.getElementById("msgAlertaPassword").innerHTML =
      "A palavra passe não pode ser vazia";
    return;
  }

  if (password !== rePassword) {
    evento.preventDefault();
    document.getElementById("msgAlertaPassword").innerHTML =
      "As palavras-passe não coincidem";
    return;
  }
};

const formularioRegistro2 = document.querySelector("#login-form");

formularioRegistro2.onsubmit = (evento) => {
  var username = document.querySelector("#login-form-username").value;
  var password = document.querySelector("#login-form-password").value;

  console.log(password);
  if (username === "") {
    evento.preventDefault();
    document.getElementById("msgAlertaUser").innerHTML =
      "Por favor, preencha o campo nome de Utilizador";
    return;
  }

  if (password === "") {
    evento.preventDefault();
    document.getElementById("msgAlertaPassword").innerHTML =
      "A palavra passe não pode ser vazia";
    return;
  }
};
