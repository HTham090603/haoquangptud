<?php
include_once("model/mNguyenLieu.php");
// include_once("upload.php");
class cnguyenlieu{
    public function getallnguyenlieu(){
        $p = new mnguyenlieu();
        $table=$p->selectallnguyenlieu();
        if($table->num_rows>0){
           return $table;
            
        }else{
            return false;
        }
}
public function getallnguyenlieujoinloainguyenlieu(){
    $p = new mnguyenlieu();
    $table=$p->selectallnguyenlieujoinloainguyenlieu();
    if($table->num_rows>0){
       return $table;
        
    }else{
        return false;
    }
}

public function getallnguyenlieubytype($th){
    $p = new mnguyenlieu();
    $table=$p->selectallnguyenlieubytype($th);
    if($table->num_rows>0){
       return $table;
        
    }else{
        return false;
    }
}

public function getallnguyenlieubyname($name){
    $p = new mnguyenlieu();
    $table=$p->selectallnguyenlieubyname($name);
    if($table->num_rows>0){
       return $table;
        
    }else{
        return false;
    }
}
public function get1nguyenlieu($masp){
    $p = new mnguyenlieu();
    $table=$p->select1nguyenlieu($masp);
    if($table->num_rows>0){
       return $table;
        
    }else{
        return false;
    }
}

public function xoanguyenlieu($idsp)
{
    $p = new mnguyenlieu();
    $result = $p->deletenguyenlieu($idsp);
    if ($result == 1) {
        return true;
    } else {
        return false;
    }
}

public function insertnguyenlieu($Tennguyenlieu, $Gia, $GiamGia, $MoTa, $SoLuong, $Loai, $filename_new)
{
    $p = new mnguyenlieu();
    $result = $p->insertnguyenlieu($Tennguyenlieu, $Gia, $GiamGia, $MoTa, $SoLuong, $Loai, $filename_new);
    if ($result == 1) {
        return $result;
    } else {
        return false;
    }
}

public function updatenguyenlieu($MaNguyenLieu,$TenNguyenLieu, $HinhAnh, $GiaMua, $MaLoaiNguyenLieu, $MaDonViTinh, $MaCuaHang, $SoLuong,$TinhTrang)
{
    $p = new mnguyenlieu();
    if(strlen($HinhAnh) === 0){
        $result = $p->updatenguyenlieu($MaNguyenLieu,$TenNguyenLieu, $GiaMua, $MaLoaiNguyenLieu, $MaDonViTinh, $MaCuaHang, $SoLuong,$TinhTrang);

    }else{

        $result = $p->updatenguyenlieuha($MaNguyenLieu,$TenNguyenLieu, $HinhAnh, $GiaMua, $MaLoaiNguyenLieu, $MaDonViTinh, $MaCuaHang, $SoLuong,$TinhTrang);
    }
    if ($result == 1) {
        return $result;
    } else {
        return false;
    }
}

public function ulnl($sl){
    $p = new mnguyenlieu();
    $table=$p->uocluongnguyenlieu($sl);
    if($table->num_rows>0){
       return $table;
        
    }else{
        return false;
    }
}
public function resetnguyenlieutuoi()
{
    $p = new mnguyenlieu();
    $result = $p->resetnguyenlieu();
    if ($result == 1) {
        return true;
    } else {
        return false;
    }
}

}


?>

