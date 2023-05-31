<?php
include ("models/m_show_all.php");
class c_lien_he{
    public function lien_he(){
        $m_header = new m_show_all();
        $ks = $m_header->read_khach_san();
        $lien_he = 'views/lien_he/v_lien_he.php';
        include ("templates/lien_he/layout.php");
    }
}