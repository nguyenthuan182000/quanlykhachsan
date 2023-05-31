<?php
@session_start();
include ("models/m_nguoi_dung.php");
include ("SimpleImage.php");
class c_nguoi_dung {
    public function index()
    {
        //xu ly phan danh sach bài viết
        $m_nguoi_dung = new m_nguoi_dung();
        $nguoi_dungs = $m_nguoi_dung->read_nguoi_dung();
        $nguoi_dung='views/nguoi_dung/v_nguoi_dung.php';
        include ("templates/nguoi_dung/layout.php");
    }
    public function  add_nguoi_dung(){
        $m_nguoi_dung = new  m_nguoi_dung();

        if (isset($_POST['btnSave']))
        {
            $id = NULL;
            $ten_nguoi_dung = $_POST["ten_nguoi_dung"];
            $ngay_sinh = $_POST["ngay_sinh"];
            $gioi_tinh = $_POST["gioi_tinh"];
            $id_loai_nguoi_dung = $_POST["ten_loai_nguoi_dung"];
            $so_dien_thoai = $_POST["so_dien_thoai"];
            $dia_chi = $_POST["dia_chi"];
            $email = $_POST["email"];
            $ten_dang_nhap = $_POST["ten_dang_nhap"];
            $password = $_POST["password"];
            $trang_thai = $_POST["trang_thai"];
            $result_insert = $m_nguoi_dung->insert_nguoi_dung($id,$ten_nguoi_dung,$ngay_sinh,$gioi_tinh,$id_loai_nguoi_dung,$so_dien_thoai,$dia_chi,$email,$ten_dang_nhap,$password,$trang_thai);
            if ($result_insert)
            {
                echo "<script>
                alert('Thêm thành công');
                window.location='nguoi_dung.php'</script>";

            }
            else
            {
                echo "<script>alert('Thêm không thành công')</script>";
            }
        }
        $lnd=$m_nguoi_dung->read_lnd();
        $nguoi_dung = 'views/nguoi_dung/v_add_nguoi_dung.php';
        include 'templates/nguoi_dung/layout.php';
    }
    public function edit_nguoi_dung(){
        $m_nguoi_dung = new m_nguoi_dung();
        if (isset($_GET['id']))
        {
            $nguoi_dung_detail = $m_nguoi_dung->read_nguoi_dung_by_id($_GET['id']);
            if (isset($_POST['btnSave'])) {
                $id = $_GET['id'];
                $ten_nguoi_dung = $_POST["ten_nguoi_dung"];
                $ngay_sinh = $_POST["ngay_sinh"];
                $gioi_tinh = $_POST["gioi_tinh"];
                $id_loai_nguoi_dung = $_POST["ten_loai_nguoi_dung"];
                $so_dien_thoai = $_POST["so_dien_thoai"];
                $dia_chi = $_POST["dia_chi"];
                $email = $_POST["email"];
                $ten_dang_nhap = $_POST["ten_dang_nhap"];
                $password = $_POST["password"];
                $trang_thai = $_POST["trang_thai"];
                $result = $m_nguoi_dung->edit_nguoi_dung($id, $ten_nguoi_dung, $ngay_sinh, $gioi_tinh, $id_loai_nguoi_dung, $so_dien_thoai, $dia_chi, $email, $ten_dang_nhap, $password, $trang_thai);
                if ($result) {
                    echo "<script>
                    alert('Cập nhật thành công');
                    window.location='nguoi_dung.php'</script>";

                } else {
                    echo "<script>alert('Cập nhật không thành công')</script>";
                }
            }
        }
        $lnd=$m_nguoi_dung->read_lnd();
        $nguoi_dung = 'views/nguoi_dung/v_edit_nguoi_dung.php';
        include 'templates/nguoi_dung/layout.php';
    }


    public function check_login()
    {
        $flag = false;
        if (isset($_POST['login']))
        {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $m_nguoi_dung = new m_nguoi_dung();
            $this->save_login_to_session($email,$password);
            $nguoi_dung = $m_nguoi_dung->read_nguoi_dung_by_email($email);
            if(isset($_SESSION['user_admin']))
            {
                unset($_SESSION['error_login']);
                header("location:khach_san.php");
            }
            else
            {
                $_SESSION['error_login'] = "Sai thông tin đăng nhập";
//                echo "<script>alert('Sai thông tin đăng nhập');window.location='login.php'</script>";
                header("location:login.php");

            }

//            $_POST['']
        }
        $nguoi_dung = 'login.php';
        include 'templates/nguoi_dung/layout.php';
    }
    public function logout()
    {
        unset($_SESSION['user_admin']);
        header("location:login.php");
    }
    public function save_login_to_session($email,$password)
    {
        $m_nguoi_dung = new m_nguoi_dung();
        $nguoi_dung = $m_nguoi_dung->read_nguoi_dung_by_id_pass($email,$password);
        if (!empty($nguoi_dung))
        {
            $_SESSION['user_admin'] = $nguoi_dung;
        }

    }
}