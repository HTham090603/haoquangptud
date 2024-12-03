<?php
include_once("ketnoi.php");
class mnguyenlieu{
    //lấy tất cả nguyen lieu
    public function selectallnguyenlieu(){
        $p= new clsKetNoi();
        $conn=$p->moKetNoi();
        $str="select * from nguyenlieu";
        $ketqua = mysqli_query($conn,$str);
        $p->dongKetNoi($conn);
        return $ketqua;
    }
    //lấy tất cả nguyên liệu join bảng loại 
    public function selectallnguyenlieujoinloainguyenlieu(){
        $p= new clsKetNoi();
        $conn=$p->moKetNoi();
        $str="select * from nguyenlieu s inner join loainguyenlieu t on s.MaLoaiNguyenLieu = t.MaLoaiNguyenLieu inner join cuahang c on c.MaCuaHang=s.MaCuaHang inner join DonViTinh d on d.MaDonViTinh=s.MaDonViTinh ORDER BY MaNguyenLieu";
        $ketqua = mysqli_query($conn,$str);
        $p->dongKetNoi($conn);
        return $ketqua;
    }
    //lấy nguyên liệu theo loại
    public function selectallnguyenlieubytype($th){
        $p= new clsKetNoi();
        $conn=$p->moKetNoi();
        $str="select * from nguyenlieu s inner join loainguyenlieu t on s.MaLoaiNguyenLieu = t.MaLoaiNguyenLieu inner join cuahang c on c.MaCuaHang=s.MaCuaHang where s.MaLoaiNguyenLieu = " .$th;
        $ketqua = mysqli_query($conn,$str);
        $p->dongKetNoi($conn);
        return $ketqua;
    }
    //lấy nguyên liệu theo tên
    public function selectallnguyenlieubyname($name){
        $p= new clsKetNoi();
        $conn=$p->moKetNoi();
        $str="select * from nguyenlieu s inner join loainguyenlieu t on s.MaLoaiNguyenLieu = t.MaLoaiNguyenLieu inner join cuahang c on c.MaCuaHang=s.MaCuaHang where s.TenNguyenLieu like N'%".$name."%'";
        $ketqua = mysqli_query($conn,$str);
        $p->dongKetNoi($conn);
        return $ketqua;
    }
//lấy 1 nguyên liệu
    public function select1nguyenlieu($masp){
        $p= new clsKetNoi();
        $conn=$p->moKetNoi();
        $str="select * from nguyenlieu s inner join loainguyenlieu t on s.MaLoaiNguyenLieu = t.MaLoaiNguyenLieu inner join cuahang c on c.MaCuaHang=s.MaCuaHang where s.MaNguyenLieu = ".$masp;
        $ketqua = mysqli_query($conn,$str);
        $p->dongKetNoi($conn);
        return $ketqua;
    }

//xóa nguyên liệu
    public function deletenguyenlieu($idsp) {
        $p = new clsKetNoi();
        $conn = $p->moKetNoi();
        if($conn) {
            $str = "delete from nguyenlieu where MaNguyenLieu   = '$idsp'";
            $result = $conn->query($str);
            $p->dongKetNoi($conn);
            if ($result) {
                return 1;
            } else {
                return 0;
            }
        }
    }
//thêm nguyên liệu
    public function insertnguyenlieu($TenNguyenLieu, $HinhAnh, $GiaMua, $MaLoaiNguyenLieu, $MaDonViTinh, $MaCuaHang, $SoLuong)
    {
        $p = new clsKetNoi();
        $conn = $p->moKetNoi();
        if ($conn) {
            $str = "insert into nguyenlieu(TenNguyenLieu, HinhAnh, GiaMua, MaLoaiNguyenLieu, MaDonViTinh, MaCuaHang, SoLuong) values ('$TenNguyenLieu', '$HinhAnh', '$GiaMua', '$MaLoaiNguyenLieu', '$MaDonViTinh', '$MaCuaHang', '$SoLuong')";
            $result = $conn->query($str);
            $p->dongKetNoi($conn);
            if ($result) {
                return 1;
            } else {
                return 0;
            }
        } else {
            return false;
        }
    }
//sửa nguyên liệu
    public function updatenguyenlieuha($MaNguyenLieu,$TenNguyenLieu, $HinhAnh, $GiaMua, $MaLoaiNguyenLieu, $MaDonViTinh, $MaCuaHang, $SoLuong,$TinhTrang)
    {
        $p = new clsKetNoi();
        $conn = $p->moKetNoi();
        if ($conn) {
            $str = "update nguyenlieu set TenNguyenLieu = '$TenNguyenLieu', HinhAnh= '$HinhAnh', GiaMua = '$GiaMua', MaLoaiNguyenLieu = '$MaLoaiNguyenLieu', MaDonViTinh = '$MaDonViTinh', MaCuaHang= '$MaCuaHang', SoLuong = '$SoLuong',TinhTrang= '$TinhTrang' where MaNguyenLieu = '$MaNguyenLieu'";
            $result = $conn->query($str);
            $p->dongKetNoi($conn);
            if ($result) {
                return 1;
            } else {
                return 0;
            }
        } else {
            return false;
        }
    }
    public function updatenguyenlieu($MaNguyenLieu,$TenNguyenLieu, $GiaMua, $MaLoaiNguyenLieu, $MaDonViTinh, $MaCuaHang, $SoLuong,$TinhTrang)
    {
        $p = new clsKetNoi();
        $conn = $p->moKetNoi();
        if ($conn) {
            $str = "update nguyenlieu set TenNguyenLieu = '$TenNguyenLieu',  GiaMua = '$GiaMua', MaLoaiNguyenLieu = '$MaLoaiNguyenLieu', MaDonViTinh = '$MaDonViTinh', MaCuaHang= '$MaCuaHang', SoLuong = '$SoLuong',TinhTrang= '$TinhTrang' where MaNguyenLieu = '$MaNguyenLieu'";
            $result = $conn->query($str);
            $p->dongKetNoi($conn);
            if ($result) {
                return 1;
            } else {
                return 0;
            }
        } else {
            return false;
        }
    }
   
    public function uocluongnguyenlieu($soluong){
        $p= new clsKetNoi();
        $conn=$p->moKetNoi();
        // $str = "SELECT s.MaNguyenLieu, n.HinhAnh, n.TenNguyenLieu, t.TenLoaiNguyenLieu,n.HinhAnh,d.TenDonViTinh ,SUM(s.KhoiLuong * $soluong) AS TongKhoiLuong FROM soluongnguyenlieu s inner join nguyenlieu n on s.MaNguyenLieu = n.MaNguyenLieu inner join loainguyenlieu t on n.MaLoaiNguyenLieu = t.MaLoaiNguyenLieu inner join donvitinh d on n.madonvitinh = d.madonvitinh  where s.MaMonAn = $mamonan GROUP BY MaNguyenLieu";
        $count=0;
        $sql_parts = [];
        foreach ($soluong as $mamonan => $soluongmon) {
            $mamonan+=1;
            $sql_parts[] = "WHEN s.MaMonAn = $mamonan THEN $soluongmon";
            $count++;  // Tăng biến đếm mỗi lần duyệt qua
        }
        $sql_case = implode(' ', $sql_parts);
        $str = "SELECT s.MaNguyenLieu,n.GiaMua, n.HinhAnh, n.TenNguyenLieu, t.TenLoaiNguyenLieu,n.HinhAnh,d.TenDonViTinh,SUM(s.KhoiLuong * CASE $sql_case ELSE 1 END) AS TongKhoiLuong FROM soluongnguyenlieu s inner join nguyenlieu n on s.MaNguyenLieu = n.MaNguyenLieu inner join loainguyenlieu t on n.MaLoaiNguyenLieu = t.MaLoaiNguyenLieu inner join donvitinh d on n.madonvitinh = d.madonvitinh inner join soluongnguyenlieu m on m.MaNguyenLieu=n.MaNguyenLieu GROUP BY MaNguyenLieu HAVING TongKhoiLuong != 0";
        $ketqua = mysqli_query($conn,$str);
        $p->dongKetNoi($conn);
        return $ketqua;
    }

    public function resetnguyenlieu()
    {
        $p = new clsKetNoi();
        $conn = $p->moKetNoi();
        if ($conn) {
            $str = "update nguyenlieu set SoLuong = 0 where NguyenLieuTuoi=1";
            $result = $conn->query($str);
            $p->dongKetNoi($conn);
            if ($result) {
                return 1;
            } else {
                return 0;
            }
        } else {
            return false;
        }
    }
}


?>