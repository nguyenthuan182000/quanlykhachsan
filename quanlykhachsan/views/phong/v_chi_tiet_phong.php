<!-- SUB BANNER -->
<section class="section-sub-banner awe-parallax bg-1">
    <div class="awe-overlay"></div>
    <div class="sub-banner">
        <div class="container">
            <div class="text text-center">
                <h2>Chi tiết phòng</h2>
                <p>Lorem Ipsum is simply dummy text</p>
            </div>
        </div>

    </div>

</section>
<!-- END / SUB BANNER -->

<!-- ROOM DETAIL -->
<section class="section-room-detail bg-white">
    <div class="container">

        <!-- DETAIL -->
        <div class="room-detail">
            <div class="row">
                <div class="col-lg-9">
                    <!-- LAGER IMGAE -->
                    <div class="room-detail_img">
                        <div class="room_img-item">
                            <img src="public/layout/image_phong/<?php echo $phongs->hinh?>" alt="">
                        </div>
                    </div>

                    <!-- END / LAGER IMGAE -->

                    <!-- THUMBNAIL IMAGE -->
<!--                    <div class="room-detail_thumbs">-->
<!--                        <a href="#"><img src="public/layout/images/room/detail/img-2.jpg" alt=""></a>-->
<!--                        <a href="#"><img src="public/layout/images/room/detail/img-3.jpg" alt=""></a>-->
<!--                        <a href="#"><img src="public/layout/images/room/detail/img-4.jpg" alt=""></a>-->
<!--                        <a href="#"><img src="public/layout/images/room/detail/img-5.jpg" alt=""></a>-->
<!--                        <a href="#"><img src="public/layout/images/room/detail/img-6.jpg" alt=""></a>-->
<!--                        <a href="#"><img src="public/layout/images/room/detail/img-7.jpg" alt=""></a>-->
<!--                        <a href="#"><img src="public/layout/images/room/detail/img-8.jpg" alt=""></a>-->
<!--                        <a href="#"><img src="public/layout/images/room/detail/img-6.jpg" alt=""></a>-->
<!--                    </div>-->
                    <!-- END / THUMBNAIL IMAGE -->

                </div>

                <div class="col-lg-3">

                    <!-- FORM BOOK -->
                    <div class="room-detail_book">

                        <div class="room-detail_total">
                            <img src="public/layout/images/icon-logo.png" alt="" class="icon-logo">

                            <h6>STARTING ROOM FROM</h6>

                            <p class="price">
                                <span class="amout"><?php echo number_format($phongs->gia)?></span>  đ/days
                            </p>
                        </div>
                        <div class="room-detail_form">
                            <button name="btnSave" onclick="window.location.href='dat_phong.php?id=<?php echo $phongs->id?>'" class="awe-btn awe-btn-13">Book Now</button>
                        </div>
                        </form>
                    </div>
                    <!-- END / FORM BOOK -->

                </div>
            </div>
        </div>
        <!-- END / DETAIL -->

        <!-- TAB -->
        <div class="room-detail_tab">

            <div class="row">
                <div class="col-md-3">
                    <ul class="room-detail_tab-header">
                        <li class="active"><a href="#overview" data-toggle="tab">Thông tin</a></li>
                        <li><a href="#amenities" data-toggle="tab">Dịch vụ</a></li>
                        <li><a href="#package" data-toggle="tab">Khuyến mãi</a></li>
                    </ul>
                </div>

                <div class="col-md-9">
                    <div class="room-detail_tab-content tab-content">

                        <!-- OVERVIEW -->
                        <div class="tab-pane fade active in" id="overview">

                            <div class="room-detail_overview">
                                <h5 class='text-uppercase'><?php echo $phongs->ten_phong?></h5>
                                <p><?php echo $phongs->thong_tin?></p>

                                <div class="row">
                                    <div class="col-xs-6 col-md-4">
                                        <h6>Chi tiết</h6>
                                        <ul>
                                            <li>Số người: <?php echo $phongs->so_nguoi?> người</li>
                                            <li>Diện tích: <?php echo $phongs->dien_tich?></li>
                                            <li>Số giường: <?php echo $phongs->loai_giuong?></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- END / OVERVIEW -->

                        <!-- AMENITIES -->
                        <div class="tab-pane fade" id="amenities">

                            <div class="room-detail_amenities">
                                <p>Chất lượng dịch vụ luôn được chú trọng giúp quý khách có một cảm giác thoải mái.</p>

                                <div class="row">
                                    <?php
                                    foreach ($dich_vu as $key=>$value)
                                    {
                                    ?>
                                    <div class="col-xs-6 col-lg-4">
                                        <ul>
                                            <li><?php echo $value->ten_dich_vu?></li>
                                        </ul>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                </div>

                            </div>

                        </div>
                        <!-- END / AMENITIES -->

                        <!-- PACKAGE -->
                        <div class="tab-pane fade" id="package">

                            <div class="room-detail_package">
                                <?php
                                foreach ($khuyen_mai as $key=>$value)
                                {
                                ?>
                                <!-- ITEM package -->
                                <div class="room-package_item">

                                    <div class="text">
                                        <h4><a href="#"><?php echo $value->ten_khuyen_mai?></a></h4>
                                        <p><?php echo $value->noi_dung?></p>

                                        <div class="room-package_price">
                                            <p class="price">
                                                Giảm: <span class="amout"> <?php echo $value->phan_tram_km?>%</span> /Phòng
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- END / ITEM package -->
                                    <?php
                                }
                                ?>
                            </div>

                        </div>
                        <!-- END / PACKAGE -->

                    </div>
                </div>

            </div>

        </div>
        <!-- END / TAB -->

        <!-- COMPARE ACCOMMODATION -->
        <div class="room-detail_compare">
            <h2 class="room-compare_title">Lựa chọn khác</h2>

            <div class="room-compare_content">

                <div class="row">
                    <?php
                    foreach ($pg as $key=>$value)
                    {
                    ?>
                    <!-- ITEM -->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="room-compare_item">
                            <div class="img">
                                <a href="#"><img src="public/layout/image_phong/<?php echo $value->hinh?>" alt=""></a>
                            </div>

                            <div class="text">
                                <h2><a href="#"><?php echo $value->ten_phong?></a></h2>

                                <ul>
                                    <li><i class="hillter-icon-person"></i> Số người: <?php echo $value->so_nguoi?> người</li>
                                    <li><i class="hillter-icon-bed"></i> Số giường: <?php echo $value->loai_giuong?></li>
                                    <li><i class="hillter-icon-view"></i> Diện tích: <?php echo $value->dien_tich?></li>
                                </ul>

                                <a href="chi_tiet_phong.php?id=<?php echo $value->id?>" class="awe-btn awe-btn-default">VIEW DETAIL</a>

                            </div>

                        </div>
                    </div>
                    <!-- END / ITEM -->
                    <?php
                    }
                    ?>
                </div>

            </div>
        </div>
        <!-- END / COMPARE ACCOMMODATION -->

    </div>
</section>
<!-- END / SHOP DETAIL -->