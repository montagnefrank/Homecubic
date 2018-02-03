<div class="page-section">
    <div class="container">
        <div class="row mt-100">
            <div class="col-md-12 mb-50">
                <?php echo $row[6]; ?>
            </div>

        </div>
    </div>
    <div class="row  bg-gray">
        <div class="col-md-6 fes12-img equal-height " >
            <div class="fes2-main-text-cont text-black">
                <div class="fes2-title-45 font-pop">
                    Materiales y<br> Acabados
                </div>
                <div class="fes2-text-cont">
                    <?php echo $row[7]; ?>
                </div>
            </div>
        </div>
        <div class=" mt-30 col-md-6 col-sm-6">
            <?php
            $selectacabado = "SELECT * FROM hc_acabados WHERE idPort ='" . $projectId . "' AND statusAcabado = '1'";
            $resultacabado = $link->query($selectacabado) or die($link->error);
            $i = 0;
            while ($rowacabado = $resultacabado->fetch_array(MYSQLI_BOTH)) {
                if ($i == 0 || $i == 2 || $i == 4 || $i == 6 || $i == 8 || $i == 10 || $i == 12 || $i == 14) {
                    echo '<div class="row">';
                }
                echo '   
                        <div class="member col-md-3 col-sm-3 wow fadeInUp">
                            <div class="member-image">
                                <img class="img-circle" src="assets/img/acabados/' . $rowacabado[3] . '.jpg" alt="img">
                            </div>
                            <h3>' . $rowacabado[2] . '</h3>
                        </div>
                     ';
                if ($i == 1 || $i == 3 || $i == 5 || $i == 7 || $i == 9 || $i == 11 || $i == 13 || $i == 15) {
                    echo '</div>';
                }
                $i++;
            }
            ?>
        </div>
    </div>
    <img src="assets/img/port/<?php echo $row[8]; ?>.jpg" alt="img" style="width:100%; max-height: 500px;">
</div>