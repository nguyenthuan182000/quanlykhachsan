<!-- SUB BANNER -->
<section class="section-sub-banner awe-parallax bg-20">
    <div class="awe-overlay"></div>
    <div class="sub-banner">
        <div class="container">
            <div class="text text-center">
                <h2>Loại phòng</h2>
            </div>
        </div>
    </div>
</section>
<!-- END / SUB BANNER -->

<!-- ROOM -->
<section class="section-room bg-white">
    <div class="container">

        <div class="room-wrap-6">
            <?php
            foreach ($loai_phongs as $key=>$value)
            {
            ?>
            <!-- ITEM -->
            <div class="room_item-6" data-background="public/layout/imageloaiphong/<?php echo $value->hinh?>">

                <div class="text" style="height: 400px">
                    <h2><a href="#"><?php echo $value->ten_loai_phong?></a></h2>

                    <p><?php echo $value->thong_tin?></p>
                    <a href="phong.php?id=<?php echo $value->id?>" class="awe-btn awe-btn-13">VIEW DETAILS</a>
                </div>

            </div>
            <!-- END / ITEM -->
            <?php
            }
            ?>
        </div>

    </div>
</section>
<!-- END / ROOM -->