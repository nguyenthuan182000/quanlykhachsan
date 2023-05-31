<?php
include ("models/m_khuyen_mai.php");
include ("SimpleImage.php");
class c_khuyen_mai {
    public function index()
    {
        //xu ly phan danh sach khuyen_mai
        $m_khuyen_mai = new m_khuyen_mai();
        $khuyen_mais = $m_khuyen_mai->read_khuyen_mai();
        $khuyen_mai='views/khuyen_mai/v_khuyen_mai.php';
        include ("templates/khuyen_mai/layout.php");
    }
    public function  add_khuyen_mai(){
        $m_khuyen_mai = new  m_khuyen_mai();

        if (isset($_POST['btnSave']))
        {
            $id = NULL;
            $hinh= ($_FILES['f_hinh']['error'] == 0) ? $_FILES['f_hinh']['name'] : "";
            $ten_khuyen_mai = $_POST["ten_khuyen_mai"];
            $noi_dung = $_POST["noi_dung"];
            $phan_tram_km = $_POST["phan_tram_km"];
            $ngay_bat_dau = $_POST["ngay_bat_dau"];
            $ngay_ket_thuc = $_POST["ngay_ket_thuc"];
            $id_khach_san = $_POST["ten_khach_san"];
            $trang_thai = $_POST["trang_thai"];
            $result_insert = $m_khuyen_mai->insert_khuyen_mai($id,$hinh,$ten_khuyen_mai,$noi_dung,$phan_tram_km,$ngay_bat_dau,$ngay_ket_thuc,$id_khach_san,$trang_thai);
            if ($result_insert)
            {
                if ($hinh != "")
                {
                    move_uploaded_file($_FILES['f_hinh']['tmp_name'],"../public/layout/imagekhuyenmai/$hinh");
                    $image = new  SimpleImage();
                    $dataImage['path'] = "../public/layout/imagekhuyenmai";
                    $dataImage['name'] = $hinh;
                }
                echo "<script>
                alert('Thêm thành công');
                window.location='khuyen_mai.php'</script>";

            }
            else
            {
                echo "<script>alert('Thêm không thành công')</script>";
            }

        }
        $ks=$m_khuyen_mai->read_ks();
        $khuyen_mai = 'views/khuyen_mai/v_add_khuyen_mai.php';
        include 'templates/khuyen_mai/layout.php';
    }
    public function edit_khuyen_mai(){
        $m_khuyen_mai = new m_khuyen_mai();
        if (isset($_GET['id']))
        {
            $khuyen_mai_detail = $m_khuyen_mai->read_khuyen_mai_by_id($_GET['id']);
            if (isset($_POST['btnSave'])) {
                $id = $_GET['id'];
                $hinh = ($_FILES['f_hinh']['error'] == 0) ? $_FILES['f_hinh']['name'] : $khuyen_mai_detail->hinh;
                $ten_khuyen_mai = $_POST["ten_khuyen_mai"];
                $noi_dung = $_POST["noi_dung"];
                $phan_tram_km = $_POST["phan_tram_km"];
                $ngay_bat_dau = $_POST["ngay_bat_dau"];
                $ngay_ket_thuc = $_POST["ngay_ket_thuc"];
                $id_khach_san = $_POST["ten_khach_san"];
                $trang_thai = $_POST["trang_thai"];
                $result = $m_khuyen_mai->edit_khuyen_mai($id,$hinh,$ten_khuyen_mai,$noi_dung,$phan_tram_km,$ngay_bat_dau,$ngay_ket_thuc,$id_khach_san,$trang_thai);
                if ($result) {
                    if ($_FILES["f_hinh"]["error"] == 0) {
                        move_uploaded_file($_FILES['f_hinh']['tmp_name'], "../public/layout/imagekhuyenmai/$hinh");
                        $image = new  SimpleImage();
                        $dataImage['path'] = "../public/layout/imagekhuyenmai";
                        $dataImage['name'] = $hinh;
                    }
                    echo "<script>
                    alert('Cập nhật thành công');
                    window.location='khuyen_mai.php'
                    </script>";

                } else {
                    echo "<script>alert('Cập nhật không thành công')</script>";
                }
            }
    }
        $ks=$m_khuyen_mai->read_ks();
        $khuyen_mai = 'views/khuyen_mai/v_edit_khuyen_mai.php';
        include 'templates/khuyen_mai/layout.php';
    }
}