// whatsapp.js
const formulario = document.getElementById("formularioWhatsapp");

formulario.addEventListener("submit", function(event) {
  event.preventDefault(); 

  const nombre = document.getElementById("nombre").value;
  const correo = document.getElementById("correo").value;
  const asunto = document.getElementById("asunto").value;
  const mensaje = document.getElementById("mensaje").value;

  const mensajeWhatsapp = `Hola! Me llamo ${nombre} y mi correo es ${correo}. Te escribo para consultar sobre ${asunto}. ${mensaje}`;
  const enlaceWhatsapp = `https://api.whatsapp.com/send?phone=5492284721873&text=${encodeURIComponent(mensajeWhatsapp)}`;

  window.location.href = enlaceWhatsapp;
});
