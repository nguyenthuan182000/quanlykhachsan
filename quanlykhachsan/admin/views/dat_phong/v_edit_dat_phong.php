<div class="wrapper">
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Cập Nhập Thông Tin</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" enctype="multipart/form-data" method="post">
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên khách hàng</label>
                                    <div class="col-sm-9">
                                        <label class="form-control"><?php echo $dat_phong_detail->ten_khach_hang;?></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">SĐT</label>
                                    <div class="col-sm-9">
                                        <label class="form-control"><?php echo $dat_phong_detail->so_dien_thoai;?></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Số CMND</label>
                                    <div class="col-sm-9">
                                        <label class="form-control"><?php echo $dat_phong_detail->CMND;?></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <label class="form-control"><?php echo $dat_phong_detail->email;?></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Phòng</label>
                                    <div class="col-sm-9">
                                        <label class="form-control"><?php echo $dat_phong_detail->ten_phong;?></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Giá phòng</label>
                                    <div class="col-sm-9">
                                        <label class="form-control"><?php echo number_format($dat_phong_detail->gia);?></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Khuyến mãi</label>
                                    <div class="col-sm-9">
                                        <label class="form-control"><?php echo $dat_phong_detail->phan_tram_km;?>%</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Số lượng phòng thuê</label>
                                    <div class="col-sm-9">
                                        <label class="form-control"><?php echo $dat_phong_detail->so_luong;?> phòng</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ngày đến</label>
                                    <div class="col-sm-9">
                                        <label class="form-control"><?php echo $dat_phong_detail->ngay_den;?></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ngày đi</label>
                                    <div class="col-sm-9">
                                        <label class="form-control"><?php echo $dat_phong_detail->ngay_di;?></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Người lớn</label>
                                    <div class="col-sm-9">
                                        <label class="form-control"><?php echo $dat_phong_detail->nguoi_lon;?></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Trẻ em</label>
                                    <div class="col-sm-9">
                                        <label class="form-control"><?php echo $dat_phong_detail->tre_em;?></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tổng tiền</label>
                                    <div class="col-sm-9">
                                        <label class="form-control"><?php echo number_format($dat_phong_detail->thanh_tien);?></label>
                                    </div>
                                </div>

                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info" name="btnSave" id="">Xác nhận thanh toán</button>
                                    <a href="dat_phong.php"><button type="button" class="btn btn-default float-right">Cancel</button></a>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
</div>

