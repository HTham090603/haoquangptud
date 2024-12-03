<?php
include_once("ketnoi.php");
class mmonan{
    public function selectallmonan(){
        $p= new clsKetNoi();
        $conn=$p->moKetNoi();
        $str="select * from monan ";
        $ketqua = mysqli_query($conn,$str);
        $p->dongKetNoi($conn);
        return $ketqua;
    }

    public function select1monan($Mamonan){
        $p= new clsKetNoi();
        $conn=$p->moKetNoi();
        $str="select * from monan where MaMonAn = $Mamonan";
        $ketqua = mysqli_query($conn,$str);
        $p->dongKetNoi($conn);
        return $ketqua;
    }

   
   


}


?>