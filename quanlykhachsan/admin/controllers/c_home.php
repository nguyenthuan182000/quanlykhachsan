<?php
class c_home{
    public function show_chart()
    {
        include_once ("models/m_thong_ke.php");
        $m_thong_ke = new m_thong_ke();
        $dp = $m_thong_ke->count_dat_phong();
        $p = $m_thong_ke->count_phong();
        $nv = $m_thong_ke->count_nhan_vien();
        $dv = $m_thong_ke->count_dich_vu();
        $km = $m_thong_ke->count_khuyen_mai();
        $hoa_don=$m_thong_ke->thong_ke_doanh_so();
        $thang=array();
        $tong=array();

        foreach($hoa_don as $hd)
        {
            $thang[]=$hd->ThangNam;
            $tong[]=(float)$hd->tong;

        }

        $arr=array(
            "labels"=>$thang,
            "datasets"=>array(
                array(
                    "label"=>"Doanh thu theo tháng năm ",
                    "borderColor"=>"#00CCFF",
                    "backgroundColor"=>"#66FFFF",
                    "fillColor"=>"rgba(172,194,132,0.4)",
                    "strokeColor"=>"#ACC26D",
                    "pointBorderColor"=>"#0C0",
                    "pointStrokeColor"=>"#9DB86D",
                    "pointBorderWidth" => 1,
                    "pointHoverRadius"=>5,
                    "pointHoverBorderWidth"=>3,
                    "pointRadius"=>5,
                    "pointHitRadius"=>10,
                    "data"=>$tong
                )
            )
        );
        $strJSON=json_encode($arr);

        $home = "views/home/v_home.php";
        include('templates/home/layout.php');
    }
}
