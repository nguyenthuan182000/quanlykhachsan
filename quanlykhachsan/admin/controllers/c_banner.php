<?php
include("models/m_banner.php");
include("SimpleImage.php");
class c_banner
{
    public function index()
    {
        //xu ly phan danh sach banner
        $m_banner = new m_banner();
        $banners = $m_banner->read_banner();
        $banner = 'views/banner/v_banner.php';
        include("templates/banner/layout.php");
    }
    public function  add_banner()
    {
        $m_banner = new  m_banner();

        if (isset($_POST['btnSave'])) {
            $id = NULL;
            $hinh = ($_FILES['f_hinh']['error'] == 0) ? $_FILES['f_hinh']['name'] : "";
            $ten_banner = $_POST["ten_banner"];
            $id_khach_san = $_POST["ten_khach_san"];
            $trang_thai = $_POST["trang_thai"];
            $result_insert = $m_banner->insert_banner($id, $hinh, $ten_banner, $id_khach_san, $trang_thai);
            if ($result_insert) {
                if ($hinh != "") {
                    move_uploaded_file($_FILES['f_hinh']['tmp_name'], "../public/layout/imagebanner/$hinh");
                    $image = new  SimpleImage();
                    $dataImage['path'] = "../public/layout/imagebanner";
                    $dataImage['name'] = $hinh;
                }
                echo "<script>
                alert('Thêm thành công');
                window.location='banner.php'
                </script>";
            } else {
                echo "<script>alert('thêm không thành công')</script>";
            }
        }
        $ks = $m_banner->read_ks();
        $banner = 'views/banner/v_addbanner.php';
        include 'templates/banner/layout.php';
    }
    public function edit_banner()
    {
        $m_banner = new m_banner();
        if (isset($_GET['id'])) {
            $banner_detail = $m_banner->read_banner_by_idbaner($_GET['id']);
            if (isset($_POST['btnSave'])) {
                $id = $_GET['id'];
                $hinh = ($_FILES['f_hinh']['error'] == 0) ? $_FILES['f_hinh']['name'] : $banner_detail->hinh;
                $ten_banner = $_POST["ten_banner"];
                $id_khach_san = $_POST["ten_khach_san"];
                $trang_thai = $_POST["trang_thai"];

                $result = $m_banner->edit_banner($id, $hinh, $ten_banner, $id_khach_san, $trang_thai);
                if ($result) {
                    if ($_FILES["f_hinh"]["error"] == 0) {
                        move_uploaded_file($_FILES['f_hinh']['tmp_name'], "../public/layout/imagebanner/$hinh");
                        $image = new  SimpleImage();
                        $dataImage['path'] = "../public/layout/imagebanner";
                        $dataImage['name'] = $hinh;
                    }
                    echo "<script>
                    alert('Cập nhật thành công');
                    window.location='banner.php'
                    </script>";
                } else {
                    echo "<script>alert('Cập nhật không thành công')</script>";
                }
            }
        }
        $ks = $m_banner->read_ks();
        $banner = 'views/banner/v_edit_banner.php';
        include 'templates/banner/layout.php';
    }
}
