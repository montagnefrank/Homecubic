<header id="nav" class="header header-1 header-black">
    <div class="header-wrapper">
        <div class="container-m-30 clearfix">
            <div class="logo-row">
                <!-- LOGO --> 
                <div class="logo-container-2">
                    <div class="logo-2">
                        <a href="index.php" class="clearfix">
                            <img src="assets/img/redes.png" class="logo-img" alt="Logo">
                        </a>
                    </div>
                </div>
                <!-- BUTTON --> 
                <div class="menu-btn-respons-container">
                    <button id="menu-btn" type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target="#main-menu .navbar-collapse">
                        <span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
                    </button>
                </div>
            </div>
        </div>
        <!-- MAIN MENU CONTAINER -->
        <div class="main-menu-container">
            <div class="container-m-30 clearfix">	
                <div id="main-menu">
                    <div class="navbar navbar-default" role="navigation">
                        <nav class="collapse collapsing navbar-collapse right-1024">
                            <ul class="nav navbar-nav">
                                <?php
                                $menu_select = "SELECT idMenu,nombreMenu,enlaceMenu,estadoMenu FROM hc_menu ";
                                $menu_result = $link->query($menu_select) or die($link->error);

                                while ($menu_row = $menu_result->fetch_array(MYSQLI_BOTH)) {
                                    if ($menu_row['estadoMenu'] == 1) {
                                        if ($menu_row['idMenu'] == '1') {
                                            $cur = "current scroll_to_top";
                                        } else {
                                            $cur = "";
                                        }
                                        echo '   
                                            <li class="parent ' . $cur . '">
                                                <a href="' . $menu_row['enlaceMenu'] . '" ><div class="main-menu-title">' . $menu_row['nombreMenu'] . '</div></a>
                                            </li>
                                         ';
                                    }
                                }
                                ?>	
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- END main-menu-container -->
    </div>
    <!-- END header-wrapper -->
</header>