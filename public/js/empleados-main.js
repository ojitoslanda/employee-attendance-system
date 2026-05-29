document.addEventListener("DOMContentLoaded", () => {
  const botonEliminar = document.querySelectorAll(".btn-eliminar");
  botonEliminar.forEach(function (elementos) {
    // console.log(elementos)
    elementos.addEventListener("click", function () {
      let id_empleadito = elementos.dataset.id;
      //alert(id_empleadito);
      //UTILIZAMOS FETCH PARA ENVIAR EL ID AL BACK-END
    // =============== INICIO FETCH ===============
        fetch(BASE_URL + "/asistencias/registradito", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: "id_empleadito=" + idEmpleado,
        }).then(function (respuesta) {
            return respuesta.json();
        }).then(function (datos) {

        });
    // =============== FINAL FETCH ===============
    });
  });
});
