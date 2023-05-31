<?php
require_once ('database.php');
class m_hom_thu extends database {
    public function insert_hom_thu($id,$ten_khach_hang,$so_dien_thoai,$email,$noi_dung,$trang_thai)
    {
        $sql = "insert into hom_thu values (?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$ten_khach_hang,$so_dien_thoai,$email,$noi_dung,$trang_thai));
    }
    public function read_hom_thu()
    {
        $sql = "SELECT * FROM hom_thu";
        $this->setQuery($sql);
        return $this->loadAllRows();

    }
    public function read_ks(){
        $sql = "SELECT * FROM  khach_san";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_hom_thu_by_id($id)
    {
        $sql = "select trang_thai from hom_thu where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function edit_hom_thu($id,$trang_thai){
        $sql = "update hom_thu set trang_thai = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($trang_thai,$id));
    }
}