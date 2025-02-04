function validarCorreo(event) {
    var correo = document.getElementById("email").value;
    // Regex for email with a TLD after the dot (.)
    var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var formulario = document.querySelector(".formulario-registro");
    var errorMensaje = document.getElementById("error-mensaje");
  
    if (!regex.test(correo)) {
      formulario.classList.add("error");
      errorMensaje.style.display = "block";
      errorMensaje.textContent = "El correo electrónico debe tener un dominio válido después del punto (.)";
      event.preventDefault();
      return false;
    } else {
      formulario.classList.remove("error");
      errorMensaje.style.display = "none";
    }
    return true;
  }
  $(document).ready(function() {
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
  
      if (idioma == "ES") {
        $(".cambio_idioma_EN").hide();
        $(".cambio_idioma_ES").show();
      } else {
        $(".cambio_idioma_ES").hide();
        $(".cambio_idioma_EN").show();
      }
    }
  });