<?php
include ("models/m_khach_san.php");
include ("SimpleImage.php");
class c_khach_san {
    public function index()
    {
        //xu ly phan danh sach khach san
        $m_khach_san = new m_khach_san();
        $khach_sans = $m_khach_san->read_khach_san();
        $views='views/khach_san/v_khach_san.php';
        include ("templates/khach_san/layout.php");
    }
    public function  add_khach_san(){
        $m_khach_san= new  m_khach_san();

        if (isset($_POST['btnSave']))
        {
            $id = NULL;
            $hinh= ($_FILES['f_hinh']['error'] == 0) ? $_FILES['f_hinh']['name'] : "";
            $ten_khach_san = $_POST["ten_khach_san"];
            $so_dien_thoai= $_POST["so_dien_thoai"];
            $dia_chi = $_POST["dia_chi"];
            $email = $_POST["email"];
            $trang_thai = $_POST["trang_thai"];
            $result_insert = $m_khach_san->insert_khach_san($id,$hinh,$ten_khach_san,$so_dien_thoai,$dia_chi,$email,$trang_thai);
            if ($result_insert)
            {
                if ($hinh != "")
                {
                    move_uploaded_file($_FILES['f_hinh']['tmp_name'],"../public/layout/image_logo/$hinh");
                    $image = new  SimpleImage();
                    $dataImage['path'] = "../public/layout/image_logo";
                    $dataImage['name'] = $hinh;
                }
                echo "<script>
                alert('Thêm thành công');
                window.location='khach_san.php'
                </script>";

            }
            else
            {
                echo "<script>alert('Thêm không thành công')</script>";
            }

        }
        $views = 'views/khach_san/v_addkhachsan.php';
        include 'templates/khach_san/layout.php';
    }
    public function edit_khach_san(){
        $m_khach_san = new m_khach_san();
        if (isset($_GET['id']))
        {
            $khach_san_detail = $m_khach_san->read_khach_san_by_id($_GET['id']);
            if (isset($_POST['btnSave'])) {
                $id = $_GET['id'];
                $hinh = ($_FILES['f_hinh']['error'] == 0) ? $_FILES['f_hinh']['name'] : $khach_san_detail->hinh;
                $ten_khach_san = $_POST["ten_khach_san"];
                $so_dien_thoai= $_POST["so_dien_thoai"];
                $dia_chi = $_POST["dia_chi"];
                $email = $_POST["email"];
                $trang_thai = $_POST["trang_thai"];
                $result = $m_khach_san->edit_khach_san($id,$hinh,$ten_khach_san,$so_dien_thoai,$dia_chi,$email,$trang_thai);
                if ($result) {
                    if ($_FILES["f_hinh"]["error"] == 0) {
                        move_uploaded_file($_FILES['f_hinh']['tmp_name'], "../public/layout/image_logo/$hinh");
                        $image = new  SimpleImage();
                        $dataImage['path'] = "../public/layout/image_logo";
                        $dataImage['name'] = $hinh;
                    }
                    echo "<script>
                    alert('Cập nhật thành công');
                    window.location='khach_san.php'</script>";

                } else {
                    echo "<script>alert('Cập nhật không thành công')</script>";
                }
            }
        }
        $views = 'views/khach_san/v_edit_khach_san.php';
        include 'templates/khach_san/layout.php';
    }
}