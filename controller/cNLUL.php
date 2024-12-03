<?php
include_once("model/mULNL.php");
class cnlul{
    public function getallnlul(){
        $p = new mnlul();
        $table=$p->selectallnlul();
        if($table->num_rows>0){
           return $table;
            
        }else{
            return false;
        }
    }
    public function themdnh($gianhap,$MaNguyenLieu,$KhoiLuong){
        $p = new mnlul();
        $result=$p->insertdnh($gianhap);
        if ($result!=-1) {
            if($p->insertnlul($MaNguyenLieu,$result,$KhoiLuong)){
                return true;
            }
        } else {
            return false;
        }
    }

    public function themnlul($MaNguyenLieu,$MaDonNhapHang,$KhoiLuong,$gianhap)
    {
        $MaDonNhapHang = $this->insertdnh($gianhap);
            if ($dishId != -1) {
                if($this->insertnlul($MaNguyenLieu,$MaDonNhapHang,$KhoiLuong)){
                    echo "<script>alert('Tạo đơn nhập hàng thành công')</script>";
                }else {
                    echo "<script>alert('Tạo đơn nhập hàng thất bại')</script>";
                }
            }
            else
                return 0;
            
    }

    public function updateslt($MaNguyenLieu,$KhoiLuong){
        $p = new mnlul();
        $result=$p->updatesoluongton($MaNguyenLieu,$KhoiLuong);
        if ($result) {
                return true;
        } else {
            return false;
        }
    }
   
}


?>
