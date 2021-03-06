<?php
/////////////////////////////////////////////////////////////////////////////// PROVEEDORES MODEL
?>
<script>    
    $("#file-simple1").fileinput({
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-info",
        fileType: "jpg"
    });
    
    $(document).on("click", "#newprov", function (event) {
        event.preventDefault();
        $.when(
                $("#newprov .beforeLoad").toggle(),
                $("#newprov .loading_img").toggle(),
                $(this).attr("id", "newprov_clicked"))
                .then(function () {
                    setTimeout(function () {
                        var img = $('input[type=file]')[0].files[0];
                        var nombre = $('input[name=name_prov]').val();
                        var check = $("input[name='status_check']").val();
                        if (nombre == '') {
                            noty({text: 'No se puede cargar los campos vacios', layout: 'topRight', type: 'error'}).setTimeout(2000);
                                $("#newprov_clicked .beforeLoad").toggle();
                                $("#newprov_clicked .loading_img").toggle();
                                $("#newprov_clicked").attr("id", "newprov");
                            return;
                        }

                        var formData = new FormData();
                        formData.append('newprov', 'true');
                        formData.append('photoProv', img);
                        formData.append('nameProv', nombre);
                        formData.append('statusProv', check);

                        $.ajax({
                            url: 'assets/modules/prov/control.php',
                            type: 'POST',
                            data: formData,
                            async: false,
                            success: function (data) {
                                location.reload();
                            },
                            error: function (error) {
                                noty({text: 'Error de red, revise su conexi&oacute;n', layout: 'topRight', type: 'error'}).setTimeout(2000);
                                $("#newprov_clicked .beforeLoad").toggle();
                                $("#newprov_clicked .loading_img").toggle();
                                $("#newprov_clicked").attr("id", "newprov");
                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        });
                    }, 1000);
                });
    });
    
    $(document).on("click", ".switchcheck", function (event) {
        var value = $(".switchcheck").val();
        if (value == '1') {
            $(".switchcheck").val("0");
        }
        if (value == '0') {
            $(".switchcheck").val("1");
        }
    });
    
    $(document).on("click", "#editprov", function (event) {
        event.preventDefault();
        $.when(
                $("#editprov .beforeLoad").toggle(),
                $("#editprov .loading_img").toggle(),
                $(this).attr("id", "editprov_clicked"))
                .then(function () {
                    setTimeout(function () {
                        $("#editprov_clicked").click();
                    }, 1000);
                });
    });
    
    function notyConfirm(id) {

        noty({
            text: 'Seguro que quieres eliminar?',
            layout: 'topRight',
            buttons: [
                {addClass: 'btn btn-success btn-clean', text: 'Si', onClick: function ($noty) {
                        var formData = new FormData();
                        formData.append('deleteprov', 'true');
                        formData.append('deleteid', id);

                        $.ajax({
                            url: 'assets/modules/prov/control.php',
                            type: 'POST',
                            data: formData,
                            async: false,
                            success: function (data) {
//                                console.log(data);
                                noty({text: 'Proveedor eliminado', layout: 'topRight', type: 'success'}).setTimeout(2000);
                                setTimeout(function () {
                                    location.reload();
                                }, 2000);
                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        });
                        ;
                    }
                },
                {addClass: 'btn btn-danger btn-clean', text: 'Cancelar', onClick: function ($noty) {
                        $noty.close();
                    }
                }
            ]
        }).setTimeout(4000);
    }
</script>