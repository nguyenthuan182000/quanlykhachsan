<?php
include("models/m_show_all.php");
class c_dich_vu{
    public function dich_vu(){
        $m_header = new m_show_all();
        $ks = $m_header->read_khach_san();
        $dich_vus = $m_header->read_dich_vu();
        $dich_vu = 'views/dich_vu/v_dich_vu.php';
        include ("templates/dich_vu/layout.php");
    }
}