<?php
include_once("ketnoi.php");
class mdonnhaphang{
    public function selectalldonnhaphang(){
        $p= new clsKetNoi();
        $conn=$p->moKetNoi();
        $str="select * from donnhaphang ";
        // $str="select * from donnhaphang d ";
        $ketqua = mysqli_query($conn,$str);
        $p->dongKetNoi($conn);
        return $ketqua;
    }

    public function select1donnhaphang($MaDNH){
        $p= new clsKetNoi();
        $conn=$p->moKetNoi();
        $str="select * from donnhaphang where MaDonNhapHang = $MaDNH";
        $ketqua = mysqli_query($conn,$str);
        $p->dongKetNoi($conn);
        return $ketqua;
    }

    public function selectchitietdonnhaphang($MaDNH){
        $p= new clsKetNoi();
        $conn=$p->moKetNoi();
        $str="select * from nguyenlieuuocluong ul inner join nguyenlieu n on ul.MaNguyenLieu=n.MaNguyenLieu inner join LoaiNguyenLieu l on n.MaLoaiNguyenLieu=l.MaLoaiNguyenLieu inner join DonViTinh d on d.MaDonViTinh=n.MaDonViTinh where MaDonNhapHang = $MaDNH HAVING KhoiLuong != 0 ORDER BY ul.MaNguyenLieu";
        $ketqua = mysqli_query($conn,$str);
        $p->dongKetNoi($conn);
        return $ketqua;
    }
   


}


?>