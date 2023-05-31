<?php
include("models/m_show_all.php");
include ("models/m_hom_thu.php");
class c_hom_thu{
    public function hom_thu(){
        $m_header = new m_show_all();
        $ks = $m_header->read_khach_san();
        $hom_thus = $m_header->read_hom_thu();
        $hom_thu = 'views/hom_thu/v_hom_thu.php';
        include ("templates/hom_thu/layout.php");
    }
    public function  add_hom_thu(){
        if (isset($_POST['btn_save']))
        {
            $id = NULL;
            $ten_khach_hang = $_POST["ten_khach_hang"];
            $so_dien_thoai = $_POST["so_dien_thoai"];
            $email = $_POST["email"];
            $noi_dung = $_POST["noi_dung"];
            $trang_thai =1;
            $m_hom_thu = new m_hom_thu();
            $result_insert = $m_hom_thu->insert_hom_thu($id,$ten_khach_hang,$so_dien_thoai,$email,$noi_dung,$trang_thai);
            if ($result_insert)
            {
                echo "<script>alert('thêm không thành công');window.location='hom_thu.php'</script>";

            }
            else
            {
                echo "<script>alert('thêm không thành công')</script>";
            }
        }
    include ("views/hom_thu/v_add_hom_thu.php");

    }
}