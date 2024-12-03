<?php

include_once("controller/cNguyenLieu.php");
include_once("xuly.php");
$p=new cnguyenlieu();
$p1 = new clsUpload();
if (isset($_POST["btnThem"])) {
    $TenNguyenLieu = $_POST["tennl"];
    $SoLuong = $_POST["soluong"];
    $GiaMua = $_POST["giamua"];
    $MaLoaiNguyenLieu = $_POST["maloainl"];
    $MaDonViTinh= $_POST["dvt"];
    $MaCuaHang = $_POST["cuahang"];
    $filename_new = $_FILES["hinhanh"]["name"];
   if($_FILES["hinhanh"]["type"]=="image/png"||$_FILES["hinhanh"]["type"]=="image/jpeg"||$_FILES["hinhanh"]["type"]=="image/jpg"){
    if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], "img/" . $filename_new)) {
        if ($p->insertnguyenlieu($TenNguyenLieu, $filename_new, $GiaMua, $MaLoaiNguyenLieu, $MaDonViTinh, $MaCuaHang, $SoLuong))
            echo "<script>alert('bạn đã thêm thành công')</script>";
        else
        echo "<script>alert('bạn đã thêm thất bại')</script>";
    }else
    echo "<script>alert('Upload ảnh thất bại')</script>";
   }else{
    echo "<script>alert('File khong phai la anh')</script>";

   }


}
?>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <div class="container ">
            <h1 class="d-flex justify-content-center py-3 font-weight-bold">THÊM NGUYÊN LIỆU</h1>
            <div class="form-group row py-2">
                <label for="" class="col-sm-2 col-form-label">Tên Nguyên Liệu</label>
                <div class="col-sm-5">
                    <input type="text" name="tennl" class="form-control" id="" placeholder="Nhập tên nguyên liệu" required>
                </div>
            </div>
           
            <div class="form-group row py-2">
                <label for="" class="col-sm-2 col-form-label">Loại Nguyên Liệu</label>
                <div class="col-sm-5">
                    <select name="maloainl" class="form-control" required>
                        <option value="" >Chọn Loại Nguyên Liệu</option>
                        <?php
                        include_once("controller/cLoaiNguyenLieu.php");
                        $x=new cloainguyenlieu();
                        $loai = $x->getallloainguyenlieu();
                        if(!$loai){
                            echo "khong co data";
                        }else{

                            while($r= $loai->fetch_assoc()) {
                                echo ' <option name="maloainl" value="'. $r["MaLoaiNguyenLieu"] .'">'. $r["TenLoaiNguyenLieu"] .'</option>';
                            }
                        }
    
                        ?>
                    </select>
                    
                </div>
            </div>

            <div class="form-group row py-2">
                <label for="" class="col-sm-2 col-form-label">Đơn Vị Tính</label>
                <div class="col-sm-5">
                <select name="dvt" class="form-control" required>
                        <option value="" name="dvt">Chọn Đơn Vị Tính</option>
                        <?php
                        include_once("controller/cDonViTinh.php");
                        $x1=new cdonvitinh();
                        $dvt = $x1->getalldvt();
                        if(!$dvt){
                            echo "khong co data";
                        }else{

                            while($r1= $dvt->fetch_assoc()) {
                                echo ' <option name="dvt" value="'. $r1["MaDonViTinh"] .'">'. $r1["TenDonViTinh"] .'</option>';
                            }
                        }
    
                        ?>
                    </select>
                    <!-- <input type="text" class="form-control" id="" placeholder="Nhập đơn vị tính"> -->
                </div>
            </div>
            <div class="form-group row py-2">
                <label for="" class="col-sm-2 col-form-label">Gía Mua</label>
                <div class="col-sm-5">
                    <input type="number" name="giamua" class="form-control" id="" placeholder="Nhập Gía Mua" required>
                </div>
            </div>
            <div class="form-group row py-2">
                <label for="" class="col-sm-2 col-form-label">Số Lượng</label>
                <div class="col-sm-5">
                    <input type="text" name="soluong" class="form-control" id="" placeholder="Nhập số lượng" required>
                </div>
            </div>

            <div class="form-group row py-2">
                <label for="" class="col-sm-2 col-form-label">Chọn Cửa Hàng</label>
                <div class="col-sm-5">
                <select name="cuahang" class="form-control" required>
                        <option value="" name="">Chọn Cửa Hàng</option>
                        <?php
                        include_once("controller/cCuaHang.php");
                        $x1=new ccuahang();
                        $dvt = $x1->getallcuahang();
                        if(!$dvt){
                            echo "khong co data";
                        }else{

                            while($r1= $dvt->fetch_assoc()) {
                                echo ' <option name="cuahang" value="'. $r1["MaCuaHang"] .'">'. $r1["TenCuaHang"] .'</option>';
                            }
                        }
    
                        ?>
                    </select>
                    
                </div>
            </div>
            <div class="form-group row py-2">
                <label for="" class="col-sm-2 col-form-label">Hình ảnh</label>
                <div class="col-sm-5">
                    <input type="file" name="hinhanh" class="form-control" id="">
                </div>
            </div>
           
            
            <div class="form-actions py-3">
                <label for="" class="col-sm-2 col-form-label"></label>
               <!-- <a href="qlnl.html"> -->
                   <button class="btn btn-secondary"><a href="index.php?page=quanly/quanlynguyenlieu"><i class="fas fa-times"></i> Hủy</a></button>

               <!-- </a> -->
               <!-- <a href="qlnl.html"> -->

                   <button name="btnThem" class="btn btn-success" onclick="showConfirm()"><i class="far fa-save"></i> Lưu</button>
               <!-- </a> -->
            </div>
        </div>

    </form>
        
        
    </body>