<div id="clients" class="page-section p-130-cont bg-white">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="mb-70">
                    <h2 class="section-title2 font-light text-center p-0"><?php echo $titles_row[0]['tweetsTitleSite']; ?></h2>
                </div>
            </div>

        </div>
        <?php
        $menu_select = "SELECT idTweet,photoTweet,nameTweet,jobTweet,profileTweet,statusTweet FROM hc_tweets ";
        $menu_result = $link->query($menu_select) or die($link->error);
        $idlist = '';
        $i = 0;
        while ($menu_row = $menu_result->fetch_array(MYSQLI_BOTH)) {
            if ($menu_row['statusTweet'] == 1) {
                if($i == 0 || $i == 2 || $i == 4 || $i == 6 || $i == 8 || $i == 10 || $i == 12 || $i == 14){
                    echo '<div class="row">';
                }
                echo '   
                        <div class="col-sm-6 mt-30">
                            <div class="mb-30">
                                <div class="ts4-text-cont bg-gray-light">
                                    ' . $menu_row['profileTweet'] . '
                                </div>
                                <div class="ts4-author-cont clearfix">
                                    <div class="ts4-author-img">
                                        <img src="assets/img/tweets/' . $menu_row['photoTweet'] . '.jpg" class="img-circle" alt="img" >
                                    </div>
                                    <div class="ts4-author-info">
                                        <div class="ts-name">' . $menu_row['nameTweet'] . '</div>
                                        <div class="ts-type">' . $menu_row['jobTweet'] . '</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     ';
                if($i == 1 || $i == 3 || $i == 5 || $i == 7 || $i == 9 || $i == 11 || $i == 13 || $i == 15){
                    echo '</div>';
                }
                $i++;
            }
        }
        ?>

    </div>
</div>