document.addEventListener("DOMContentLoaded", () => {
    const botonEliminar = document.querySelectorAll(".btn-eliminar");
    botonEliminar.forEach(function(elementos){
        // console.log(elementos)
        elementos.addEventListener("click",function(){
            let id_empleadito = elementos.dataset.id;
            alert(id_empleadito);
        });
    });
});
