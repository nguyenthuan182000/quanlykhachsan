<?php
require_once ('database.php');
class m_nguoi_dung extends database {
    public function insert_nguoi_dung($id,$ten_nguoi_dung,$ngay_sinh,$gioi_tinh,$id_loai_nguoi_dung,$so_dien_thoai,$dia_chi,$email,$ten_dang_nhap,$password,$trang_thai)
    {
        $sql = "insert into nguoi_dung values (?,?,?,?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$ten_nguoi_dung,$ngay_sinh,$gioi_tinh,$id_loai_nguoi_dung,$so_dien_thoai,$dia_chi,$email,$ten_dang_nhap,$password,$trang_thai));
    }
    public function read_nguoi_dung()
    {
        $sql = "SELECT nd.id,nd.ten_nguoi_dung,nd.ngay_sinh,nd.gioi_tinh,lnd.ten_loai_nguoi_dung,nd.so_dien_thoai,nd.dia_chi,nd.email,nd.ten_dang_nhap,nd.password,nd.trang_thai FROM nguoi_dung as nd, loai_nguoi_dung as lnd WHERE nd.id_loai_nguoi_dung= lnd.id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_lnd(){
        $sql = "SELECT * FROM  loai_nguoi_dung";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_nguoi_dung_by_id($id)
    {
        $sql = "SELECT nd.id,nd.ten_nguoi_dung,nd.ngay_sinh,nd.gioi_tinh,lnd.ten_loai_nguoi_dung,nd.so_dien_thoai,nd.dia_chi,nd.email,nd.ten_dang_nhap,nd.password,nd.trang_thai FROM nguoi_dung as nd, loai_nguoi_dung as lnd WHERE nd.id_loai_nguoi_dung= lnd.id and nd.id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function edit_nguoi_dung($id,$ten_nguoi_dung,$ngay_sinh,$gioi_tinh,$id_loai_nguoi_dung,$so_dien_thoai,$dia_chi,$email,$ten_dang_nhap,$password,$trang_thai){
        $sql = "update nguoi_dung set ten_nguoi_dung = ?,ngay_sinh = ?, gioi_tinh = ?, id_loai_nguoi_dung = ?, so_dien_thoai = ?, dia_chi = ?, email = ?, ten_dang_nhap = ?, password = ?,trang_thai = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($ten_nguoi_dung,$ngay_sinh,$gioi_tinh,$id_loai_nguoi_dung,$so_dien_thoai,$dia_chi,$email,$ten_dang_nhap,$password,$trang_thai,$id));
    }


    // để kiểm tra tài khoản và mật khẩu
    public function read_nguoi_dung_by_id_pass($email,$password)
    {
//        $user_name = "'phuongttttt' or 1=1";
        $sql = "SELECT nd.id,nd.ten_nguoi_dung,nd.ngay_sinh,nd.gioi_tinh,lnd.ten_loai_nguoi_dung,nd.so_dien_thoai,nd.dia_chi,nd.email,nd.ten_dang_nhap,nd.password,nd.trang_thai FROM nguoi_dung as nd, loai_nguoi_dung as lnd WHERE nd.id_loai_nguoi_dung= lnd.id and nd.email = ? and nd.password = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($email,md5($password)));
        //Lỗ hổng bảo mật SQL inject
        // giải pháp giấu input đi
    }

    public function read_nguoi_dung_by_email($email)
    {
        $sql = "SELECT nd.id,nd.ten_nguoi_dung,nd.ngay_sinh,nd.gioi_tinh,lnd.ten_loai_nguoi_dung,nd.so_dien_thoai,nd.dia_chi,nd.email,nd.ten_dang_nhap,nd.password,nd.trang_thai FROM nguoi_dung as nd, loai_nguoi_dung as lnd WHERE nd.id_loai_nguoi_dung= lnd.id and nd.email = ?";
        $this->setQuery($sql);
        $this->loadRow(array($email));
    }

}