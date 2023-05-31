<?php
include ("models/m_bai_viet.php");
include ("SimpleImage.php");
class c_bai_viet {
    public function index()
    {
        //xu ly phan danh sach bài viết
        $m_bai_viet = new m_bai_viet();
        $bai_viets = $m_bai_viet->read_bai_viet();
        $bai_viet='views/bai_viet/v_bai_viet.php';
        include ("templates/bai_viet/layout.php");
    }
    public function  add_bai_viet(){
        $m_bai_viet = new  m_bai_viet();

        if (isset($_POST['btnSave']))
        {
            $id = NULL;
            $hinh= ($_FILES['f_hinh']['error'] == 0) ? $_FILES['f_hinh']['name'] : "";
            $ten_bai_viet = $_POST["ten_bai_viet"];
            $noi_dung = $_POST["noi_dung"];
            $id_khach_san = $_POST["ten_khach_san"];
            $ngay_them = $_POST["ngay_them"];
            $trang_thai = $_POST["trang_thai"];
            $result_insert = $m_bai_viet->insert_bai_viet($id,$hinh,$ten_bai_viet,$noi_dung,$id_khach_san,$ngay_them,$trang_thai);
            if ($result_insert)
            {
                if ($hinh != "")
                {
                    move_uploaded_file($_FILES['f_hinh']['tmp_name'],"../public/layout/image_bai_viet/$hinh");
                    $image = new  SimpleImage();
                    $dataImage['path'] = "../public/layout/image_bai_viet";
                    $dataImage['name'] = $hinh;
                }
                echo "<script>
                alert('Thêm thành công');
                window.location='bai_viet.php'</script>";

            }
            else
            {
                echo "<script>alert('Thêm không thành công')</script>";
            }
        }
        $ks=$m_bai_viet->read_ks();
        $bai_viet = 'views/bai_viet/v_addbaiviet.php';
        include 'templates/bai_viet/layout.php';
    }
    public function edit_bai_viet(){
        $m_bai_viet = new m_bai_viet();
        if (isset($_GET['id']))
        {
            $bai_viet_detail = $m_bai_viet->read_bai_viet_by_id($_GET['id']);
            if (isset($_POST['btnSave'])) {
                $id = $_GET['id'];
                $hinh = ($_FILES['f_hinh']['error'] == 0) ? $_FILES['f_hinh']['name'] : $bai_viet_detail->hinh;
                $ten_bai_viet = $_POST["ten_bai_viet"];
                $noi_dung = $_POST["noi_dung"];
                $id_khach_san = $_POST["ten_khach_san"];
                $ngay_them = $_POST["ngay_them"];
                $trang_thai = $_POST["trang_thai"];

                $result = $m_bai_viet->edit_bai_viet($id,$hinh,$ten_bai_viet,$noi_dung,$id_khach_san,$ngay_them,$trang_thai);
                if ($result) {
                    if ($_FILES["f_hinh"]["error"] == 0) {
                        move_uploaded_file($_FILES['f_hinh']['tmp_name'], "../public/layout/image_bai_viet/$hinh");
                        $image = new  SimpleImage();
                        $dataImage['path'] = "../public/layout/image_bai_viet";
                        $dataImage['name'] = $hinh;
                    }
                    echo "<script>
                    alert('Cập nhật thành công');
                    window.location='bai_viet.php'</script>";

                } else {
                    echo "<script>alert('Cập nhật không thành công')</script>";
                }
            }
        }
        $ks=$m_bai_viet->read_ks();
        $bai_viet = 'views/bai_viet/v_edit_bai_viet.php';
        include 'templates/bai_viet/layout.php';
    }
}