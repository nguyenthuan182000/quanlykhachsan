<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh Sách Loại Phòng</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <h5 class="card-title m-b-0"><a href="addloaiPhong.php">
                                    <button type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Add item</button></a></h5>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Hình ảnh</th>
                                    <th>Tên Loại phòng</th>
                                    <th>Khách sạn</th>
                                    <th>Thông tin</th>
                                    <th>Trạng thái</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                //
                                $i=1;
                                foreach ($loai_phongs as $key=> $value)
                                {
                                    ?>
                                    <tr>
                                        <td><?php echo $i++;?></td>
                                        <td><img src="../public/layout/imageloaiphong/<?php echo $value->hinh?>" width="80px" height="50px"></td>
                                        <td><?php echo $value->ten_loai_phong;?></td>
                                        <td><?php echo $value->ten_khach_san;?></td>
                                        <td><?php echo $value->thong_tin;?></td>
                                        <td ><?php if($value->trang_thai ==0){?>
                                                <span class="badge badge-pill badge-danger float">Sửa chữa</span>
                                            <?php } if($value->trang_thai ==2){?>
                                                <span class="badge badge-pill badge-warning float">Hết phòng</span>
                                            <?php } if($value->trang_thai ==1){?>
                                                <span class="badge badge-pill badge-info float">Còn phòng</span>
                                            <?php } ?></td>
                                        <td><button type="button" id="btnSua" onclick="window.location.href='editloaiphong.php?id=<?php echo $value->id; ?>'" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i>Edit</button></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
