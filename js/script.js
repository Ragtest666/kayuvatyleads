function validarCorreo(event) {
  var emailEs = document.getElementById("email_es");
  var emailEn = document.getElementById("email_en");

  // Determinar cuál input está visible
  var correo = emailEs.style.display === "none" ? emailEn.value : emailEs.value;

  var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  var errorMensaje = document.getElementById("error-mensaje");

  if (!regex.test(correo)) {
    errorMensaje.style.display = "block";
    errorMensaje.textContent = "El correo electrónico debe ser válido.";
    event.preventDefault();
    return false;
  } else {
    errorMensaje.style.display = "none";
  }
  return true;
}
$(document).ready(function () {
  const botonIdioma = document.getElementById('cambioIdioma');
  let idioma = localStorage.getItem("kayuvaty_language") || "ES"; // Idioma inicial: español

  establecerIdioma(idioma);

  botonIdioma.addEventListener('click', () => {
    idioma = idioma === "ES" ? "EN" : "ES";
    establecerIdioma(idioma);
    localStorage.setItem("kayuvaty_language", idioma);
  });

  function establecerIdioma(idioma) {
    botonIdioma.textContent = idioma === "ES" ? "EN" : "ES"; // Texto del botón
    var mailEs = document.getElementById("email_es");
    var mailEn = document.getElementById("email_en");

    if (idioma == "ES") {
      $(".cambio_idioma_EN").hide();
      $(".cambio_idioma_ES").show();
      mailEs.setAttribute("name", "email");
      mailEs.setAttribute("required", "true");
      mailEn.removeAttribute("name");
      mailEn.removeAttribute("required");
    } else {
      $(".cambio_idioma_ES").hide();
      $(".cambio_idioma_EN").show();
      mailEs.removeAttribute("name");
      mailEs.removeAttribute("required");
      mailEn.setAttribute("name", "email");
      mailEn.setAttribute("required", "true");
    }
  }
});
