<?php
include ("models/m_loai_nguoi_dung.php");
include ("SimpleImage.php");
class c_loai_nguoi_dung {
    public function index()
    {
        //xu ly phan danh sach bài viết
        $m_loai_nguoi_dung = new m_loai_nguoi_dung();
        $loai_nguoi_dungs = $m_loai_nguoi_dung->read_loai_nguoi_dung();
        $loai_nguoi_dung='views/loai_nguoi_dung/v_loai_nguoi_dung.php';
        include ("templates/loai_nguoi_dung/layout.php");
    }
    public function  add_loai_nguoi_dung(){
        $m_loai_nguoi_dung = new  m_loai_nguoi_dung();

        if (isset($_POST['btnSave']))
        {
            $id = NULL;
            $ten_loai_nguoi_dung = $_POST["ten_loai_nguoi_dung"];
            $id_khach_san = $_POST["ten_khach_san"];
            $trang_thai = $_POST["trang_thai"];
            $result_insert = $m_loai_nguoi_dung->insert_loai_nguoi_dung($id,$ten_loai_nguoi_dung,$id_khach_san,$trang_thai);
            if ($result_insert)
            {
                echo "<script>
                alert('Thêm thành công');
                window.location='loai_nguoi_dung.php'</script>";

            }
            else
            {
                echo "<script>alert('Thêm không thành công')</script>";
            }
        }
        $ks=$m_loai_nguoi_dung->read_ks();
        $loai_nguoi_dung = 'views/loai_nguoi_dung/v_add_loai_nguoi_dung.php';
        include 'templates/loai_nguoi_dung/layout.php';
    }
    public function edit_loai_nguoi_dung(){
        $m_loai_nguoi_dung = new m_loai_nguoi_dung();
        if (isset($_GET['id']))
        {
            $loai_nguoi_dung_detail = $m_loai_nguoi_dung->read_loai_nguoi_dung_by_id($_GET['id']);
            if (isset($_POST['btnSave'])) {
                $id = $_GET['id'];
                $ten_loai_nguoi_dung = $_POST["ten_loai_nguoi_dung"];
                $id_khach_san = $_POST["ten_khach_san"];
                $trang_thai = $_POST["trang_thai"];
                $result = $m_loai_nguoi_dung->edit_loai_nguoi_dung($id,$ten_loai_nguoi_dung,$id_khach_san,$trang_thai);
                if ($result) {
                    echo "<script>
                    alert('Cập nhật thành công');
                    window.location='loai_nguoi_dung.php'</script>";

                } else {
                    echo "<script>alert('Cập nhật không thành công')</script>";
                }

            }

        }
        $ks=$m_loai_nguoi_dung->read_ks();
        $loai_nguoi_dung = 'views/loai_nguoi_dung/v_edit_loai_nguoi_dung.php';
        include 'templates/loai_nguoi_dung/layout.php';
    }
}