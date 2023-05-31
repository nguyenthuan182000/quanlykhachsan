<?php
require_once ('database.php');
class m_loai_nguoi_dung extends database {
    public function insert_loai_nguoi_dung($id,$ten_loai_nguoi_dung,$id_khach_san,$trang_thai)
    {
        $sql = "insert into loai_nguoi_dung values (?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$ten_loai_nguoi_dung,$id_khach_san,$trang_thai));
    }
    public function read_loai_nguoi_dung()
    {
        $sql = "SELECT lnd.id,lnd.ten_loai_nguoi_dung,ks.ten_khach_san,lnd.trang_thai FROM loai_nguoi_dung as lnd, khach_san as ks WHERE lnd.id_khach_san= ks.id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_ks(){
        $sql = "SELECT * FROM  khach_san";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_loai_nguoi_dung_by_id($id)
    {
        $sql = "SELECT lnd.id,lnd.ten_loai_nguoi_dung,ks.ten_khach_san,lnd.trang_thai FROM loai_nguoi_dung as lnd, khach_san as ks WHERE lnd.id_khach_san= ks.id and lnd.id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function edit_loai_nguoi_dung($id,$ten_loai_nguoi_dung,$id_khach_san,$trang_thai){
        $sql = "update loai_nguoi_dung set ten_loai_nguoi_dung = ?,id_khach_san = ?,trang_thai = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($ten_loai_nguoi_dung,$id_khach_san,$trang_thai,$id));
    }
}