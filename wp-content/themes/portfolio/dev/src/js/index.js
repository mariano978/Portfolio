document.addEventListener("DOMContentLoaded", () => {
  const enlacesNavegacion = document.querySelectorAll("nav a");
  enlacesNavegacion.forEach((enlace) => {
    enlace.addEventListener("click", (e) => {
      e.preventDefault();
    });
  });
});
