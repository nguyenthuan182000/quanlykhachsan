<?php
include ("models/m_hom_thu.php");
include ("SimpleImage.php");
class c_hom_thu {
    public function index()
    {
        //xu ly phan danh sach bài viết
        $m_hom_thu = new m_hom_thu();
        $hom_thus = $m_hom_thu->read_hom_thu();
        $hom_thu='views/hom_thu/v_hom_thu.php';
        include ("templates/hom_thu/layout.php");
    }
    public function  add_hom_thu(){
        $m_hom_thu = new  m_hom_thu();

        if (isset($_POST['btnSave']))
        {
            $id = NULL;
            $ten_khach_hang = $_POST["ten_khach_hang"];
            $so_dien_thoai = $_POST["so_dien_thoai"];
            $id_khach_san = $_POST["ten_khach_san"];
            $noi_dung = $_POST["noi_dung"];
            $trang_thai = $_POST["trang_thai"];
            $result_insert = $m_hom_thu->insert_hom_thu($id,$ten_khach_hang,$so_dien_thoai,$id_khach_san,$noi_dung,$trang_thai);
            if ($result_insert)
            {
                echo "<script>
                alert('Thêm thành công')
                window.location='hom_thu.php'
                </script>";

            }
            else
            {
                echo "<script>alert('Thêm không thành công')</script>";
            }
        }
        $ks=$m_hom_thu->read_ks();
        $hom_thu = 'views/hom_thu/v_addhomthu.php';
        include 'templates/hom_thu/layout.php';
    }
    public function edit_hom_thu(){
        $m_hom_thu = new m_hom_thu();
        if (isset($_GET['id']))
        {
            $hom_thu_detail = $m_hom_thu->read_hom_thu_by_id($_GET['id']);
            if (isset($_POST['btnSave'])) {
                $id = $_GET['id'];
                $trang_thai = $_POST["trang_thai"];
                $result = $m_hom_thu->edit_hom_thu($id,$trang_thai);
                if ($result) {
                    echo "<script>
                    alert('Cập nhật thành công');
                    window.location='hom_thu.php'</script>";

                } else {
                    echo "<script>alert('Cập nhật không thành công')</script>";
                }
            }
        }
        $ks=$m_hom_thu->read_ks();
        $hom_thu = 'views/hom_thu/v_edit_hom_thu.php';
        include 'templates/hom_thu/layout.php';
    }
}