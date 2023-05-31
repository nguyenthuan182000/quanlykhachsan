<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Hòm Thư Góp Ý</h1>
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
<!--                            <h5 class="card-title m-b-0"><a href="#">-->
<!--                                    <button type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Add item</button></a></h5>-->
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên khách hàng</th>
                                    <th>SĐT</th>
                                    <th>Email</th>
                                    <th>Nội dung</th>
                                    <th>Trạng thái</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                //
                                $i=1;
                                foreach ($hom_thus as $key=> $value)
                                {
                                    ?>
                                    <tr>
                                        <td><?php echo $i++;?></td>
                                        <td><?php echo $value->ten_khach_hang;?></td>
                                        <td><?php echo $value->so_dien_thoai;?></td>
                                        <td><?php echo $value->email;?></td>
                                        <td><?php echo $value->noi_dung;?></td>
                                        <td ><?php if($value->trang_thai ==0){?>
                                                <span class="badge badge-pill badge-warning float">Thư mới</span>
                                            <?php } if($value->trang_thai ==1){?>
                                                <span class="badge badge-pill badge-info float">Đã xem</span>
                                            <?php } ?></td>
                                        <td><button type="button" id="btnSua" onclick="window.location.href='edithomthu.php?id=<?php echo $value->id; ?>'" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i>Edit</button></td>
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
