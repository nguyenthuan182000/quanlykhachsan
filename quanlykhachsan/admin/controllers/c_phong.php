<?php
include("models/m_phong.php");
include("SimpleImage.php");
class c_phong
{
    public function index()
    {
        //xu ly phan danh sach bài viết
        $m_phong = new m_phong();
        $phongs = $m_phong->read_phong();
        $phong = 'views/phong/v_phong.php';
        include("templates/phong/layout.php");
    }
    public function  add_phong()
    {
        $m_phong = new  m_phong();

        if (isset($_POST['btnSave'])) {
            $id = NULL;
            $hinh = ($_FILES['f_hinh']['error'] == 0) ? $_FILES['f_hinh']['name'] : "";
            $ten_phong = $_POST["ten_phong"];
            $id_loai_phong = $_POST["ten_loai_phong"];
            $gia = $_POST["gia"];
            $so_nguoi = $_POST["so_nguoi"];
            $dien_tich = $_POST["dien_tich"];
            $loai_giuong = $_POST["loai_giuong"];
            $thong_tin = $_POST["thong_tin"];
            $trang_thai = $_POST["trang_thai"];
            $result_insert = $m_phong->insert_phong($id, $hinh, $ten_phong, $id_loai_phong, $gia, $so_nguoi, $dien_tich, $loai_giuong, $thong_tin, $trang_thai);
            if ($result_insert) {
                if ($hinh != "") {
                    move_uploaded_file($_FILES['f_hinh']['tmp_name'], "../public/layout/image_phong/$hinh");
                    $image = new  SimpleImage();
                    $dataImage['path'] = "../public/layout/image_phong";
                    $dataImage['name'] = $hinh;
                }
                echo "<script>
                alert('Thêm thành công');
                window.location='phong.php'
                </script>";
            } else {
                echo "<script>alert('Thêm không thành công')</script>";
            }
        }
        $lp = $m_phong->read_lp();
        $km = $m_phong->read_km();
        $phong = 'views/phong/v_add_phong.php';
        include 'templates/phong/layout.php';
    }
    public function edit_phong()
    {
        $m_phong = new m_phong();
        if (isset($_GET['id'])) {
            $phong_detail = $m_phong->read_phong_by_id($_GET['id']);
            if (isset($_POST['btnSave'])) {
                $id = $_GET['id'];
                $hinh = ($_FILES['f_hinh']['error'] == 0) ? $_FILES['f_hinh']['name'] : $phong_detail->hinh;
                $ten_phong = $_POST["ten_phong"];
                $id_loai_phong = $_POST["ten_loai_phong"];
                $gia = $_POST["gia"];
                $so_nguoi = $_POST["so_nguoi"];
                $dien_tich = $_POST["dien_tich"];
                $loai_giuong = $_POST["loai_giuong"];
                $thong_tin = $_POST["thong_tin"];
                $trang_thai = $_POST["trang_thai"];
                $result = $m_phong->edit_phong($id, $hinh, $ten_phong, $id_loai_phong, $gia, $so_nguoi, $dien_tich, $loai_giuong, $thong_tin, $trang_thai);
                if ($result) {
                    if ($_FILES["f_hinh"]["error"] == 0) {
                        move_uploaded_file($_FILES['f_hinh']['tmp_name'], "../public/layout/image_phong/$hinh");
                        $image = new  SimpleImage();
                        $dataImage['path'] = "../public/layout/image_phong";
                        $dataImage['name'] = $hinh;
                    }
                    echo "<script>
                    alert('Cập nhật thành công');
                    window.location='phong.php'</script>";
                } else {
                    echo "<script>alert('Cập nhật không thành công')</script>";
                }
            }
        }
        $lp = $m_phong->read_lp();
        $km = $m_phong->read_km();
        $phong = 'views/phong/v_edit_phong.php';
        include 'templates/phong/layout.php';
    }
}
