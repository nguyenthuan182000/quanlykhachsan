<div class="wrapper">
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Thêm Phòng</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" enctype="multipart/form-data" method="post">
                                <div class="card-body">
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
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên phòng</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="ten_phong" name="ten_phong" placeholder="Tên phòng" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Loại phòng</label>
                                        <div class="col-sm-9">
                                            <select name="ten_loai_phong" class="form-control">
                                                <option>--- chọn loại phòng ---</option>
                                                <?php
                                                foreach ($lp as $key => $std) {
                                                    if ($std->trang_thai == 1) {
                                                ?>
                                                        <option value="<?php echo  $std->id; ?>"><?php echo $std->ten_loai_phong; ?></option>
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
                                            <input type="text" class="form-control" id="gia" name="gia" placeholder="Giá phòng" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Số người</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="so_nguoi" name="so_nguoi" placeholder="Số lượng người" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Diện tích</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="dien_tich" name="dien_tich" placeholder="Diện tích phòng" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Loại giường</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="loai_giuong" name="loai_giuong" placeholder="Loại giường" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Thông tin</label>
                                        <div class="col-sm-9">
                                            <textarea type="date" class="form-control" id="thong_tin" name="thong_tin" required placeholder="Thông tin phòng"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Trạng thái</label>
                                        <div class="col-sm-9">
                                            <select id="trang_thai" name="trang_thai" class="form-control">
                                                <option value="2">Còn trống</option>
                                                <option value="1">Đã thuê</option>
                                                <option value="0">Sửa chữa</option>
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