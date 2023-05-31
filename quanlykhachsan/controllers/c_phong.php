<?php
include("models/m_show_all.php");
class c_phong{
    public function phong(){
        if (isset($_GET['id']))
        {
            $id_loai_phong = $_GET['id'];
            $m_header = new m_show_all();
            $phongs = $m_header->read_phong_by_id_loai_phong($id_loai_phong);
        }
        $m_header = new m_show_all();
        $ks = $m_header->read_khach_san();
        $phong = 'views/phong/v_phong.php';
        include ("templates/phong/layout.php");
    }
}