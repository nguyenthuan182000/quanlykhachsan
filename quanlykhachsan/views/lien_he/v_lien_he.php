<!-- SUB BANNER -->
<section class="section-sub-banner awe-parallax bg-9">
    <div class="awe-overlay"></div>
    <div class="sub-banner">
        <div class="container">
            <div class="text text-center">
                <h2>Liên hệ</h2>
            </div>
        </div>

    </div>

</section>
<!-- END / SUB BANNER -->

<!-- CONTACT -->
<section class="section-contact">
    <div class="container">
        <div class="contact">
            <div class="row">

                <div class="col-md-6 col-lg-5">

                    <div class="text">
                        <h2>Liên hệ</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                        <?php
                        foreach ($ks as $key=>$value){
                        ?>
                        <ul>
                            <li><i class="icon hillter-icon-location"></i>  <?php echo $value->dia_chi?></li>
                            <li><i class="icon hillter-icon-phone"></i> <?php echo $value->so_dien_thoai?></li>
                            <li><i class="icon fa fa-envelope-o"></i> <a><?php echo $value->email?></a></li>
                        </ul>
                        <?php
                        }
                        ?>
                    </div>


                </div>

                <div class="col-md-6 col-lg-6 col-lg-offset-1">
                    <div class="contact-map">
                        <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14879.00867726889!2d105.84367222918124!3d21.202001874474906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313503dd7d6d4531%3A0x22b0b829f7b1d657!2zUGjhu6cgTOG7lywgU8OzYyBTxqFuLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1655895744029!5m2!1svi!2s" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- END / CONTACT -->
