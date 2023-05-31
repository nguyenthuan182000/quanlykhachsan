<?php
include("models/m_show_all.php");
class c_tin_tuc{
    public function tin_tuc(){
        $m_header = new m_show_all();
        $ks = $m_header->read_khach_san();
        $tin_tucs = $m_header->read_tin_tuc();
        $tin_tuc = 'views/tin_tuc/v_tin_tuc.php';
        include ("templates/tin_tuc/layout.php");
    }
}