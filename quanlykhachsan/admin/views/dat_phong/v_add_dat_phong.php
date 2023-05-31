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
                                        <input type="text" class="form-control" id="ten_khach_hang" name="ten_khach_hang"  placeholder="Tên khách hàng" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">SĐT</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="so_dien_thoai" name="so_dien_thoai"  placeholder="Số điện thoại" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Số CMND</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="CMND" name="CMND"  placeholder="CMND" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="email" name="email"  placeholder="email" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Phòng</label>
                                    <div class="col-sm-9">
                                        <select name="phong" class="form-control">
                                            <?php
                                            foreach ($pg as $key=> $std) {
                                                if ($std->trang_thai==2){
                                                    ?>
                                                    <option value="<?php echo  $std->id ;?>"><?php echo $std-> ten_phong; ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Giá phòng</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="gia"  name="gia" placeholder="Giá phòng" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Khuyến mãi</label>
                                    <div class="col-sm-9">
                                        <select name="phan_tram_km" class="form-control">
                                            <?php
                                            foreach ($km as $key=> $std) {
                                                if ($std->trang_thai==1){
                                                    ?>
                                                    <option value="<?php echo  $std->id ;?>"><?php echo $std->phan_tram_km; ?>%</option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Số lượng phòng thuê</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="so_luong"  name="so_luong" placeholder="Số lượng" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ngày đến</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" id="ngay_den"  name="ngay_den" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ngày đi</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" id="ngay_di"  name="ngay_di">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Người lớn</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="nguoi_lon"  name="nguoi_lon" placeholder="Số người lớn" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Trẻ em</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="tre_em"  name="tre_em" placeholder="Số trẻ em" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tổng tiền</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="thanh_tien" name="thanh_tien" placeholder="Tổng tiền">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Trạng thái</label>
                                        <div class="col-sm-9">
                                            <select id="trang_thai" name="trang_thai" class="form-control">
                                                <option value="1">Đã thanh toán</option>
                                                <option value="0">Chưa thanh toán</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info" name="btnSave" id="">Done</button>
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

