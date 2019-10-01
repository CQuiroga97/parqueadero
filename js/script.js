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
function ocuparLugar(slot, parqueadero){
    placa = prompt("Digite la placa del vehiculo", "");
    var data = new FormData();
    data.append("slot", slot);
    data.append("placa", placa);
        $.ajax({
            type: 'POST',
            url: 'ocuparSlot.php',
            contentType: false,
            processData: false,
            data: data,
            success: function(datos) {
                alert(datos);
               mostrarSlots(parqueadero);

            }
        });
}
function despejarSlot(placa, slot, parqueadero){
    if (confirm("Entregar vehiculo "+placa)) {
        var data = new FormData();
        data.append("slot", slot);
        data.append("placa", placa);
            $.ajax({
                type: 'POST',
                url: 'despejarSlot.php',
                contentType: false,
                processData: false,
                data: data,
                success: function(datos) {
                    alert(datos);
                   mostrarSlots(parqueadero);
    
                }
            });
    }
    
}