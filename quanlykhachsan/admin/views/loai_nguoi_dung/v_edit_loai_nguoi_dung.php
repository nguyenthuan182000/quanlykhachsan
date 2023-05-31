<div class="wrapper">
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Cập nhật loại người dùng</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" enctype="multipart/form-data" method="post">
                                <div class="card-body">
                                    <h4>Cập nhật loại người dùng </h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên loại người dùng</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="ten_loai_nguoi_dung"  name="ten_loai_nguoi_dung" value="<?php echo $loai_nguoi_dung_detail->ten_loai_nguoi_dung;?>" placeholder="Loại người dùng">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Khách sạn</label>
                                        <div class="col-sm-9">
                                            <select name="ten_khach_san" class="form-control">
                                                <?php
                                                foreach ($ks as $key=> $std) {
                                                    if ($std->trang_thai==1){
                                                        ?>
                                                        <option value="<?php echo  $std->id ;?>" <?php echo $loai_nguoi_dung_detail->ten_khach_san == $std->ten_khach_san ?"selected" :"";?>><?php echo $std-> ten_khach_san; ?></option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Trạng thái</label>
                                        <div class="col-sm-9">
                                            <select id="trang_thai" name="trang_thai" class="form-control">
                                                <option value="1" <?php echo $loai_nguoi_dung_detail->trang_thai == 1 ?"selected" :""?>>Hoạt động</option>
                                                <option value="0" <?php echo $loai_nguoi_dung_detail->trang_thai == 0 ?"selected" :""?>>Không hoạt động</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info" name="btnSave" id="">Done</button>
                                    <a href="loai_nguoi_dung.php"><button type="button" class="btn btn-default float-right">Cancel</button></a>
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









