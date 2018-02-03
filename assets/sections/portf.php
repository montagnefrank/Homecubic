<div id="portfol" class="page-section pt-30 pt-xxs-80">
    <div class="container">
        <div class="pt-80-b-30-cont">
            <!-- TITLE -->
            <div class="mb-10">
                <h2 class="section-title2 font-light">Modelos </h2>
            </div>
            <!-- PORTFOLIO FILTER -->                    
            <div class="pl-xxs-10">
                <ul class="port-filter font-poppins">
                    <?php
                    $selectportf = "SELECT * FROM hc_portfolio WHERE statusPort = '1'";
                    $resultportf = $link->query($selectportf) or die($link->error);
                    $i = 0;
                    while ($rowportf = $resultportf->fetch_array(MYSQLI_BOTH)) {
                        if ($i == 0) {
                            echo ' 
                            <li>
                                <a href="#" class="filter active" data-filter="*">Todos</a>
                            </li>
                           ';
                        }
                        echo ' 
                            <li>
                                <a href="#" class="filter " data-filter=".model' . $rowportf[0] . '">' . $rowportf[1] . '</a>
                            </li>
                           ';
                        $i++;
                    }
                    echo ' 
                            <li>
                                <a href="#" class="filter activo" data-filter=".modelcustom">Custom</a>
                            </li>
                           ';
                    ?>
                </ul>

            </div>

        </div>
    </div>

    <div class="relative">                 

        <!-- ITEMS GRID -->
        <ul class="port-grid port-grid-2 clearfix" id="items-grid">
            <?php
            $resultportf = $link->query($selectportf) or die($link->error);
            while ($rowportf = $resultportf->fetch_array(MYSQLI_BOTH)) {
                echo ' 
                    <li class="port-item mix model' . $rowportf[0] . '">
                        <a href="models.php?show=' . $rowportf[0] . '">
                            <div class="port-img-overlay">
                                <img class="port-main-img" src="assets/img/port/' . $rowportf[3] . '.jpg" alt="img" >
                            </div>
                            <div class="port-overlay-cont">
                                <div class="port-title-cont2">
                                    <h3>' . $rowportf[1] . '</h3>
                                    <span>' . $rowportf[2] . '</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    ';
            }
            ?>
            <!-- Item 4 -->
            <li class="port-item mix modelcustom">
                <a href="custom.php">
                    <div class="port-img-overlay">
                        <img class="port-main-img" src="assets/img/port/custom.jpg" alt="img" >
                    </div>
                    <div class="port-overlay-cont">
                        <div class="port-title-cont2">
                            <h3>Modelo Custom</h3>
                            <span>Ver m&aacute;s</span>
                        </div>
                    </div>
                </a>
            </li>

        </ul>

    </div>

</div>