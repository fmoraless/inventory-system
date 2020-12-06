/*==============================
* SUBIENDO FOTO USUARIO
* =============================*/

$(".nuevaFoto").change(function() {
    var imagen = this.files[0];
    // console.log("imagen", imagen);

    if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){
        $(".nuevaFoto").val("");

        swal({
           title: "error al subir imagen",
           text: "La imagen debe estar en formato JPG o PNG",
           type: "error",
           confirmButtonText: "Cerrar"
        });
    }else if (imagen["size"] > 2000000){
        $(".nuevaFoto").val("");

        swal({
            title: "error al subir imagen",
            text: "La imagen debe pesar mas de 2 MB",
            type: "error",
            confirmButtonText: "Cerrar"
        });
    }else{
        var datosImagen = new FileReader();
        datosImagen.readAsDataURL(imagen);

        $(datosImagen).on("load", function(event) {
            var rutaImagen = event.target.result;
            $(".previsualizar").attr("src", rutaImagen);
        })
    }
})