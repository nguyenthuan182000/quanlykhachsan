<?php
include("models/m_show_all.php");
class c_chi_tiet_phong{
    public function chi_tiet_phong(){
        if (isset($_GET['id']))
        {
            $id = $_GET['id'];
            $m_header = new m_show_all();
            $phongs = $m_header->read_phong($id);
        }
        $m_header = new m_show_all();
        $ks = $m_header->read_khach_san();
        $pg = $m_header->read_allphong();
        $dich_vu = $m_header->read_dich_vu();
        $khuyen_mai = $m_header->read_khuyen_mai();
        $chi_tiet_phong = 'views/phong/v_chi_tiet_phong.php';
        include ("templates/chi_tiet_phong/layout.php");
    }
}