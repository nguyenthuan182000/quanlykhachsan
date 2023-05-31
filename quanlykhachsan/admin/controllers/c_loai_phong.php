<?php
include ("models/m_loai_phong.php");
include ("SimpleImage.php");
class c_loai_phong {
    public function index()
    {
        //xu ly phan danh sach loai_phong
        $m_loai_phong = new m_loai_phong();
        $loai_phongs = $m_loai_phong->read_loai_phong();
        $loai_phong='views/loai_phong/v_loai_phong.php';
        include ("templates/loai_phong/layout.php");
    }
    public function  add_loai_phong(){
        $m_loai_phong = new  m_loai_phong();

        if (isset($_POST['btnSave']))
        {
            $id = NULL;
            $hinh= ($_FILES['f_hinh']['error'] == 0) ? $_FILES['f_hinh']['name'] : "";
            $ten_loai_phong = $_POST["ten_loai_phong"];
            $id_khach_san = $_POST["ten_khach_san"];
            $thong_tin = $_POST["thong_tin"];
            $trang_thai = $_POST["trang_thai"];
            $result_insert = $m_loai_phong->insert_loai_phong($id,$hinh,$ten_loai_phong,$id_khach_san,$thong_tin,$trang_thai);
            if ($result_insert)
            {
                if ($hinh != "")
                {
                    move_uploaded_file($_FILES['f_hinh']['tmp_name'],"../public/layout/imageloaiphong/$hinh");
                    $image = new  SimpleImage();
                    $dataImage['path'] = "../public/layout/imageloaiphong";
                    $dataImage['name'] = $hinh;
                }
                echo "<script>
                alert('Thêm thành công')
                window.location='loai_phong.php'
                </script>";

            }
            else
            {
                echo "<script>alert('Thêm không thành công')</script>";
            }

        }
        $ks=$m_loai_phong->read_ks();
        $loai_phong = 'views/loai_phong/v_add_loai_phong.php';
        include 'templates/loai_phong/layout.php';
    }
    public function edit_loai_phong(){
        $m_loai_phong = new m_loai_phong();
        if (isset($_GET['id']))
        {
            $loai_phong_detail = $m_loai_phong->read_loai_phong_by_id($_GET['id']);
            if (isset($_POST['btnSave'])) {
                $id = $_GET['id'];
                $hinh = ($_FILES['f_hinh']['error'] == 0) ? $_FILES['f_hinh']['name'] : $loai_phong_detail->hinh;
                $ten_loai_phong = $_POST["ten_loai_phong"];
                $id_khach_san = $_POST["ten_khach_san"];
                $thong_tin = $_POST["thong_tin"];
                $trang_thai = $_POST["trang_thai"];
                $result = $m_loai_phong->edit_loai_phong($id, $hinh, $ten_loai_phong, $id_khach_san, $thong_tin, $trang_thai);
                if ($result) {
                    if ($hinh != "") {
                        move_uploaded_file($_FILES['f_hinh']['tmp_name'], "../public/layout/imageloaiphong/$hinh");
                        $image = new  SimpleImage();
                        $dataImage['path'] = "../public/layout/imageloaiphong";
                        $dataImage['name'] = $hinh;
                    }
                    echo "<script>
                    alert('Cập nhật thành công');
                    window.location='loai_phong.php'</script>";

                } else {
                    echo "<script>alert('Cập nhật không thành công')</script>";
                }
            }
            }
        $ks=$m_loai_phong->read_ks();
        $loai_phong = 'views/loai_phong/v_edit_loai_phong.php';
        include 'templates/loai_phong/layout.php';
    }
}