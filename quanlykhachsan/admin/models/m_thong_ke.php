<?php
require_once ("database.php");
class m_thong_ke extends database{
    public function count_dat_phong(){
        $sql = "select count(*) as DP from dat_phong;";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    public function count_phong(){
        $sql = "select count(*) as P from phong WHERE trang_thai=2";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    public function count_phong_trong(){
        $sql = "select count(*) as GV from giang_vien";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    public function count_nhan_vien(){
        $sql = "SELECT COUNT(*) AS NV FROM nguoi_dung AS nd, loai_nguoi_dung AS lnd WHERE nd.id_loai_nguoi_dung = lnd.id AND NOT lnd.id=1;";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    public function count_dich_vu(){
        $sql = "SELECT COUNT(*) AS DV FROM dich_vu_khach_san;";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    public function count_khuyen_mai(){
        $sql = "SELECT COUNT(*) AS KM FROM khuyen_mai;";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    public function thong_ke_doanh_so(){
        $sql='SELECT concat(Month(dp.ngay_di),"-",Year(dp.ngay_di)) as ThangNam, sum(dp.gia) as tong FROM dat_phong as dp where dp.trang_thai in(0,1) group by Month(dp.ngay_di),Year(dp.ngay_di) order by Month(dp.ngay_di)ASC , Year(dp.ngay_di) DESC';
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
