<?php
require_once ('database.php');
class m_bai_viet extends database {
    public function insert_bai_viet($id,$hinh,$ten_bai_viet,$noi_dung,$id_khach_san,$ngay_them,$trang_thai)
    {
        $sql = "insert into bai_viet values (?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$hinh,$ten_bai_viet,$noi_dung,$id_khach_san,$ngay_them,$trang_thai));
    }
    public function read_bai_viet()
    {
        $sql = "SELECT bv.id,bv.hinh,bv.ten_bai_viet,bv.noi_dung,ks.ten_khach_san,bv.ngay_them,bv.trang_thai FROM bai_viet as bv, khach_san as ks WHERE bv.id_khach_san= ks.id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_ks(){
        $sql = "SELECT * FROM  khach_san";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_bai_viet_by_id($id)
    {
        $sql = "SELECT bv.id,bv.hinh,bv.ten_bai_viet,bv.noi_dung,ks.ten_khach_san,bv.ngay_them,bv.trang_thai FROM bai_viet as bv, khach_san as ks WHERE bv.id_khach_san= ks.id and bv.id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function edit_bai_viet($id,$hinh,$ten_bai_viet,$noi_dung,$id_khach_san,$ngay_them,$trang_thai){
        $sql = "update bai_viet set hinh = ?, ten_bai_viet = ?,noi_dung = ?,id_khach_san = ?,ngay_them = ? ,trang_thai = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($hinh,$ten_bai_viet,$noi_dung,$id_khach_san,$ngay_them,$trang_thai,$id));
    }
}