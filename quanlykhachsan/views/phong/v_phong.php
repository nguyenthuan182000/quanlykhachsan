<!-- SUB BANNER -->
<section class="section-sub-banner awe-parallax bg-20">
    <div class="awe-overlay"></div>
    <div class="sub-banner">
        <div class="container">
            <div class="text text-center">
                <h2>Phòng</h2>
                <p>Lorem Ipsum is simply dummy text</p>
            </div>
        </div>
    </div>
</section>
<!-- END / SUB BANNER -->

<!-- ROOM -->
<section class="section-room bg-white">
    <div class="container">

        <div class="room-wrap-1">
            <div class="row">
                <?php
                foreach ($phongs as $key=>$value)
                {
                ?>
                <!-- ITEM -->
                <div class="col-md-6">
                    <div class="room_item-1">

                        <h2><a href="#"><?php echo $value->ten_phong?></a></h2>

                        <div class="img">
                            <a href="#"><img src="public/layout/image_phong/<?php echo $value->hinh?>" alt=""></a>
                        </div>

                        <div class="desc">
                            <p><?php echo $value->thong_tin?></p>
                            <ul>
                                <li>Số người: <?php echo $value->so_nguoi?> người</li>
                                <li>Diện tích: <?php echo $value->dien_tich?></li>
                                <li>Số giường: <?php echo $value->loai_giuong?></li>
                            </ul>
                        </div>

                        <div class="bot">
                            <span class="price">Giá phòng: <span class="amout"><?php echo number_format($value->gia)?></span> đ/ngày</span>
                            <a href="chi_tiet_phong.php?id=<?php echo $value->id?>" class="awe-btn awe-btn-13">VIEW DETAILS</a>
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
</section>
<!-- END / ROOM -->