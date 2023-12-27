if (window.history.replaceState) {
    window.history.replaceState(null,null,window.location.href)
    
}

function eliminar(){
    var respuesta = confirm("Estas seguro de que quieres eliminar el vehiculo?");
    return respuesta;
}