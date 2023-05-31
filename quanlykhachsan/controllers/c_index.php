<?php
include ("models/m_index.php");
include("models/m_show_all.php");
class c_index{
    public function index(){
        $m_index = new m_index();
        $banners = $m_index->read_banner(0,3);
        $m_header = new m_show_all();
        $ks = $m_header->read_khach_san();
        $loai_phong = $m_header->read_loai_phong();
        $bai_viet = $m_header->read_bai_viet();
        $dich_vu = $m_header->read_dich_vu();
        $hom_thu = $m_header->read_hom_thu();
        $tin_tuc = $m_header->read_tin_tuc();
        $index = 'views/index/v_index.php';
        include ("templates/index/layout.php");
    }
}