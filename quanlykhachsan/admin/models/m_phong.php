<?php
require_once ('database.php');
class m_phong extends database {
    public function insert_phong($id,$hinh,$ten_phong,$id_loai_phong,$gia,$so_nguoi,$dien_tich,$loai_giuong,$thong_tin,$trang_thai)
    {
        $sql = "insert into phong values (?,?,?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$hinh,$ten_phong,$id_loai_phong,$gia,$so_nguoi,$dien_tich,$loai_giuong,$thong_tin,$trang_thai));
    }
    public function read_phong()
    {
        $sql = "SELECT pg.id,pg.hinh,pg.ten_phong,lp.ten_loai_phong,pg.gia,pg.so_nguoi,pg.dien_tich,pg.loai_giuong,pg.thong_tin,pg.trang_thai FROM phong as pg, loai_phong as lp WHERE pg.id_loai_phong = lp.id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_lp(){
        $sql = "SELECT * FROM  loai_phong";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_km(){
        $sql = "SELECT * FROM  khuyen_mai";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_phong_by_id($id)
    {
        $sql = "SELECT pg.id,pg.hinh,pg.ten_phong,lp.ten_loai_phong,pg.gia,pg.so_nguoi,pg.dien_tich,pg.loai_giuong,pg.thong_tin,pg.trang_thai FROM phong as pg, loai_phong as lp WHERE pg.id_loai_phong = lp.id and pg.id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function edit_phong($id,$hinh,$ten_phong,$id_loai_phong,$gia,$so_nguoi,$dien_tich,$loai_giuong,$thong_tin,$trang_thai){
        $sql = "update phong set hinh = ?, ten_phong = ?, id_loai_phong = ?, gia = ?, so_nguoi = ?, dien_tich = ?, loai_giuong = ?, thong_tin = ? , trang_thai = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($hinh,$ten_phong,$id_loai_phong,$gia,$so_nguoi,$dien_tich,$loai_giuong,$thong_tin,$trang_thai,$id));
    }
}