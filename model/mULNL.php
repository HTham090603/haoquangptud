<?php
include_once("ketnoi.php");
class mnlul{
    //lấy tất cả nguyen lieu
    public function selectallnlul(){
        $p= new clsKetNoi();
        $conn=$p->moKetNoi();
        $str="select * from nguyenlieuuocluong";
        $ketqua = mysqli_query($conn,$str);
        $p->dongKetNoi($conn);
        return $ketqua;
    }



    public function insertdnh($gianhap)
    {
        $p = new clsKetNoi();
        $conn = $p->moKetNoi();
        if ($conn) {
            $str = "insert into donnhaphang(NgayNhapHang,GiaNhap,TinhTrang) values (now(), $gianhap, 1)";
            $result = $conn->query($str);
            // $p->dongKetNoi($conn);
            if ($result) {
                return $conn->insert_id;
            } else {
                return 0;
            }
        } else {
            return false;
        }
    }
public function insertnlul($MaNguyenLieu,$MaDonNhapHang,$KhoiLuong)
    {
        $p = new clsKetNoi();
        $conn = $p->moKetNoi();
        $demm =0;
        foreach($MaNguyenLieu as $index => $manl){
            $kl=$KhoiLuong[$demm];
            // echo $manl;
            $str = "insert into nguyenlieuuocluong(MaNguyenLieu,MaDonNhapHang,KhoiLuong) values ('$manl', '$MaDonNhapHang', $kl)";
            
            $conn->query($str);
            $demm++;
        }
        if($demm >0 ) {
            return true;
        }else {
            return false;
        }

        
    }
    
    public function updatesoluongton($MaNguyenLieu,$KhoiLuong)
    {
        $p = new clsKetNoi();
        $conn = $p->moKetNoi();
        $demm =0;
        foreach($MaNguyenLieu as $index => $manl){
            $kl=$KhoiLuong[$demm];
            // echo $manl;
            $str = "update nguyenlieu set SoLuong = SoLuong+ $KhoiLuong,TinhTrang = 2 where MaNguyenLieu = $manl";
            
            $conn->query($str);
            $demm++;
        }
        if($demm >0 ) {
            return true;
        }else {
            return false;
        }

        
    }

}
    ?>