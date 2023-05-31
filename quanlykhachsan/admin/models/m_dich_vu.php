<?php
require_once ('database.php');
class m_dich_vu extends database {
    public function insert_dich_vu($id,$hinh,$ten_dich_vu,$thong_tin,$id_khach_san,$trang_thai)
    {
        $sql = "insert into dich_vu_khach_san values (?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$hinh,$ten_dich_vu,$thong_tin,$id_khach_san,$trang_thai));
    }
    public function read_dich_vu()
    {
        $sql = "SELECT dv.id,dv.ten_dich_vu,dv.hinh,dv.thong_tin,ks.ten_khach_san,dv.trang_thai FROM dich_vu_khach_san as dv, khach_san as ks WHERE dv.id_khach_san= ks.id";
        $this->setQuery($sql);
        return $this->loadAllRows();

    }
    public function read_ks(){
        $sql = "SELECT * FROM  khach_san";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_dich_vu_by_id($id)
    {
        $sql = "SELECT dv.id,dv.hinh,dv.ten_dich_vu,dv.thong_tin,ks.ten_khach_san,dv.trang_thai FROM dich_vu_khach_san as dv, khach_san as ks WHERE dv.id_khach_san= ks.id and dv.id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function edit_dich_vu($id,$hinh,$ten_dich_vu,$thong_tin,$id_khach_san,$trang_thai){
        $sql = "update dich_vu_khach_san set hinh = ?,ten_dich_vu = ?,thong_tin = ?,id_khach_san = ?,trang_thai = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($hinh,$ten_dich_vu,$thong_tin,$id_khach_san,$trang_thai,$id));
    }
}