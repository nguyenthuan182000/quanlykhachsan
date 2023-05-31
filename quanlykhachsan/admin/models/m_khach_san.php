<?php
require_once ('database.php');
class m_khach_san extends database {
    public function insert_khach_san($id,$hinh,$ten_khach_san,$so_dien_thoai,$dia_chi,$email,$trang_thai)
    {
        $sql = "insert into khach_san values (?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$hinh,$ten_khach_san,$so_dien_thoai,$dia_chi,$email,$trang_thai));
    }
    public function read_khach_san()
    {
        $sql = "SELECT * FROM khach_san";
        $this->setQuery($sql);
        return $this->loadAllRows();

    }
    public function read_khach_san_by_id($id)
    {
        $sql = "select * from khach_san where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function edit_khach_san($id,$hinh,$ten_khach_san,$so_dien_thoai,$dia_chi,$email,$trang_thai){
        $sql = "update khach_san set hinh = ?,ten_khach_san = ?, so_dien_thoai = ?, dia_chi = ?, email = ?,trang_thai = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($hinh,$ten_khach_san,$so_dien_thoai,$dia_chi,$email,$trang_thai,$id));
    }
}