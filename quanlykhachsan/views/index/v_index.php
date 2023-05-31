<!-- BANNER SLIDER -->
<section class="section-slider">

    <div class="banner-slider" id="banner-slider">
        <?php
        foreach ($banners as $key=>$value)
        if ($value->trang_thai==1){
        {
        ?>
        <!-- ITEM -->
        <div class="slider-item text-center" data-image="public/layout/imagebanner/<?php echo $value->hinh?>">
            <div class="slider-text">
                <span class="slider-icon"><img src="public/layout/images/icon-slider-1.png" alt=""></span><br>
                <h2 class="slider-caption slider-caption-3"><img src="public/layout/images/icon-slider-4.png" alt=""> <?php echo $value->ten_khach_san;?> <img src="public/layout/images/icon-slider-3.png" alt=""></h2>
                <span class="slider-caption-sub slider-caption-sub-3"><?php echo $value->ten_banner;?></span>
                <br>
                <span class="slider-icon"><img src="public/layout/images/icon-slider-2.png" alt=""></span>
            </div>
        </div>
        <!-- ITEM -->
        <?php
        }
        }
        ?>

    </div>

</section>
<!-- END / BANNER SLIDER -->

<!-- CHECK AVAILABILITY -->
<section class="section-check-availability">
    <div class="container">
        <div class="check-availability">
            <div class="row">
                <div class="col-lg-3">
                    <h2>CHECK AVAILABILITY</h2>
                </div>
                <div class="col-lg-9">
                    <form id="ajax-form-search-room" action="https://envato.megadrupal.com/html/hillter/search_step_2.php" method="post">
                        <div class="availability-form">
                            <input type="text" name="arrive" class="awe-calendar from" placeholder="Arrival Date">
                            <input type="text" name="departure" class="awe-calendar to" placeholder="Departure Date">

                            <select class="awe-select" name="adults">
                                <option>Adults</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                            <select class="awe-select" name="children">
                                <option>Children</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                            <div class="vailability-submit">
                                <button onclick="window.location.href='loai_phong.php'" class="awe-btn awe-btn-13">FIND THE BEST RATE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END / CHECK AVAILABILITY -->

<!-- ACCOMD ODATIONS -->
<section class="section-accomd awe-parallax bg-14">
    <div class="awe-overlay"></div>

    <div class="container">
        <div class="accomd-modations">
            <div class="row">
                <div class="col-md-3">
                    <div class="accomd-modations-header">
                        <h2 class="heading">Loại phòng</h2>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-1">
                    <div class="accomd-modations-content owl-single">
                        <div class="row">
                            <?php
                            foreach ($loai_phong as $key=>$value)
                            if ($value->trang_thai==1){
                            {
                            ?>
                            <!-- ITEM -->

                            <div class="col-xs-6">
                                <div class="accomd-modations-room">
                                    <div class="img">
                                        <a href="phong.php?id=<?php echo $value->id?>"><img src="public/layout/imageloaiphong/<?php echo $value->hinh?>"></a>
                                    </div>
                                    <div class="text">
                                        <h2><a href="#"><?php echo $value->ten_loai_phong?></a></h2>
                                    </div>
                                </div>
                            </div>

                            <!-- END / ITEM -->
                            <?php
                            }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- END / ACCOMD ODATIONS -->

<!-- ABOUT -->
<?php
foreach ($bai_viet as $key=>$value)
if ($value->trang_thai==1){
{
?>
<section class="section-home-about bg-white">
    <div class="container">
        <div class="home-about">
            <div class="row">
                <div class="col-md-6">
                    <div class="img">
                        <a href="#"><img src="public/layout/image_bai_viet/<?php echo $value->hinh?>" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text">
                        <h2 class="heading"><?php echo $value->ten_bai_viet?></h2>
                        <p><?php echo $value->noi_dung?></p>
                        <a href="bai_viet.php" class="awe-btn awe-btn-default">READ MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}
}
?>
<!-- END / ABOUT -->

<!-- OUR BEST -->
<section class="section-our-best bg-white">
    <div class="container">

        <div class="our-best">
            <div class="row">

                <div class="col-md-6 col-md-push-6">
                    <div class="img">
                        <img src="public/layout/images/home/ourbest/img-1.jpg" alt="">
                    </div>
                </div>

                <div class="col-md-6 col-md-pull-6 ">
                    <div class="text">
                        <h2 class="heading">Dịch vụ</h2>
                        <p>Khách sạn chúng tôi luôn cung cập dịch vụ tốt nhất cho quý khách :</p>
                        <ul>
                            <?php
                            foreach ($dich_vu as $key=>$value)
                            if ($value->trang_thai==1){
                            {
                            ?>
                            <li><?php echo $value->ten_dich_vu?></li>
                            <?php
                            }
                            }
                            ?>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- END / OUR BEST -->

<!-- HOME GUEST BOOK -->
<section class="section-home-guestbook awe-parallax bg-13">

    <div class="awe-overlay"></div>

    <div class="container">
        <div class="home-guestbook">

            <div class="row">
                <div class="col-md-3 col-lg-2 col-lg-offset-1 col-lg-push-9 col-md-push-9">
                    <div class="guestbook-header">
                        <h2 class="heading">Phản hồi</h2>
                        <p>Bạn có thể gửi phản hồi tại đây</p>
                        <a href="hom_thu.php" class="awe-btn awe-btn-default">VIEW MORE</a>
                    </div>
                </div>

                <div class="col-md-9 col-lg-9 col-lg-pull-3 col-md-pull-3">
                    <div class="guestbook-content owl-single">
                        <?php
                        foreach ($hom_thu as $key=>$value)
                        if ($value->trang_thai==1){
                        {
                        ?>
                        <!-- ITEM -->
                        <div class="guestbook-item">
                            <div class="text">
                                <p><?php echo $value->noi_dung?></p>
                                <span><strong>From: <?php echo $value->ten_khach_hang?></strong></span>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <?php
                        }
                        }
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>
<!-- END / HOME GUEST BOOK -->

<!-- HOME NEW -->
<section class="section-event-news bg-white">
    <div class="container">

        <div class="event-news">
            <div class="row">
                <!-- NEWS -->
                <div class="col-md-12">
                    <div class="news">
                        <h2 class="heading">Tin tức</h2>
                        <p>Tin tức sẽ được cập nhật hàng ngày</p>

                        <div class="row">
                            <?php
                            foreach ($tin_tuc as $key=>$value)
                            if ($value->trang_thai==1){
                            {
                            ?>
                            <!-- ITEM -->
                            <div class="col-xs-6 col-md-6">
                                <div class="news-item">
                                    <div class="img">
                                        <a href="#"><img src="public/layout/image_tin_tuc/<?php echo $value->hinh?>" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <span class="date"><?php echo date("d-m-Y", strtotime($value->ngay_them));?></span>
                                        <h2><a href="#"><?php echo $value->ten_tin_tuc?></a></h2>
                                        <a href="tin_tuc.php" class="read-more">[ Read More ]</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END / ITEM -->
                            <?php
                            }
                            }
                            ?>

                        </div>
                        <a href="tin_tuc.php" class="awe-btn awe-btn-default">VIEW MORE</a>

                    </div>

                </div>
                <!-- END / NEWS -->

            </div>

            <div class="hr"></div>

        </div>

    </div>
</section>
<!-- END / HOME NEW -->
