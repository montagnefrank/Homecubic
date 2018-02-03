<div class="page-section  bg-gray">
    <div class="container">
        <div class="row mt-30">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="fes4-box wow fadeIn">

                    <div>
                        <div>
                            <h2 style="font-family:'Open Sans';font-weight:300;color:#595959;">Detalles &amp; Planos del proyecto</h2>
                        </div>
                        <?php echo $row[5]; ?>
                    </div>
                </div>
            </div>            
            <div class="col-xs-12 col-sm-8 col-md-8">
                <div class="slide_planos owl-carousel mt-10" >
                    <?php
                    $selectplanos = "SELECT * FROM hc_planosslider WHERE idPort ='" . $projectId . "' AND statusPlano = '1'";
                    $resultplanos = $link->query($selectplanos) or die($link->error);
                    while ($rowplanos = $resultplanos->fetch_array(MYSQLI_BOTH)) {
                        echo ' 
                                <div class="item text-center">
                                    <div class="post-prev-img">
                                        <a href="#"  ><img src="assets/img/planos/' . $rowplanos[2] . '.jpg" alt="img"></a>
                                    </div>
                                </div>
                           ';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>