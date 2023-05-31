<div class="wrapper">
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Chỉnh Sửa Thông Tin Người Dùng</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" enctype="multipart/form-data" method="post">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên người dùng</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="ten_nguoi_dung"  name="ten_nguoi_dung" value="<?php echo $nguoi_dung_detail->ten_nguoi_dung;?>" placeholder="Tên người dùng">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ngày sinh</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="ngay_sinh"  name="ngay_sinh" value="<?php echo $nguoi_dung_detail->ngay_sinh;?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Giới tính</label>
                                        <div class="col-sm-9">
                                            <select id="gioi_tinh" name="gioi_tinh" class="form-control">
                                                <option value="0" <?php echo $nguoi_dung_detail->gioi_tinh == 0 ?"selected" :"";?>>Nam</option>
                                                <option value="1" <?php echo $nguoi_dung_detail->gioi_tinh == 1 ?"selected" :"";?>>Nữ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Loại người dùng</label>
                                        <div class="col-sm-9">
                                            <select name="ten_loai_nguoi_dung" class="form-control">
                                                <?php
                                                foreach ($lnd as $key=> $std) {
                                                    if ($std->trang_thai==1){
                                                        ?>
                                                        <option value="<?php echo  $std->id ;?>" <?php echo $nguoi_dung_detail->ten_loai_nguoi_dung == $std->ten_loai_nguoi_dung ?"selected" :"";?>><?php echo $std-> ten_loai_nguoi_dung; ?></option>
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
                                            <input type="text" class="form-control" id="so_dien_thoai"  name="so_dien_thoai" placeholder="Số điện thoại" value="<?php echo $nguoi_dung_detail->so_dien_thoai;?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Địa chỉ</label>
                                        <div class="col-sm-9">
                                            <textarea type="text" class="form-control" id="dia_chi"  name="dia_chi" placeholder="Địa chỉ" ><?php echo $nguoi_dung_detail->dia_chi;?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="email"  name="email" placeholder="Email" value="<?php echo $nguoi_dung_detail->email;?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên đăng nhập</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="ten_dang_nhap"  name="ten_dang_nhap" placeholder="Tên đăng nhập" value="<?php echo $nguoi_dung_detail->ten_dang_nhap;?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="password"  name="password" placeholder="Password" value="<?php echo $nguoi_dung_detail->password;?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Trạng thái</label>
                                        <div class="col-sm-9">
                                            <select id="trang_thai" name="trang_thai" class="form-control">
                                                <option value="0" <?php echo $nguoi_dung_detail->trang_thai == 0 ?"selected" :""?>>Không hoạt động</option>
                                                <option value="1" <?php echo $nguoi_dung_detail->trang_thai == 1 ?"selected" :""?>>Hoạt động</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info" name="btnSave" id="">Done</button>
                                    <a href="nguoi_dung.php"><button type="button" class="btn btn-default float-right">Cancel</button></a>
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









