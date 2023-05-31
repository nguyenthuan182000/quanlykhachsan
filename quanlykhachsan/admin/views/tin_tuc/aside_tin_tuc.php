<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link" align="center">
        <!--        <span class="brand-text font-weight-light">Welcome to Lucy Hotel</span>-->
        <img src="../public/images/photos/Picture1.png" width="200" height="100">
    </a>

    <!-- Sidebar -->

    <!-- SidebarSearch Form -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="home.php" class="nav-link">
                    <p>
                        Home
                    </p>
                </a>
            </li>
            <div>
                <p id="quan_ly_khach_san">
                    Quản lý khách sạn
                </p>
                <div id="list_quan_ly_khach_san">
                    <li class="nav-item">
                        <a href="khach_san.php" class="nav-link">
                            <i class="nav-icon fa fa-hotel"></i>
                            <p>
                                Khách sạn
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="loai_phong.php" class="nav-link">
                            <i class="nav-icon fa fa-layer-group"></i>
                            <p>
                                Loại phòng
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="dat_phong.php" class="nav-link">
                            <i class="nav-icon fa fa-id-badge"></i>
                            <p>
                                Danh sách đặt phòng
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="phong.php" class="nav-link">
                            <i class="nav-icon fa fa-door-closed"></i>
                            <p>
                                Phòng
                            </p>
                        </a>
                    </li>
                </div>
            </div>
            <!-- Quản lý nhân sự -->
            <div>
                <p id="quan_ly_nhan_su">
                    Quản lý nhân sự
                </p>
                <div id="list_quan_ly_nhan_su">
                    <li class="nav-item">
                        <a href="nguoi_dung.php" class="nav-link">
                            <i class="nav-icon fa fa-id-badge"></i>
                            <p>
                                Người dùng
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="loai_nguoi_dung.php" class="nav-link">
                            <i class="nav-icon fa fa-id-badge"></i>
                            <p>
                                Loại người dùng
                            </p>
                        </a>
                    </li>
                </div>
            </div>
            <!-- Quản lý bài viết -->
            <div>
                <p id="quan_ly_bai_viet">
                    Quản lý bài viết
                </p>
                <div id="list_quan_ly_bai_viet">
                    <li class="nav-item">
                        <a href="tin_tuc.php" class="nav-link">
                            <i class="nav-icon fa fa-scroll"></i>
                            <p>
                                Tin tức
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="bai_viet.php" class="nav-link">
                            <i class="nav-icon fa fa-scroll"></i>
                            <p>
                                Bài viết
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="banner.php" class="nav-link">
                            <i class="nav-icon fa fa-scroll"></i>
                            <p>
                                Banner
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="hom_thu.php" class="nav-link ">
                            <i class="nav-icon fa fa-tags"></i>
                            <p>
                                Hòm thư
                            </p>
                        </a>
                    </li>
                </div>
            </div>

            <li class="nav-item">
                <a href="dich_vu.php" class="nav-link">
                    <p>
                        Quản lý dịch vụ
                    </p>
                </a>
            </li>


            <li class="nav-item">
                <a href="khuyen_mai.php" class="nav-link ">
                    <p>
                        Quản lý khuyến mãi
                    </p>
                </a>
            </li>

    </nav>
</aside>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#quan_ly_khach_san").click(function() {
            $("#list_quan_ly_khach_san").slideToggle("slow");
        });
    });
    $(document).ready(function() {
        $("#quan_ly_nhan_su").click(function() {
            $("#list_quan_ly_nhan_su").slideToggle("slow");
        });
    });
    $(document).ready(function() {
        $("#quan_ly_bai_viet").click(function() {
            $("#list_quan_ly_bai_viet").slideToggle("slow");
        });
    });
</script>
<style>
    #list_quan_ly_nhan_su,
    #list_quan_ly_bai_viet,
    #list_quan_ly_khach_san {
        display: none;
    }

    #quan_ly_khach_san,
    #quan_ly_nhan_su,
    #quan_ly_bai_viet {
        color: #6c757d;
        padding: 10px 15px;
        cursor: pointer;
        margin-bottom: 0;
    }

    .nav-item:hover,
    #quan_ly_khach_san:hover,
    #quan_ly_nhan_su:hover,
    #quan_ly_bai_viet:hover {
        color: #fff;
        background-color: #494e53;
    }
</style>