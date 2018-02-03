
<div id="prov" class="page-section p-100-cont bg-gray">
    <div class="container">
        <div class="row ">
            <div class="proveedoresslider owl-carousel" >
                <?php
                $menu_select = "SELECT idProv,photoProv,nameProv,statusProv FROM hc_prov ";
                $menu_result = $link->query($menu_select) or die($link->error);
                $idlist = '';
                while ($menu_row = $menu_result->fetch_array(MYSQLI_BOTH)) {
                    if ($menu_row['statusProv'] == 1) {
                        echo '<div class="item text-center"><img class="proveedores_img" src="assets/img/prov/' . $menu_row['photoProv'] . '.png" alt="client"></div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>