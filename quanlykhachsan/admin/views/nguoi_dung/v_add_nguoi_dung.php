<div class="wrapper">
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Thêm Người Dùng</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" enctype="multipart/form-data" method="post">
                                <div class="card-body">
                                    <h4>Thêm người dùng </h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên người dùng</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="ten_nguoi_dung"  name="ten_nguoi_dung"  placeholder="Tên người dùng" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ngày sinh</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="ngay_sinh"  name="ngay_sinh" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Giới tính</label>
                                        <div class="col-sm-9">
                                            <select id="gioi_tinh" name="gioi_tinh" class="form-control">
                                                <option value="0">Nam</option>
                                                <option value="1">Nữ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Loại người dùng</label>
                                        <div class="col-sm-9">
                                            <select name="ten_loai_nguoi_dung" class="form-control">
                                                <option>--- Chức vụ ---</option>
                                                <?php
                                                foreach ($lnd as $key=> $std) {
                                                    if ($std->trang_thai==1){
                                                        ?>
                                                        <option value="<?php echo  $std->id ;?>"><?php echo $std-> ten_loai_nguoi_dung; ?></option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Số điện thoại</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="so_dien_thoai"  name="so_dien_thoai" placeholder="Số điện thoại" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Địa chỉ</label>
                                        <div class="col-sm-9">
                                            <textarea type="text" class="form-control" id="dia_chi"  name="dia_chi" placeholder="Địa chỉ" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="email"  name="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên đăng nhập</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="ten_dang_nhap"  name="ten_dang_nhap" placeholder="Tên đăng nhập" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="password"  name="password" placeholder="Password" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Trạng thái</label>
                                        <div class="col-sm-9">
                                            <select id="trang_thai" name="trang_thai" class="form-control">
                                                <option value="1">Hoạt động</option>
                                                <option value="0">Không hoạt động</option>
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

