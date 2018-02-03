<?php
$titles_select = "SELECT * FROM hc_misc";
$titles_result = $link->query($titles_select) or die($link->error);
$titles_row = array();
$titles_result->data_seek(0);
$titles_row[0] = $titles_result->fetch_array(MYSQLI_ASSOC);
?>
<div class="page-title-cont page-title-large page-title-img pt-250" style="background-image: url(assets/img/blogtitle.jpg)">
    <div class="relative container align-left">
        <div class="row">

            <div class="col-md-8">
                <h1 class="page-title text-white"><?php echo $titles_row[0]['blogTitleSite']; ?></h1>
                <div class="page-sub-title font-poppins text-white">
                    <?php echo $titles_row[0]['blogSubtitleSite']; ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="breadcrumbs font-poppins ">
                    <a class="a-inv text-white" href="index-2.html">Homecubic</a><span class="slash-divider">/</span><span class="bread-current text-white">Blog</span>
                </div>
            </div>
        </div>
    </div>
</div>