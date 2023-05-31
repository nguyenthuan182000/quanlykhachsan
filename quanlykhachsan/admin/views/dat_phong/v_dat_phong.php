<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh Sách Đặt Phòng</h1>
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
                            <h5 class="card-title m-b-0"><a href="adddatphong.php">
                                    <button type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Add item</button></a></h5>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên Khách Hàng</th>
                                    <th scope="col">SĐT</th>
                                    <th scope="col">Phòng</th>
                                    <th scope="col">Trạng Thái</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i=1;
                                foreach ($dat_phongs as $key=> $value)
                                {
                                    ?>
                                    <tr>
                                        <td><?php echo $i++;?></td>
                                        <td><?php echo $value->ten_khach_hang;?></td>
                                        <td><?php echo $value->so_dien_thoai;?></td>
                                        <td><?php echo $value->ten_phong;?></td>
                                        <td ><?php if($value->trang_thai ==0){?>
                                                <span class="badge badge-pill badge-danger float">Chưa thanh toán</span>
                                            <?php } if($value->trang_thai ==1){?>
                                                <span class="badge badge-pill badge-info float">Đã thanh toán</span>
                                            <?php } ?></td>
                                        <td>
                                            <button type="button" id="btnSua" onclick="window.location.href='chi_tiet_dat_phong.php?id=<?php echo $value->id; ?>'" class="btn btn-primary btn-sm"><i class="fas fa-folder"></i>View</button>
                                            <?php if($value->trang_thai ==0){?>
                                            <button type="button" id="btnSua" onclick="window.location.href='editdatphong.php?id=<?php echo $value->id; ?>'" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i>Edit</button>
                                            <?php } ?>
                                                                                    </td>
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
