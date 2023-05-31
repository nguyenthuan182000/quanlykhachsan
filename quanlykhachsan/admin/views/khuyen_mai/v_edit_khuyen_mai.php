<div class="wrapper">
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Cập Nhập Chương Trình Khuyến Mãi</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" enctype="multipart/form-data" method="post">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Hình ảnh</label>
                                        <div class="col-sm-9">
                                            <div class="custom-file">
                                                <img id="f_hinh_preview" src="../public/layout/imagekhuyenmai/<?php echo $khuyen_mai_detail->hinh; ?>" alt="your image" style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-fluid" />
                                                <input type="file" name="f_hinh" accept="image/*" class="form-control-file @error('f_hinh') is-invalid @enderror" id="f_hinh">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên khuyến mãi</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="ten_khuyen_mai" name="ten_khuyen_mai" value="<?php echo $khuyen_mai_detail->ten_khuyen_mai; ?>" placeholder="Nhập tên khuyến mãi">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nội dung</label>
                                        <div class="col-sm-9">
                                            <textarea type="text" class="form-control" id="noi_dung" name="noi_dung" placeholder="Nội dung khuyến mãi"><?php echo $khuyen_mai_detail->noi_dung; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Mức giảm</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="phan_tram_km" name="phan_tram_km" placeholder="Phần trăm giảm giá (0.1)" value="<?php echo $khuyen_mai_detail->phan_tram_km; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ngày bắt đầu</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="ngay_bat_dau" name="ngay_bat_dau" value="<?php echo $khuyen_mai_detail->ngay_bat_dau; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ngày kết thúc</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="ngay_ket_thuc" name="ngay_ket_thuc" value="<?php echo $khuyen_mai_detail->ngay_ket_thuc; ?>">
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
                                                        <option value="<?php echo  $std->id; ?>" <?php echo $khuyen_mai_detail->ten_khach_san == $std->ten_khach_san ? "selected" : ""; ?>><?php echo $std->ten_khach_san; ?></option>
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
                                                <option value="1" <?php echo $khuyen_mai_detail->trang_thai == 1 ? "selected" : "" ?>>Áp dụng</option>
                                                <option value="0" <?php echo $khuyen_mai_detail->trang_thai == 0 ? "selected" : "" ?>>Kết thúc</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info" name="btnSave" id="">Done</button>
                                    <a href="khuyen_mai.php"><button type="button" class="btn btn-default float-right">Cancel</button></a>
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