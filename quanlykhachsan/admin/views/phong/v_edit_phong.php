<div class="wrapper">
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Cập Nhật Phòng</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" enctype="multipart/form-data" method="post">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Hình ảnh</label>
                                        <div class="col-sm-9">
                                            <div class="custom-file">
                                                <img id="f_hinh_preview" src="../public/layout/image_phong/<?php echo $phong_detail->hinh; ?>" alt="your image" style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-fluid" />
                                                <input type="file" name="f_hinh" accept="image/*" class="form-control-file @error('f_hinh') is-invalid @enderror" id="f_hinh">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên phòng</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="ten_phong" name="ten_phong" value="<?php echo $phong_detail->ten_phong; ?>" placeholder="Tên phòng">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Loại phòng</label>
                                        <div class="col-sm-9">
                                            <select name="ten_loai_phong" class="form-control">
                                                <?php
                                                foreach ($lp as $key => $std) {
                                                    if ($std->trang_thai == 1) {
                                                ?>
                                                        <option value="<?php echo  $std->id; ?>" <?php echo $phong_detail->ten_loai_phong == $std->ten_loai_phong ? "selected" : ""; ?>><?php echo $std->ten_loai_phong; ?></option>
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
                                            <input type="text" class="form-control" id="gia" name="gia" value="<?php echo $phong_detail->gia; ?>" placeholder="Giá phòng">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Số người</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="so_nguoi" name="so_nguoi" value="<?php echo $phong_detail->so_nguoi; ?>" placeholder="Số người">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Diện tích</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="dien_tich" name="dien_tich" value="<?php echo $phong_detail->dien_tich; ?>" placeholder="Số người">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Loại giường</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="loai_giuong" name="loai_giuong" value="<?php echo $phong_detail->loai_giuong; ?>" placeholder="Số người">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Thông tin</label>
                                        <div class="col-sm-9">
                                            <textarea type="date" class="form-control" id="thong_tin" name="thong_tin" placeholder="Thông tin phòng"><?php echo $phong_detail->thong_tin; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Trạng thái</label>
                                        <div class="col-sm-9">
                                            <select id="trang_thai" name="trang_thai" class="form-control">
                                                <option value="2" <?php echo $phong_detail->trang_thai == 2 ? "selected" : "" ?>>Còn trống</option>
                                                <option value="1" <?php echo $phong_detail->trang_thai == 1 ? "selected" : "" ?>>Đã thuê</option>
                                                <option value="0" <?php echo $phong_detail->trang_thai == 0 ? "selected" : "" ?>>Sửa chữa</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info" name="btnSave" id="">Done</button>
                                    <a href="phong.php"><button type="button" class="btn btn-default float-right">Cancel</button></a>
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
<script>
    $("#f_hinh").change(function() {
        readURL(this, '#f_hinh_preview');
    });

    function readURL(input, selector) {
        if (input.files && input.files[0]) {
            let reader = new FileReader();

            reader.onload = function(e) {
                $(selector).attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>