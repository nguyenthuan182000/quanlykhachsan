<?php
require_once ("database.php");
class m_index extends database
{
    public function read_banner($vt = -1, $limit = -1)
    {
        $sql = "SELECT bn.id,bn.ten_banner,bn.hinh,ks.ten_khach_san,bn.trang_thai FROM banner as bn, khach_san as ks WHERE bn.id_khach_san= ks.id";
        if ($vt >= 0 && $limit > 0) {
            $sql .= " limit $vt,$limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>