<?php
require_once ("database.php");
class m_show_all extends database
{
    public function read_khach_san()
    {
        $sql = "SELECT * FROM khach_san where trang_thai=1";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_allphong()
    {
        $sql = "SELECT * FROM phong where trang_thai=2";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_phong($id)
    {
        $sql = "SELECT * FROM phong where trang_thai =2 and id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function read_phong_by_id_loai_phong($id_loai_phong)
    {
        $sql = "SELECT * FROM phong where trang_thai=2 and id_loai_phong = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_loai_phong));
    }
    public function read_bai_viet()
    {
        $sql = "SELECT * FROM bai_viet where trang_thai=1";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_dich_vu()
    {
        $sql = "SELECT * FROM dich_vu_khach_san where trang_thai=1";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_hom_thu()
    {
        $sql = "SELECT * FROM hom_thu where trang_thai=1";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_loai_phong()
    {
        $sql = "SELECT * FROM loai_phong where trang_thai=1";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_tin_tuc()
    {
        $sql = "SELECT * FROM tin_tuc where trang_thai=1";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_khuyen_mai()
    {
        $sql = "SELECT * FROM khuyen_mai where trang_thai=1";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_id_khuyen_mai($id)
    {
        $sql = "SELECT * FROM khuyen_mai where trang_thai=1 and id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
}
?>