<?php
require_once ('database.php');
class m_tin_tuc extends database {
    public function insert_tin_tuc($id,$hinh,$ten_tin_tuc,$id_khach_san,$noi_dung,$ngay_them,$trang_thai)
    {
        $sql = "insert into tin_tuc values (?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$hinh,$ten_tin_tuc,$id_khach_san,$noi_dung,$ngay_them,$trang_thai));
    }
    public function read_tin_tuc()
    {
        $sql = "SELECT tt.id, tt.hinh, tt.ten_tin_tuc, ks.ten_khach_san, tt.noi_dung, tt.ngay_them, tt.trang_thai  FROM tin_tuc as tt, khach_san as ks WHERE tt.id_khach_san= ks.id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_ks(){
        $sql = "SELECT * FROM  khach_san";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_tin_tuc_by_id($id)
    {
        $sql = "SELECT tt.id, tt.hinh, tt.ten_tin_tuc, ks.ten_khach_san, tt.noi_dung, tt.ngay_them, tt.trang_thai  From tin_tuc as tt, khach_san as ks WHERE tt.id_khach_san= ks.id and tt.id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function edit_tin_tuc($id,$hinh,$ten_tin_tuc,$id_khach_san,$noi_dung,$trang_thai){
        $sql = "update tin_tuc set hinh = ?, ten_tin_tuc = ?, id_khach_san = ?, noi_dung = ?, trang_thai = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($hinh,$ten_tin_tuc,$id_khach_san,$noi_dung,$trang_thai,$id));
    }
}