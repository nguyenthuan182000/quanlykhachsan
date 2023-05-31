<div class="wrapper">
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Cập Nhập Banner</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" enctype="multipart/form-data" method="post">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Hình ảnh</label>
                                        <div class="col-sm-9">
                                            <div class="custom-file">
                                                <img id="f_hinh_preview" src="../public/layout/imagebanner/<?php echo $banner_detail->hinh; ?>" alt="your image" style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-fluid" />
                                                <input type="file" name="f_hinh" accept="image/*" class="form-control-file @error('f_hinh') is-invalid @enderror" id="f_hinh">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên banner</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="ten_banner" name="ten_banner" value="<?php echo $banner_detail->ten_banner; ?>" placeholder="Tên banner" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Khách sạn</label>
                                        <div class="col-sm-9">
                                            <select name="ten_khach_san" class="form-control">
                                                <?php
                                                foreach ($ks as $key => $std) {
                                                    if ($std->trang_thai == 1) {
                                                ?>
                                                        <option value="<?php echo  $std->id; ?>" <?php echo $banner_detail->ten_khach_san == $std->ten_khach_san ? "selected" : ""; ?>><?php echo $std->ten_khach_san; ?></option>
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
                                                <option value="1" <?php echo $banner_detail->trang_thai == 1 ? "selected" : "" ?>>Mở</option>
                                                <option value="0" <?php echo $banner_detail->trang_thai == 0 ? "selected" : "" ?>>Khóa</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info" name="btnSave" id="">Done</button>
                                    <a href="banner.php"><button type="button" class="btn btn-default float-right">Cancel</button></a>
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