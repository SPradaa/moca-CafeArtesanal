document.addEventListener("DOMContentLoaded", () => {
  const imagenes = document.querySelectorAll('.imagen-banner');
  let indiceActual = 0;

  function cambiarImagen() {
  
    imagenes[indiceActual].classList.remove('active');

    indiceActual = (indiceActual + 1) % imagenes.length;


    imagenes[indiceActual].classList.add('active');
  }

  setInterval(cambiarImagen, 3000);
});