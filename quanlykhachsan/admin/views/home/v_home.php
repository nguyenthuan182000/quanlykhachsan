<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-2">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3><?php
                                echo $dp->DP
                                ?></h3>

                            <p>Tổng số khách hàng</p>
                        </div>
                        <a href="dat_phong.php" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-md-2">
                    <!-- small box -->
                    <div class="small-box bg-light">
                        <div class="inner">
                            <h3><?php
                                echo $p->P
                                ?></h3>
                            <p>Tổng số phòng </p>
                        </div>
                        <a href="phong.php" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-md-2">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?php
                                echo $nv->NV
                                ?></h3>

                            <p>Tổng số nhân sự</p>
                        </div>
                        <a href="nguoi_dung.php" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <!-- ./col -->
                <div class="col-md-2">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?php
                                echo $dv->DV
                                ?></h3>

                            <p>Tổng số dịch vụ</p>
                        </div>
                        <a href="dich_vu.php" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <!-- ./col -->
                <div class="col-md-2">
                    <!-- small box -->
                    <div class="small-box bg-gradient-warning">
                        <div class="inner">
                            <h3><?php
                                echo $km->KM
                                ?></h3>

                            <p>Tổng số chương trình khuyến mãi</p>
                        </div>
                        <a href="khuyen_mai.php" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">
                    <!-- BAR CHART -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Biểu doanh thu theo tháng</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="doanh_thu" style="min-height: 250px; height: 600px; max-height: 800px; max-width: 100%;"></canvas>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <script>
                            // get line chart canvas
                            var buyers = document.getElementById('doanh_thu').getContext('2d');

                            var myLineChart = new Chart(buyers, {
                                type: 'line',
                                data: <?php echo $strJSON; ?>,
                                options: {
                                    responsive: true,
                                    title: {
                                        //display: true,
                                        //position:'right',
                                        //text:'Doanh thu năm 2016'
                                    }, // end title
                                    scales: {
                                        xAxes: [{
                                            display: true,
                                            scaleLabel: {
                                                display: true,
                                                labelString: 'Tháng Năm',

                                            }
                                        }],
                                        yAxes: [{
                                            display: true,
                                            scaleLabel: {
                                                display: true,
                                                labelString: 'Trị giá'
                                            },
                                            ticks: {
                                                suggestedMin: -10,
                                                suggestedMax: 250,
                                            }
                                        }]
                                    }
                                }
                            });
                        </script>
                    </div>
                    <!-- /.card -->
                </section>
                <!-- /.Left col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->