<?php
include ("models/m_dat_phong.php");
class c_dat_phong {
    public function index()
    {
        //xu ly phan danh sach bài viết
        $m_dat_phong = new m_dat_phong();
        $dat_phongs = $m_dat_phong->read_dat_phong();
        $dat_phong='views/dat_phong/v_dat_phong.php';
        include ("templates/dat_phong/layout.php");
    }
    public function  add_dat_phong(){
        $m_dat_phong = new  m_dat_phong();

        if (isset($_POST['btnSave']))
        {
            $id = NULL;
            $ten_khach_hang = $_POST["ten_khach_hang"];
            $so_dien_thoai = $_POST["so_dien_thoai"];
            $CMND = $_POST["CMND"];
            $email = $_POST["email"];
            $id_phong = $_POST["phong"];
            $gia = $_POST["gia"];
            $id_phan_tram_km = $_POST["phan_tram_km"];
            $so_luong = $_POST["so_luong"];
            $ngay_den = $_POST["ngay_den"];
            $ngay_di = $_POST["ngay_di"];
            $nguoi_lon = $_POST["nguoi_lon"];
            $tre_em = $_POST["tre_em"];
            $thanh_tien = $_POST["thanh_tien"];
            $trang_thai = $_POST["trang_thai"];
            $result_insert = $m_dat_phong->insert_dat_phong($id,$ten_khach_hang,$so_dien_thoai,$CMND,$email,$id_phong,$gia,$id_phan_tram_km,$so_luong,$ngay_den,$ngay_di,$nguoi_lon,$tre_em,$thanh_tien,$trang_thai);
            if ($result_insert)
            {
                echo "<script>
                alert('Thêm thành công');
                window.location='dat_phong.php'</script>";

            }
            else
            {
                echo "<script>alert('thêm không thành công')</script>";
            }
        }
        $pg=$m_dat_phong->read_pg();
        $km=$m_dat_phong->read_km();
        $dat_phong = 'views/dat_phong/v_add_dat_phong.php';
        include 'templates/dat_phong/layout.php';
    }
    public function edit_dat_phong(){
        $m_dat_phong = new m_dat_phong();
        if (isset($_GET['id']))
        {
            $dat_phong_detail = $m_dat_phong->read_dat_phong_by_id($_GET['id']);
            if (isset($_POST['btnSave'])) {
                $id = $_GET['id'];
                $trang_thai = 1;
                $result = $m_dat_phong->edit_dat_phong($id,$trang_thai);
                if ($result) {
                    echo "<script>
                    alert('Cập nhật thành công');
                    window.location='dat_phong.php'
                    </script>";

                } else {
                    echo "<script>alert('Cập nhật không thành công')</script>";
                }

            }
        }
        $pg=$m_dat_phong->read_pg();
        $km=$m_dat_phong->read_km();
        $dat_phong = 'views/dat_phong/v_edit_dat_phong.php';
        include 'templates/dat_phong/layout.php';
    }
    public function chi_tiet_dat_phong(){
        $m_dat_phong = new m_dat_phong();
        if (isset($_GET['id'])) {
            $dat_phong_detail = $m_dat_phong->chi_tiet_dat_phong_by_id($_GET['id']);
        }
        $khach_sans = $m_dat_phong->read_ks();
        $dat_phong = 'views/dat_phong/v_chi_tiet_dat_phong.php';
        include 'templates/dat_phong/layout.php';
    }
}