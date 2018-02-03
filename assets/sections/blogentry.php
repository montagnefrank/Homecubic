<?php
$enlace = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$projectId = sanitize($_GET['show']);
$select = "SELECT * FROM hc_blog WHERE idBlog ='" . $projectId . "' AND statusBlog = '1'";
$result = $link->query($select) or die($link->error);
if ($result->num_rows > 0) {
    $row = $result->fetch_array(MYSQLI_BOTH);
} else {
    echo '<script>window.location.replace("bloglist.php");</script>';
}
?>
<div class="page-title-cont page-title-large page-title-img pt-250" style="background-image: url(assets/img/blog/<?php echo $row[4]; ?>.jpg)">
    <div class="relative container align-left">
        <div class="row">

            <div class="col-md-8">
                <h1 class="page-title text-white"><?php echo $row[1]; ?> </h1>
            </div>

            <div class="col-md-4">
                <div class="breadcrumbs font-poppins ">
                    <a class="a-inv text-white" href="index.php">Homecubic</a><span class="slash-divider">/</span><span class=" text-white">Blog</span><span class="slash-divider">/</span><span class="bread-current text-white"><?php echo $row[1]; ?></span>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="container mt-30">
    <div class="row">

        <!-- CONTENT -->
        <div class="col-sm-8 blog-main-posts">

            <!-- Post Item -->
            <div class="wow fadeIn pb-90">
                <div class="post-prev-img">
                    <a href="blog-single-sidebar-right.html"><img src="assets/img/blog/<?php echo $row[5]; ?>.jpg" alt="img"></a>
                </div>

                <div class="post-prev-title">
                    <h3 class="post-title-big"><a href="blog-single-sidebar-right.html"><?php echo $row[2]; ?></a></h3>
                </div>

                <div class="post-prev-info ">
                    <?php echo $row[3]; ?><span class="slash-divider">/</span><a><?php echo $row[8]; ?></a><span class="slash-divider">/</span><?php echo $row[7]; ?>
                </div>


                <div class="mb-80">
                    <?php echo $row[6]; ?>
                </div>

                <!-- DIVIDER -->
                <hr class="mt-0 mb-0">

                <!-- WORK NAVIGATION -->
                <div class="work-navigation clearfix">
                    <a href="blog.php?show=<?php echo $row[0] - 1; ?>" class="work-prev"><span><span class="icon icon-arrows-left"></span>&nbsp;Anterior</span></a>
                    <a href="bloglist.php" class="work-all"><span>Ver Todas</span></a>
                    <a href="blog.php?show=<?php echo $row[0] + 1; ?>" class="work-next"><span>Siguiente&nbsp;<span class="icon icon-arrows-right"></span></span></a>
                </div>


                <!-- DIVIDER -->
                <hr class="mt-0 mb-0">


                <!-- DIVIDER -->
                <hr class="mt-30 mb-0">


            </div>

        </div>

        <!-- SIDEBAR -->
        <div class="col-sm-4 col-md-3 col-md-offset-1">

            <div class="widget">
                <div class="fb-share-button" data-href="<?php echo $enlace; ?>" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $enlace; ?>&amp;src=sdkpreparse"></a></div>
                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <!-- SEARCH -->
            <div class="widget">
                <form class="form-search widget-search-form" action="" method="get">
                    <input type="text" name="q" class="input-search-widget" placeholder="Buscar">
                    <button  type="submit" title="Buscar">
                        <span aria-hidden="true" class="icon_search"></span>
                    </button>
                </form>
            </div>

            <!-- WIDGET -->
            <div class="widget">

                <h5 class="widget-title2">Publicaciones recientes</h5>

                <div class="widget-body mt-25">
                    <ul class="clearlist widget-posts">
                        <?php
                        $selectblog = "SELECT * FROM hc_blog WHERE statusBlog = '1' ORDER BY idBlog DESC";
                        $resultblog = $link->query($selectblog) or die($link->error);
                        $index = 0;
                        while ($rowblog = $resultblog->fetch_array(MYSQLI_BOTH)) {
                            if ($index == 6) {
                                break;
                            }
                            echo ' 
                                    <li class="clearfix">
                                        <a href="#"><img src="assets/img/blog/' . $rowblog[5] . '.jpg" alt="" class="widget-posts-img"></a>
                                        <div class="widget-posts-descr2">
                                            <a href="blog.php?show=' . $rowblog[0] . '" class="font-poppins lh-18">' . $rowblog[1] . '</a>
                                            <div class="lh-18">' . $rowblog[3] . '</div> 
                                        </div>
                                    </li>
                               ';
                            $index++;
                        }
                        ?>
                    </ul>
                </div>

            </div>
        </div>

    </div>

</div>