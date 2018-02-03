<?php
$titles_select = "SELECT * FROM hc_misc";
$titles_result = $link->query($titles_select) or die($link->error);
$titles_row = array();
$titles_result->data_seek(0);
$titles_row[0] = $titles_result->fetch_array(MYSQLI_ASSOC);
?>
<div class="bg-sl1 p-140-cont ">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-12"><h3 class="sl1-text"><?php echo $titles_row[0]['fraseSite']; ?></h3>
            </div>
            <div class="col-md-offset-1 col-md-4 col-sm-offset-7 col-sm-5 col-xs-offset-5 col-xs-7 mt-40 mb-20">
                <img src="assets/img/frase/firma.png" alt="img">
            </div>
        </div>
    </div>
</div>