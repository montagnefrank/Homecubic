<div class="container p-140-cont">
    <div class="row">

        <!-- CONTENT -->
        <div class="col-sm-12 blog-main-posts">

            <div class="row">
                <?php
                $selectblog = "SELECT * FROM hc_blog WHERE statusBlog = '1' ORDER BY idBlog DESC";
                $resultblog = $link->query($selectblog) or die($link->error);
                echo '<div class="row">';
                while ($rowblog = $resultblog->fetch_array(MYSQLI_BOTH)) {
                    echo ' 
                            <div class="col-md-6 wow fadeIn pb-90">
                                <div class="post-prev-img">
                                    <a href="blog.php?show=' . $rowblog[0] . '"><img src="assets/img/blog/' . $rowblog[5] . '.jpg" alt="img"></a>
                                </div>
                                <div class="post-prev-title">
                                    <h3><a href="blog.php?show=' . $rowblog[0] . '"><strong>' . $rowblog[1] . '</strong></a></h3>
                                </div>
                                <div class="post-prev-info ">
                                    ' . $rowblog[3] . '<span class="slash-divider">/</span><a href="">' . $rowblog[8] . '</a><span class="slash-divider">/</span><a>' . $rowblog[7] . '</a>
                                </div>
                                <div class="mb-30">
                                    ' . $rowblog[2] . '... 
                                </div>
                                <div class="post-prev-more-cont clearfix">
                                    <div class="post-prev-more left">
                                        <a href="blog.php?show=' . $rowblog[0] . '" class="font-poppins">Leer m&aacute;s</a>
                                    </div>
                                </div>
                            </div>
                        ';
                    if ($count % 2 == 1) {
                        echo '</div>';
                        echo '<div class="row">';
                    }
                    $count++;
                }
                if ($count % 2 != 0 || $count % 2 != 1)
                    echo '</div>';
                ?>
            </div> 
        </div>
    </div>
</div>