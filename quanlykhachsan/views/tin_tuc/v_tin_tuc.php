<!-- SUB BANNER -->
<section class="section-sub-banner awe-parallax bg-2">
    <div class="awe-overlay"></div>
    <div class="sub-banner">
        <div class="container">
            <div class="text text-center">
                <h2>Tin tức</h2>
            </div>
        </div>
    </div>
</section>
<!-- END / SUB BANNER -->

<!-- BLOG -->
<section class="section-blog bg-white">
    <div class="container">
        <div class="blog">
            <div class="row">

                <div class="col-md-8 col-md-offset-2">
                    <div class="blog-content events-content">
                        <?php
                        foreach ($tin_tucs as $key=>$value)
                        if ($value->trang_thai==1){
                        {
                        ?>
                        <!-- POST ITEM -->
                        <article class="post">
                            <div class="entry-media">
                                <a href="#" class="post-thumbnail"><img src="public/layout/image_tin_tuc/<?php echo $value->hinh?>" alt=""></a>

                            </div>

                            <div class="entry-header">
                                <h2 class="entry-title"><a href="#"><?php echo $value->ten_tin_tuc?></a></h2>
                            </div>

                            <div class="entry-content">
                                <p><?php echo $value->noi_dung?></p>
                            </div>

                            <div class="entry-footer">
                                <p class="entry-meta">
                                    <span class="entry-author">
                                                <span class="screen-reader-text">Posted on </span>
                                                <a href="#" class="entry-author-link">
                                                    <span class="entry-author-name"><?php echo date("d-m-Y", strtotime($value->ngay_them));?></span>
                                                </a>
                                            </span>
                                </p>
                            </div>

                        </article>
                        <?php
                        }
                        }
                        ?>
                        <!-- END / POST ITEM -->

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- END / BLOG -->