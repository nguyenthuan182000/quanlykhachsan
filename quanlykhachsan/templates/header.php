<header id="header">

    <!-- HEADER TOP -->
    <div class="header_top">
        <div class="container">

            <div class="header_left float-left">
                <?php
                foreach ($ks as $key=>$value){

                ?>
                <span><i class="hillter-icon-location"></i> <?php echo $value->dia_chi?></span>
                <span><i class="hillter-icon-phone"></i>  <?php echo $value->so_dien_thoai?></span>
                    <?php
                }
                ?>
            </div>

            <div class="header_right float-right">

                        <span class="login-register">
                            <a href="admin/login.php">Login</a>
                        </span>
            </div>
        </div>
    </div>
    <!-- END / HEADER TOP -->

    <!-- HEADER LOGO & MENU -->
    <div class="header_content" id="header_content">

        <div class="container">
            <!-- HEADER LOGO -->
            <div class="header_logo">
                <?php
                foreach ($ks as $key=>$value){
                    ?>
                    <a href="index.php"><img src="public/layout/image_logo/<?php echo $value->hinh?>" width="150"></a>
                <?php
                }
                ?>
            </div>
            <!-- END / HEADER LOGO -->

            <!-- HEADER MENU -->
            <nav class="header_menu">
                <ul class="menu">
                    <li>
                        <a href="index.php">Trang chủ </a>
                    </li>
                    <li>
                        <a href="bai_viet.php">Bài viết </a>
                    </li>
                    <li>
                        <a href="loai_phong.php">Loại phòng </a>
                    </li>
                    <li>
                        <a href="dich_vu.php">Dịch vụ</a>
                    </li>
                    <li>
                        <a href="tin_tuc.php">Tin tức </a>
                    </li>
                    <li>
                        <a href="hom_thu.php">Đánh giá </span></a>
                    </li>
                    <li>
                        <a href="lien_he.php">Liên hệ</a>
                    </li>
                </ul>
            </nav>
            <!-- END / HEADER MENU -->

            <!-- MENU BAR -->
            <span class="menu-bars">
                        <span></span>
                    </span>
            <!-- END / MENU BAR -->

        </div>
    </div>
    <!-- END / HEADER LOGO & MENU -->

</header>