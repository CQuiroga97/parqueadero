function nuevoSlot(parqueadero){
   
    var data = new FormData();
    data.append("parquadero", parqueadero);
        $.ajax({
            type: 'POST',
            url: 'nuevoSlot.php',
            contentType: false,
            processData: false,
            data: data,
            success: function(datos) {
               mostrarSlots(parqueadero)

            }
        });
}
function mostrarSlots(id){
    $(document.getElementById("slots")).load("mostrarSlots.php", {"id": id});
}