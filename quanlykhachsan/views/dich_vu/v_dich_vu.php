<!-- SUB BANNER -->
<section class="section-sub-banner awe-parallax bg-12">
    <div class="awe-overlay"></div>
    <div class="sub-banner">
        <div class="container">
            <div class="text text-center">
                <h2>Dịch vụ khách sạn</h2>
                <p>Cung cấp cách dịch vụ đạt chất lượng 5 sao</p>
            </div>
        </div>
    </div>
</section>
<!-- END / SUB BANNER -->

<!-- ACTIVITI -->
<section class="section-activiti bg-white">
    <div class="container">

        <div class="activiti">


            <div class="activiti_content">

                <div class="row">
                    <?php
                    foreach ($dich_vus as $key => $value)
                        if ($value->trang_thai == 1) { {
                    ?>
                            <!-- ITEM -->
                            <div class="col-md-4 col-xs-6">
                                <div class="activiti_item">
                                    <div class="img">
                                        <a href="#"><img src="public/layout/imagedichvu/<?php echo $value->hinh ?>" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <h2><a href="#"><?php echo $value->ten_dich_vu ?></a></h2>
                                        <p><?php echo $value->thong_tin ?></p>
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
</section>
<!-- END / ACTIVITI -->