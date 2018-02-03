<div id="blog-link" class="page-section mt-30">
    <div class="container">

        <div class="mb-50">
            <h2 class="section-title2 font-light pr-0">Nuestras noticias<a href="bloglist.php" class="section-more right">Ver todas</a>
            </h2>
        </div>

        <div class="row">
            <?php
            $selectblog = "SELECT * FROM hc_blog WHERE statusBlog = '1' ORDER BY idBlog DESC";
            $resultblog = $link->query($selectblog) or die($link->error);
            $index = 0;
            while ($rowblog = $resultblog->fetch_array(MYSQLI_BOTH)) {
                if($index == 3){
                    break;
                }
                echo ' 
                    <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-70" >
                        <div class="post-prev-img">
                            <a href="blog.php?show=' . $rowblog[0] . '"><img src="assets/img/blog/' . $rowblog[5] . '.jpg" alt="img"></a>
                        </div>
                        <div class="post-prev-title">
                            <h3 ><a href="blog.php?show=' . $rowblog[0] . '">' . $rowblog[1] . '</a></h3>
                        </div>
                        <div class="post-prev-info">
                            ' . $rowblog[3] . '<span class="slash-divider">/</span><a>' . $rowblog[8] . '</a>
                        </div>
                        <div>
                            ' . $rowblog[2] . '... 
                        </div>
                    </div>
                   ';
                $index++;
            }
            ?>
        </div>
    </div>
</div>
