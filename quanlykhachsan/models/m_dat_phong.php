<?php
require_once ('database.php');
class m_dat_phong extends database
{
    public function insert_dat_phongs($id, $ten_khach_hang, $so_dien_thoai, $CMND, $email, $id_phong, $gia, $id_phan_tram_km, $so_luong, $ngay_den, $ngay_di, $nguoi_lon, $tre_em, $thanh_tien, $trang_thai)
    {
        $sql = "insert into dat_phong values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $ten_khach_hang, $so_dien_thoai, $CMND, $email, $id_phong, $gia, $id_phan_tram_km, $so_luong, $ngay_den, $ngay_di, $nguoi_lon, $tre_em, $thanh_tien, $trang_thai));
    }
    public function edit_phong($id,$trang_thai){
        $sql = "update phong set trang_thai = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($trang_thai,$id));
    }
    public function checkma($ma_khuyen_ma){
        $sql = "SELECT * FROM khuyen_mai WHERE noi_dung = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_khuyen_ma));
    }
}