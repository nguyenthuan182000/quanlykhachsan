<?php
require_once ('database.php');
class m_dat_phong extends database {
    public function insert_dat_phong($id,$ten_khach_hang,$so_dien_thoai,$CMND,$email,$id_phong,$gia,$id_phan_tram_km,$so_luong,$ngay_den,$ngay_di,$nguoi_lon,$tre_em,$thanh_tien,$trang_thai)
    {
        $sql = "insert into dat_phong values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$ten_khach_hang,$so_dien_thoai,$CMND,$email,$id_phong,$gia,$id_phan_tram_km,$so_luong,$ngay_den,$ngay_di,$nguoi_lon,$tre_em,$thanh_tien,$trang_thai));
    }
    public function read_dat_phong()
    {
        $sql = "SELECT dp.id,dp.ten_khach_hang,dp.so_dien_thoai,dp.CMND,dp.email,pg.ten_phong,dp.gia,km.phan_tram_km,dp.so_luong,dp.ngay_den,dp.ngay_di,dp.nguoi_lon,dp.tre_em,dp.thanh_tien,dp.trang_thai FROM dat_phong as dp, phong as pg, khuyen_mai as km WHERE dp.id_phong = pg.id and dp.id_phan_tram_km = km.id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_pg(){
        $sql = "SELECT * FROM phong";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_ks(){
        $sql = "SELECT * FROM khach_san";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_km(){
        $sql = "SELECT * FROM khuyen_mai";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_dat_phong_by_id($id)
    {
        $sql = "SELECT dp.id,dp.ten_khach_hang,dp.so_dien_thoai,dp.CMND,dp.email,pg.ten_phong,dp.gia,km.phan_tram_km,dp.so_luong,dp.ngay_den,dp.ngay_di,dp.nguoi_lon,dp.tre_em,dp.thanh_tien,dp.trang_thai FROM dat_phong as dp, phong as pg, khuyen_mai as km WHERE dp.id_phong = pg.id and dp.id_phan_tram_km = km.id and dp.id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function edit_dat_phong($id,$trang_thai){
        $sql = "update dat_phong set trang_thai = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($trang_thai,$id));
    }
    public function chi_tiet_dat_phong_by_id($id)
    {
        $sql = "SELECT dp.id,dp.ten_khach_hang,dp.so_dien_thoai,dp.CMND,dp.email,pg.ten_phong,dp.gia,km.phan_tram_km,dp.so_luong,dp.ngay_den,dp.ngay_di,dp.nguoi_lon,dp.tre_em,dp.thanh_tien,dp.trang_thai,lp.ten_loai_phong FROM dat_phong as dp, phong as pg, loai_phong as lp, khuyen_mai as km WHERE dp.id_phong = pg.id and pg.id_loai_phong = lp.id and dp.id_phan_tram_km = km.id and dp.id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
}