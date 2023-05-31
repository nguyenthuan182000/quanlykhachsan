<!-- SUB BANNER -->
<section class="section-sub-banner awe-parallax bg-9">
    <div class="awe-overlay"></div>
    <div class="sub-banner">
        <div class="container">
            <div class="text text-center">
                <h2>Bài viết</h2>
            </div>
        </div>

    </div>

</section>
<!-- END / SUB BANNER -->

<!-- ABOUT -->
<section class="section-about">
    <div class="container">

        <div class="about">
            <?php
            foreach ($bai_viets as $key=>$value)
            if ($value->trang_thai==1){
            {
            ?>
            <!-- ITEM -->
            <div class="about-item">
                <div class="img owl-single">
                    <img src="public/layout/image_bai_viet/<?php echo $value->hinh?>" alt="">
                </div>

                <div class="text">
                    <h2 class="heading"><?php echo $value->ten_bai_viet?></h2>
                    <div class="desc">
                        <p><?php echo $value->noi_dung?></p>
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
</section>
<!-- END / ABOUT -->
