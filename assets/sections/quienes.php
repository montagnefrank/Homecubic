<?php
$query = "SELECT * FROM hc_aboutwidget ";
$result = $link->query($query) or die($link->error);
$row = array();
$result->data_seek(0);
$row[0] = $result->fetch_array(MYSQLI_NUM);
$result->data_seek(1);
$row[1] = $result->fetch_array(MYSQLI_NUM);
$result->data_seek(2);
$row[2] = $result->fetch_array(MYSQLI_NUM);
$result->data_seek(3);
$row[3] = $result->fetch_array(MYSQLI_NUM);
?>
<div id="about" class="page-section bg-gray clearfix">
    <div class="fes7-img-cont col-md-5">
        <div class="fes7-img" style="background-image: url(assets/img/quienes/fondo.jpg)"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-6 fes7-text-cont p-80-cont">
                <h1><span class="font-light"><?php echo $titles_row[0]['aboutTitleSite']; ?></span></h1>
                <p class="mb-60">
                    <?php echo $titles_row[0]['aboutSubtitleSite']; ?>
                </p>

                <div class="row">

                    <div class="col-md-6 col-sm-6">
                        <div class="fes7-box wow fadeIn" >
                            <div class="fes7-box-icon">
                                <span class="fa <?php echo $row[0][1]; ?>"></span>
                            </div>
                            <h3><?php echo $row[0][2]; ?></h3>
                            <p><?php echo $row[0][3]; ?></p>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="fes7-box wow fadeIn" data-wow-delay="200ms">
                            <div class="fes7-box-icon">
                                <span class="fa <?php echo $row[1][1]; ?>"></span>
                            </div>
                            <h3><?php echo $row[1][2]; ?></h3>
                            <p><?php echo $row[1][3]; ?></p>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6 col-sm-6">
                        <div class="fes7-box wow fadeIn" data-wow-delay="400ms">
                            <div class="fes7-box-icon">
                                <span class="fa <?php echo $row[2][1]; ?>"></span>
                            </div>
                            <h3><?php echo $row[2][2]; ?></h3>
                            <p><?php echo $row[2][3]; ?></p>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="fes7-box wow fadeIn"  data-wow-delay="600ms">
                            <div class="fes7-box-icon">
                                <span class="fa <?php echo $row[3][1]; ?>"></span>
                            </div>
                            <h3><?php echo $row[3][2]; ?></h3>
                            <p><?php echo $row[3][3]; ?></p>
                        </div>
                    </div>

                </div> 

            </div>
        </div><!--end of row-->
    </div>
</div>     