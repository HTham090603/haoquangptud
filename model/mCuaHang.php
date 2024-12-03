<?php
include_once("ketnoi.php");
class mcuahang{
    public function selectallcuahang(){
        $p= new clsKetNoi();
        $conn=$p->moKetNoi();
        $str="select * from cuahang ";
        $ketqua = mysqli_query($conn,$str);
        $p->dongKetNoi($conn);
        return $ketqua;
    }

    public function select1cuahang($MaCuaHang){
        $p= new clsKetNoi();
        $conn=$p->moKetNoi();
        $str="select * from cuahang where MaCuaHang = $MaCuaHang";
        $ketqua = mysqli_query($conn,$str);
        $p->dongKetNoi($conn);
        return $ketqua;
    }

   
   


}


?>