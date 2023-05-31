<div class="wrapper">
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Thêm Banner</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" enctype="multipart/form-data" method="post">
                                <div class="card-body">
                                    <h4>Thêm khuyến mãi </h4>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Hình ảnh</label>
                                        <div class="col-sm-9">
                                            <div class="custom-file">
                                                <img id="f_hinh_preview" src="http://placehold.it/100x100" alt="your image" style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-fluid" />
                                                <input type="file" name="f_hinh" accept="image/*" class="form-control-file @error('f_hinh') is-invalid @enderror" id="f_hinh">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên khuyến mãi</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="ten_khuyen_mai" name="ten_khuyen_mai" required placeholder="Nhập tên khuyến mãi">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nội dung</label>
                                        <div class="col-sm-9">
                                            <textarea type="text" class="form-control" id="noi_dung" name="noi_dung" placeholder="Nội dung khuyến mãi" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Mức giảm</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="phan_tram_km" name="phan_tram_km" required placeholder="Phần trăm giảm giá (0.1)">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ngày bắt đầu</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="ngay_bat_dau" name="ngay_bat_dau" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ngày kết thúc</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="ngay_ket_thuc" name="ngay_ket_thuc" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Khách sạn</label>
                                        <div class="col-sm-9">
                                            <select name="ten_khach_san" class="form-control">
                                                <option>--- chọn khách sạn ---</option>
                                                <?php
                                                foreach ($ks as $key => $std) {
                                                    if ($std->trang_thai == 1) {
                                                ?>
                                                        <option value="<?php echo  $std->id; ?>"><?php echo $std->ten_khach_san; ?></option>
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
                                                <option value="1">Áp dụng</option>
                                                <option value="0">Kết thúc</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info" name="btnSave" id="">Done</button>
                                    <button type="reset" class="btn btn-default float-right">Reset</button>
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