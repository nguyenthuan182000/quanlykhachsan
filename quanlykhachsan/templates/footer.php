<footer id="footer">

    <!-- FOOTER TOP -->
    <div class="footer_top">
        <div class="container">
            <div class="row">

                <!-- WIDGET MAILCHIMP -->
                <div class="col-lg-8">
                </div>
                <!-- END / WIDGET MAILCHIMP -->
                <!-- WIDGET SOCIAL -->
                <div class="col-lg-3 col-lg-offset-1">
                    <div class="social">
                        <div class="social-content">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <!-- END / WIDGET SOCIAL -->

            </div>
        </div>
    </div>
    <!-- END / FOOTER TOP -->

    <!-- FOOTER CENTER -->
    <div class="footer_center">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-lg-6">
                    <div class="widget widget_logo">
                        <div class="widget-logo">
                            <div class="img">
                                <?php
                                foreach ($ks as $key=>$value){
                                    ?>
                                    <a href="index.php"><img src="public/layout/image_logo/<?php echo $value->hinh?>" width="150"></a>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="text">
                                <?php
                                foreach ($ks as $key=>$value){
                                ?>
                                <p><i class="hillter-icon-location"></i> <?php echo $value->dia_chi?></p>
                                <p><i class="hillter-icon-phone"></i> <?php echo $value->so_dien_thoai?></p>
                                <p><i class="fa fa-envelope-o"></i> <?php echo $value->email?></p>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title">Page site</h4>
                        <ul>
                            <li><a href="index.php">Trang chủ</a></li>
                            <li><a href="bai_viet.php">Bài viết</a></li>
                            <li><a href="loai_phong.php">Loại phòng</a></li>
                            <li><a href="dich_vu.php">Dịch vụ</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-6 col-lg-3">
                    <div class="widget">
                        <ul>
                            </br></br>
                            <li><a href="tin_tuc.php">Tin tức</a></li>
                            <li><a href="hom_thu.php">Đánh giá</a></li>
                            <li><a href="lien_he.php">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <!-- END / FOOTER CENTER -->
</footer>

<!-- LOAD JQUERY -->
<script data-cfasync="false" src="public/layout/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="public/layout/js/lib/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="public/layout/js/lib/jquery-ui.min.js"></script>
<script type="text/javascript" src="public/layout/js/lib/bootstrap.min.js"></script>
<script type="text/javascript" src="public/layout/js/lib/bootstrap-select.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true"></script>
<script type="text/javascript" src="public/layout/js/lib/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="public/layout/js/lib/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="public/layout/js/lib/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="public/layout/js/lib/owl.carousel.js"></script>
<script type="text/javascript" src="public/layout/js/lib/jquery.appear.min.js"></script>
<script type="text/javascript" src="public/layout/js/lib/jquery.countTo.js"></script>
<script type="text/javascript" src="public/layout/js/lib/jquery.countdown.min.js"></script>
<script type="text/javascript" src="public/layout/js/lib/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="public/layout/js/lib/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="public/layout/js/lib/SmoothScroll.js"></script>
<!-- validate -->
<script type="text/javascript" src="public/layout/js/lib/jquery.form.min.js"></script>
<script type="text/javascript" src="public/layout/js/lib/jquery.validate.min.js"></script>
<!-- Custom jQuery -->
<script type="text/javascript" src="public/layout/js/scripts.js"></script>