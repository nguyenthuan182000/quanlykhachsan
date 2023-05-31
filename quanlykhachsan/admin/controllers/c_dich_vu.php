<?php
include ("models/m_dich_vu.php");
include ("SimpleImage.php");
class c_dich_vu {
    public function index()
    {
        //xu ly phan danh sach dich_vu
        $m_dich_vu = new m_dich_vu();
        $dich_vus = $m_dich_vu->read_dich_vu();
        $dich_vu='views/dich_vu/v_dich_vu.php';
        include ("templates/dich_vu/layout.php");
    }
    public function  add_dich_vu(){
        $m_dich_vu = new  m_dich_vu();

        if (isset($_POST['btnSave']))
        {
            $id = NULL;
            $hinh= ($_FILES['f_hinh']['error'] == 0) ? $_FILES['f_hinh']['name'] : "";
            $ten_dich_vu = $_POST["ten_dich_vu"];
            $thong_tin = $_POST["thong_tin"];
            $id_khach_san = $_POST["ten_khach_san"];
            $trang_thai = $_POST["trang_thai"];
            $result_insert = $m_dich_vu->insert_dich_vu($id,$hinh,$ten_dich_vu,$thong_tin,$id_khach_san,$trang_thai);
            if ($result_insert)
            {
                if ($hinh != "")
                {
                    move_uploaded_file($_FILES['f_hinh']['tmp_name'],"../public/layout/imagedichvu/$hinh");
                    $image = new  SimpleImage();
                    $dataImage['path'] = "../public/layout/imagedichvu";
                    $dataImage['name'] = $hinh;
                }
                echo "<script>
                alert('Thêm thành công');
                window.location='dich_vu.php'</script>";

            }
            else
            {
                echo "<script>alert('Thêm không thành công')</script>";
            }

        }
        $ks=$m_dich_vu->read_ks();
        $dich_vu = 'views/dich_vu/v_adddichvu.php';
        include 'templates/dich_vu/layout.php';
    }
    public function edit_dich_vu(){
        $m_dich_vu = new m_dich_vu();
        if (isset($_GET['id']))
        {
            $dich_vu_detail = $m_dich_vu->read_dich_vu_by_id($_GET['id']);
            if (isset($_POST['btnSave'])) {
                $id = $_GET['id'];
                $hinh = ($_FILES['f_hinh']['error'] == 0) ? $_FILES['f_hinh']['name'] : $dich_vu_detail->hinh;
                $ten_dich_vu = $_POST["ten_dich_vu"];
                $thong_tin = $_POST["thong_tin"];
                $id_khach_san = $_POST["ten_khach_san"];
                $trang_thai = $_POST["trang_thai"];

                $result = $m_dich_vu->edit_dich_vu($id,$hinh,$ten_dich_vu,$thong_tin,$id_khach_san,$trang_thai);
                if ($result) {
                    if ($_FILES["f_hinh"]["error"] == 0) {
                        move_uploaded_file($_FILES['f_hinh']['tmp_name'], "../public/layout/imagedichvu/$hinh");
                        $image = new  SimpleImage();
                        $dataImage['path'] = "../public/layout/imagedichvu";
                        $dataImage['name'] = $hinh;
                    }
                    echo "<script>
                    alert('Cập nhật thành công');
                    window.location='dich_vu.php'</script>";

                } else {
                    echo "<script>alert('Cập nhật không thành công')</script>";
                }

            }
        }
        $ks=$m_dich_vu->read_ks();
        $dich_vu = 'views/dich_vu/v_edit_dich_vu.php';
        include 'templates/dich_vu/layout.php';
    }
}