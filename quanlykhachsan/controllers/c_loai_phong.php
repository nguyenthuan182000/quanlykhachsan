<?php
include("models/m_show_all.php");
class c_loai_phong{
    public function loai_phong(){
        $m_header = new m_show_all();
        $ks = $m_header->read_khach_san();
        $loai_phongs = $m_header->read_loai_phong();
        $loai_phong = 'views/phong/v_loai_phong.php';
        include ("templates/loai_phong/layout.php");
    }
}