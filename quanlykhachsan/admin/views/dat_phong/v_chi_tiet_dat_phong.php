<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Main content -->
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-12">
                                <h4 align="center">
                                    <b>HÓA ĐƠN THANH TOÁN</b>
                                </h4></br>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                From
                                <address>
                                    <?php
                                    foreach ($khach_sans as $key=> $std) {
                                    if ($std->trang_thai==1){
                                    ?>
                                    <strong><?php echo $std->ten_khach_san;?></strong><br>
                                        <?php echo $std->dia_chi;?><br>
                                    Phone: <?php echo $std->so_dien_thoai;?><br>
                                    Email: <?php echo $std->email;?>
                                    <?php
                                    }
                                    }
                                    ?>
                                </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-3 invoice-col">
                                To
                                <address>
                                    <strong><?php echo $dat_phong_detail->ten_khach_hang;?></strong><br>
                                    Phone: <?php echo $dat_phong_detail->so_dien_thoai;?><br>
                                    Email: <?php echo $dat_phong_detail->email;?>
                                </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-5 invoice-col">
                                </br></br>
                                <table width="250">
                                    <tr>
                                        <td>Ngày đến:  </td>
                                        <td><?php echo date("d-m-Y", strtotime($dat_phong_detail->ngay_den));?></td>
                                    </tr>
                                    <tr>
                                        <td>Ngày thanh toán:  </td>
                                        <td><?php echo date("d-m-Y", strtotime($dat_phong_detail->ngay_di));?></td>
                                    </tr>
                                </table>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên phòng</th>
                                        <th>Loại phòng</th>
                                        <th>Số lượng</th>
                                        <th>Giá</th>
                                        <th>Khuyến mại</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><?php $i=1; echo $i++;?></td>
                                        <td><?php echo $dat_phong_detail->ten_phong;?></td>
                                        <td><?php echo $dat_phong_detail->ten_loai_phong;?></td>
                                        <td><?php echo $dat_phong_detail->so_luong;?></td>
                                        <td><?php echo number_format($dat_phong_detail->gia);?> VNĐ</td>
                                        <td><?php echo $dat_phong_detail->phan_tram_km;?>%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-6">
                                <p class="lead">Payment Methods:</p>
                                <img src="public/layout/dist/img/credit/visa.png" alt="Visa">
                                <img src="public/layout/dist/img/credit/mastercard.png" alt="Mastercard">
                                <img src="public/layout/dist/img/credit/american-express.png" alt="American Express">
                                <img src="public/layout/dist/img/credit/paypal2.png" alt="Paypal">

                                <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                                    plugg
                                    dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                                </p>
                            </div>
                            <!-- /.col -->
                            <div class="col-6">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th style="width:50%">Thành tiền:</th>
                                            <td><?php echo number_format($dat_phong_detail->thanh_tien);?> VNĐ</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <th><u>Xác nhận</u></th>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-12">
                                <a rel="noopener" target="_blank" class="btn btn-default" onclick="window.print()"><i class="fas fa-print"></i> Print</a>
                                <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                                    Payment
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- /.invoice -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
