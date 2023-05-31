<!-- SUB BANNER -->
<section class="section-sub-banner awe-parallax bg-16">
    <div class="awe-overlay"></div>
    <div class="sub-banner">
        <div class="container">
            <div class="text text-center">
                <h2>Đặt phòng</h2>
            </div>
        </div>
    </div>

</section>
<!-- END / SUB BANNER -->

<!-- RESERVATION -->
<section class="section-reservation-page bg-white">

    <div class="container">
        <div class="reservation-page">
            <div class="row">

                <!-- SIDEBAR -->
                <div class="col-md-4 col-lg-2">
                </div>
                <!-- END / SIDEBAR -->

                <!-- CONTENT -->
                <div class="col-md-8 col-lg-10">

                    <div class="reservation_content">
                        <form method="post">
                            <div class="reservation-billing-detail">

                                <h4>Thông tin khách hàng</h4>

                                <label >Tên khách hàng</label>
                                <input type="text" class="input-text" id="ten_khach_hang" name="ten_khach_hang"  placeholder="Tên khách hàng" required>


                                <label>Số điện thoại</label>
                                <input type="text" class="form-control" id="so_dien_thoai" name="so_dien_thoai"  placeholder="Số điện thoại" required>

                                <label>Số CMND</label>
                                <input type="text" class="form-control" id="CMND" name="CMND"  placeholder="CMND" required>

                                <label>Email</label>
                                <input type="text" class="form-control" id="email" name="email"  placeholder="email" required>

                                <label>Phòng</label>
                                <label class="form-control"><?php echo $phongs->ten_phong?></label>
                                <input type="hidden" class="form-control"  name="id_phong" id="id_phong" value="<?php echo $phongs->id;?>"/>
                                <label>Giá phòng</label>
                                <label class="form-control"><?php echo number_format($phongs->gia)?> VNĐ/Ngày</label>
                                <label>Khuyến mãi</label>
                                <input type="hidden" name="txtMoney" id="txtMoney" value="<?php echo $phongs->gia;?>"/></br>
                                <input type="hidden" name="txtDiscount" class="txtDiscount" value=""/></br>
                                <input type="text" class="form-control" name="txtCoupon" id="txtCoupon" />
                                <button type="button" class="btn-info" id="btnXacNhan" name="btnXacNhan">Xác nhận</button></br>
                                <p id="result"></p>
                                <label>Số lượng phòng thuê</label>
                                <input type="number" min="1" class="form-control" id="so_luong"  name="so_luong" placeholder="Số lượng" required>

                                <label>Ngày đến</label>
                                <input type="date" class="form-control" id="ngay_den"  name="ngay_den" required>

                                <label>Ngày đi</label>
                                <input type="date" class="form-control" id="ngay_di"  name="ngay_di">

                                <label>Người lớn</label>
                                <input type="number" min="0" class="form-control" id="nguoi_lon"  name="nguoi_lon" placeholder="Số người lớn" required>

                                <label>Trẻ em</label>
                                <input type="text" min="0" class="form-control" id="tre_em"  name="tre_em" placeholder="Số trẻ em" required>


                                <button name="btnSave" class="awe-btn awe-btn-13">PLACE ORDER</button>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- END / CONTENT -->

            </div>
        </div>
    </div>

</section>
<script src="templates/check.js"></script>
<!-- END / RESERVATION -->