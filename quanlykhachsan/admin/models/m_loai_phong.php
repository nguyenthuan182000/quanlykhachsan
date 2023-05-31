<?php
require_once ('database.php');
class m_loai_phong extends database {
    public function insert_loai_phong($id,$hinh,$ten_loai_phong,$id_khach_san,$thong_tin,$trang_thai)
    {
        $sql = "insert into loai_phong values (?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$hinh,$ten_loai_phong,$id_khach_san,$thong_tin,$trang_thai));
    }
    public function read_loai_phong()
    {
        $sql = "SELECT lp.id,lp.ten_loai_phong,lp.hinh,ks.ten_khach_san,lp.thong_tin,lp.trang_thai FROM loai_phong as lp, khach_san as ks WHERE lp.id_khach_san= ks.id";
        $this->setQuery($sql);
        return $this->loadAllRows();

    }
    public function read_ks(){
        $sql = "SELECT * FROM  khach_san";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_loai_phong_by_id($id)
    {
        $sql = "SELECT lp.id,lp.ten_loai_phong,lp.hinh,ks.ten_khach_san,lp.thong_tin,lp.trang_thai FROM loai_phong as lp, khach_san as ks WHERE lp.id_khach_san= ks.id and lp.id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function edit_loai_phong($id,$hinh,$ten_loai_phong,$id_khach_san,$thong_tin,$trang_thai){
        $sql = "update loai_phong set hinh = ?,ten_loai_phong = ?,id_khach_san = ?, thong_tin = ?, trang_thai = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($hinh,$ten_loai_phong,$id_khach_san,$thong_tin,$trang_thai,$id));
    }
}