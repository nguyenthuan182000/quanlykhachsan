<!-- SUB BANNER -->
<section class="section-sub-banner awe-parallax bg-15">
    <div class="awe-overlay"></div>
    <div class="sub-banner">
        <div class="container">
            <div class="text text-center">
                <h2>Hòm thư</h2>
                <p>Góp ý của các bạn giúp chúng tôi hoàn hảo hơn</p>
            </div>
        </div>
    </div>
</section>
<!-- END / SUB BANNER -->

<!-- GUEST BOOK -->
<section class="section-guest-book">
    <div class="container">
        <div class="guest-book">

            <!-- GUEST BOOK HEAD -->
            <div class="guest-book_head bg-8">
                <div class="text">
                    <h2>READ OUR GUEST BOOK FORM CUSTOMER</h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal .</p>
                    <a href="add_hom_thu.php" class="awe-btn awe-btn-13 awe-ajax">WRITE IN GUEST BOOK</a>
                </div>
            </div>
            <!-- END / GUEST BOOK HEAD -->

            <!-- GUEST BOOK MASONRY -->
            <div class="guest-book_content">

                <div class="row">
                    <div class="guest-book_mansory">
                        <?php
                        foreach ($hom_thus as $key=>$value)
                        if ($value->trang_thai==1){
                        {
                        ?>
                        <!-- ITEM -->
                        <div class="item-masonry col-xs-6 col-md-4">
                            <div class="guest-book_item">
                                <span class="icon hillter-icon-quote-left"></span>
                                <h2><?php echo $value->ten_khach_hang?></h2>
                                <p><?php echo $value->noi_dung?></p>
                                <span><b></b></span>
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
            <!-- END / GUEST BOOK MASONRY -->
        </div>
    </div>
</section>
<!-- END / GUEST BOOK -->