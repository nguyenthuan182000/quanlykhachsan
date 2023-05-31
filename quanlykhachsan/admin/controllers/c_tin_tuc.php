<?php
include ("models/m_tin_tuc.php");
include ("SimpleImage.php");
class c_tin_tuc {
    public function index()
    {
        //xu ly phan danh sach bài viết
        $m_tin_tuc = new m_tin_tuc();
        $tin_tucs = $m_tin_tuc->read_tin_tuc();
        $tin_tuc='views/tin_tuc/v_tin_tuc.php';
        include ("templates/tin_tuc/layout.php");
    }
    public function  add_tin_tuc(){
        $m_tin_tuc = new  m_tin_tuc();

        if (isset($_POST['btnSave']))
        {
            $id = NULL;
            $hinh= ($_FILES['f_hinh']['error'] == 0) ? $_FILES['f_hinh']['name'] : "";
            $ten_tin_tuc = $_POST["ten_tin_tuc"];
            $id_khach_san = $_POST["ten_khach_san"];
            $noi_dung = $_POST["noi_dung"];
            date_default_timezone_set("Asia/Ha_Noi");
            $ngay_them = date("Y/m/d");
            $trang_thai = $_POST["trang_thai"];
            $result_insert = $m_tin_tuc->insert_tin_tuc($id,$hinh,$ten_tin_tuc,$id_khach_san,$noi_dung,$ngay_them,$trang_thai);
            if ($result_insert)
            {
                if ($hinh != "")
                {
                    move_uploaded_file($_FILES['f_hinh']['tmp_name'],"../public/layout/image_tin_tuc/$hinh");
                    $image = new  SimpleImage();
                    $dataImage['path'] = "../public/layout/image_tin_tuc";
                    $dataImage['name'] = $hinh;
                }
                echo "<script>
                alert('Thêm thành công')
                window.location='tin_tuc.php'</script>";

            }
            else
            {
                echo "<script>alert('Thêm không thành công')</script>";
            }
        }
        $ks=$m_tin_tuc->read_ks();
        $tin_tuc = 'views/tin_tuc/v_add_tin_tuc.php';
        include 'templates/tin_tuc/layout.php';
    }
    public function edit_tin_tuc(){
        $m_tin_tuc = new m_tin_tuc();
        if (isset($_GET['id']))
        {
            $tin_tuc_detail = $m_tin_tuc->read_tin_tuc_by_id($_GET['id']);
            if (isset($_POST['btnSave'])) {
                $id = $_GET['id'];
                $hinh = ($_FILES['f_hinh']['error'] == 0) ? $_FILES['f_hinh']['name'] : $tin_tuc_detail->hinh;
                $ten_tin_tuc = $_POST["ten_tin_tuc"];
                $id_khach_san = $_POST["ten_khach_san"];
                $noi_dung = $_POST["noi_dung"];
                $trang_thai = $_POST["trang_thai"];

                $result = $m_tin_tuc->edit_tin_tuc($id,$hinh,$ten_tin_tuc,$id_khach_san,$noi_dung,$trang_thai);
                if ($result) {
                    if ($_FILES["f_hinh"]["error"] == 0) {
                        move_uploaded_file($_FILES['f_hinh']['tmp_name'], "../public/layout/image_tin_tuc/$hinh");
                        $image = new  SimpleImage();
                        $dataImage['path'] = "../public/layout/image_tin_tuc";
                        $dataImage['name'] = $hinh;
                      
                    }
                    echo "<script>
                    alert('Cập nhật thành công');
                    window.location='tin_tuc.php'</script>";

                } else {
                    echo "<script>alert('Cập nhật không thành công')</script>";
                }
            }
        }
        $ks=$m_tin_tuc->read_ks();
        $tin_tuc = 'views/tin_tuc/v_edit_tin_tuc.php';
        include 'templates/tin_tuc/layout.php';
    }
}