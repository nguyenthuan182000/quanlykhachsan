<?php
include("models/m_show_all.php");
include ("models/m_dat_phong.php");
class c_dat_phong{
    public function dat_phong(){
            if(isset($_GET['id'])){
                $id_ph=$_GET['id'];
                $m_header = new m_show_all();
                $phongs = $m_header->read_phong($id_ph);
            }
        if (isset($_POST['btnSave']))
        {
            $m_dat_phong = new m_dat_phong();
            $id = NULL;
            $ten_khach_hang = $_POST["ten_khach_hang"];
            $so_dien_thoai = $_POST["so_dien_thoai"];
            $CMND = $_POST["CMND"];
            $int = $_POST["id_phong"];
            $email =  $_POST["email"];
            $id_phong = (int)$int;
            $ten_phong = $phongs->ten_phong;
            $gia_goc = $phongs->gia;
            if (isset($_POST['txtDiscount'])){
                $gia= $_POST['txtDiscount'];
            }else{
                $gia=$phongs->gia;
            }
            if(isset($_POST['txtCoupon'])){
                $ma_khuyen_mai = $_POST['txtCoupon'];
                $checkma = $m_dat_phong->checkma($ma_khuyen_mai);
                $id_phan_tram_km = $checkma->id;
            }
            $so_luong = $_POST["so_luong"];
            $ngay_den = $_POST["ngay_den"];
            $ngay_di = $_POST["ngay_di"];
            $hieu_so_ngay = abs(strtotime($ngay_den) - strtotime($ngay_di))/86400;
            $nguoi_lon = $_POST["nguoi_lon"];
            $tre_em = $_POST["tre_em"];
            $thanh_tien = ($gia*$hieu_so_ngay)*$so_luong;
            $trang_thai = 0;
            $result_insert = $m_dat_phong->insert_dat_phongs($id,$ten_khach_hang,$so_dien_thoai,$CMND,$email,$id_phong,$gia,$id_phan_tram_km,$so_luong,$ngay_den,$ngay_di,$nguoi_lon,$tre_em,$thanh_tien,$trang_thai);
            $updatePhong = $m_dat_phong->edit_phong($id_ph,1);
            $this->sendMail($ten_khach_hang,$so_dien_thoai,$email,$ten_phong,$gia,$gia_goc,$checkma->phan_tram_km,$so_luong,$ngay_den,$ngay_di,$thanh_tien);
            if ($result_insert)
            {
                echo "<script>window.location.href='thong_bao.php'</script>";
            }
            else
            {
                echo "<script>alert('Thêm không thành công')</script>";
            }
        }

        $m_header = new m_show_all();
        $ks = $m_header->read_khach_san();
        $pg = $m_header->read_allphong();
        $khuyen_mai = $m_header->read_khuyen_mai();
        $dat_phong = 'views/phong/v_dat_phong.php';
        include ("templates/dat_phong/layout.php");
    }
    function sendMail($ten_khach_hang,$so_dien_thoai,$email,$ten_phong,$gia,$gia_goc,$gtkh,$so_luong,$ngay_den,$ngay_di,$thanh_tien)
    {
        require_once("libs/Helper.php");

        $tieu_de = "Liên hệ xác nhân thông tin khách hàng đặt phòng";
        $xhtml = "<p><strong>Tên khách sạn: Lucy Hotel</strong></p>";
        $xhtml .= "<p><strong>Trạng thái: Chưa thanh toán</strong></p>";

        $xhtml .= '<table style="width: 100%;border-collapse: collapse"></table>';
        $xhtml .= '<tr style="background-color: #0f81bb">';
        $xhtml .= '<th style="border: 1px solid #dddddd;text-align: left; padding: 8px">Tên khách hàng</th>';
        $xhtml .= '<th style="border: 1px solid #dddddd;text-align: left; padding: 8px">Số điện thoại</th>';
        $xhtml .= '<th style="border: 1px solid #dddddd;text-align: left; padding: 8px">Tên phòng</th>';
        $xhtml .= '<th style="border: 1px solid #dddddd;text-align: left; padding: 8px">Giá phòng gốc</th>';
        $xhtml .= '<th style="border: 1px solid #dddddd;text-align: left; padding: 8px">Phần trăm giảm giá</th>';
        $xhtml .= '<th style="border: 1px solid #dddddd;text-align: left; padding: 8px">Giá phòng mới</th>';
        $xhtml .= '<th style="border: 1px solid #dddddd;text-align: left; padding: 8px">Số lượng</th>';
        $xhtml .= '<th style="border: 1px solid #dddddd;text-align: left; padding: 8px">Ngày đến</th>';
        $xhtml .= '<th style="border: 1px solid #dddddd;text-align: left; padding: 8px">Ngày đi</th></tr>';

        $xhtml .= '<tr>';
        $xhtml .= "<td style='border: 1px solid #dddddd; text-align: left; padding: 8px'>". $ten_khach_hang ."</td>";
        $xhtml .= "<td style='border: 1px solid #dddddd; text-align: left; padding: 8px'>". $so_dien_thoai ."</td>";
        $xhtml .= "<td style='border: 1px solid #dddddd; text-align: left; padding: 8px'>". $ten_phong ."</td>";
        $xhtml .= "<td style='border: 1px solid #dddddd; text-align: left; padding: 8px'>". number_format($gia_goc) ."</td>";
        $xhtml .= "<td style='border: 1px solid #dddddd; text-align: left; padding: 8px'>". $gtkh.'%'."</td>";
        $xhtml .= "<td style='border: 1px solid #dddddd; text-align: left; padding: 8px'>". number_format($gia) ."</td>";
        $xhtml .= "<td style='border: 1px solid #dddddd; text-align: left; padding: 8px'>". $so_luong ."</td>";
        $xhtml .= "<td style='border: 1px solid #dddddd; text-align: left; padding: 8px'>". date("d-m-Y", strtotime($ngay_den)) ."</td>";
        $xhtml .= "<td style='border: 1px solid #dddddd; text-align: left; padding: 8px'>". date("d-m-Y", strtotime($ngay_di)) ."</td></tr></table>";
        $xhtml .= "<p style='text-align: right'><strong>Tổng tiền cần thanh toán là: ".number_format($thanh_tien)."</strong></p>";

        $kq=Helper::Gui_mail_lien_he($tieu_de,$xhtml,$email);
    }
   function getCoupon(){
       if (isset($_POST["coupon"])) {
           $ma_khuyen_mai = $_POST['coupon'];
       }
        $objDatPhong = new m_dat_phong();
       $checkma = $objDatPhong->checkma($ma_khuyen_mai);
       if(isset($checkma)){
           $check = 1;

       }else{
           $check = 0;
       }
       $now = date('Y-m-d');
       $startDate = date('Y-m-d', strtotime($checkma->ngay_bat_dau));
       $endDate = date('Y-m-d', strtotime($checkma->ngay_ket_thuc));
       if(($now >= $startDate) && ($now <= $endDate))
       {
           $flag = 1;
       }
       else
       {
           $flag = 2;
       }
       if ($checkma->trang_thai == 1){
           $status = 1;
       }else{
           $status = 0;
       }
       echo json_encode(array('hoat_dong'=>$status, 'data' => $check,'giamgia' => $checkma->phan_tram_km,'date' => $flag));
   }
}