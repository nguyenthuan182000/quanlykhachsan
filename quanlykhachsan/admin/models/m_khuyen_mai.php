<?php
require_once ('database.php');
class m_khuyen_mai extends database {
    public function insert_khuyen_mai($id,$hinh,$ten_khuyen_mai,$noi_dung,$phan_tram_km,$ngay_bat_dau,$ngay_ket_thuc,$id_khach_san,$trang_thai)
    {
        $sql = "insert into khuyen_mai values (?,?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$hinh,$ten_khuyen_mai,$noi_dung,$phan_tram_km,$ngay_bat_dau,$ngay_ket_thuc,$id_khach_san,$trang_thai));
    }
    public function read_khuyen_mai()
    {
        $sql = "SELECT km.id,km.hinh,km.ten_khuyen_mai,km.noi_dung,km.phan_tram_km,km.ngay_bat_dau,km.ngay_ket_thuc,ks.ten_khach_san,km.trang_thai FROM khuyen_mai as km, khach_san as ks WHERE km.id_khach_san= ks.id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_ks(){
        $sql = "SELECT * FROM  khach_san";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_khuyen_mai_by_id($id)
    {
        $sql = "SELECT km.id,km.hinh,km.ten_khuyen_mai,km.noi_dung,km.phan_tram_km,km.ngay_bat_dau,km.ngay_ket_thuc,ks.ten_khach_san,km.trang_thai FROM khuyen_mai as km, khach_san as ks WHERE km.id_khach_san= ks.id and km.id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function edit_khuyen_mai($id,$hinh,$ten_khuyen_mai,$noi_dung,$phan_tram_km,$ngay_bat_dau,$ngay_ket_thuc,$id_khach_san,$trang_thai){
        $sql = "update khuyen_mai set hinh = ?,ten_khuyen_mai = ?, noi_dung = ?, phan_tram_km = ?, ngay_bat_dau = ?, ngay_ket_thuc = ?,id_khach_san = ?,trang_thai = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($hinh,$ten_khuyen_mai,$noi_dung,$phan_tram_km,$ngay_bat_dau,$ngay_ket_thuc,$id_khach_san,$trang_thai,$id));
    }
}