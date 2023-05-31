<?php
require_once ('database.php');
class m_hom_thu extends database {
    public function insert_hom_thu($id,$ten_khach_hang,$so_dien_thoai,$email,$noi_dung,$trang_thai)
    {
        $sql = "insert into hom_thu values (?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$ten_khach_hang,$so_dien_thoai,$email,$noi_dung,$trang_thai));
    }
}