<?php
require_once ('database.php');
class m_banner extends database {
    public function insert_banner($id,$hinh,$ten_banner,$id_khach_san,$trang_thai)
    {
        $sql = "insert into banner values (?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$hinh,$ten_banner,$id_khach_san,$trang_thai));
    }
    public function read_banner()
    {
        $sql = "SELECT bn.id,bn.ten_banner,bn.hinh,ks.ten_khach_san,bn.trang_thai FROM banner as bn, khach_san as ks WHERE bn.id_khach_san= ks.id";
        $this->setQuery($sql);
        return $this->loadAllRows();

    }
    public function read_ks(){
        $sql = "SELECT * FROM  khach_san";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_banner_by_idbaner($id)
    {
        $sql = "SELECT bn.id,bn.ten_banner,bn.hinh,ks.ten_khach_san,bn.trang_thai FROM banner as bn, khach_san as ks WHERE bn.id_khach_san= ks.id AND bn.id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function edit_banner($id,$hinh,$ten_banner,$id_khach_san,$trang_thai){
        $sql = "update banner set hinh = ?,ten_banner = ?,id_khach_san = ?,trang_thai = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($hinh,$ten_banner,$id_khach_san,$trang_thai,$id));
    }
}