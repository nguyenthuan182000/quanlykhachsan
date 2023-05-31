<?php
include("models/m_show_all.php");
class c_bai_viet{
    public function bai_viet(){
        $m_header = new m_show_all();
        $ks = $m_header->read_khach_san();
        $bai_viets = $m_header->read_bai_viet();
        $bai_viet = 'views/bai_viet/v_bai_viet.php';
        include ("templates/bai_viet/layout.php");
    }
}