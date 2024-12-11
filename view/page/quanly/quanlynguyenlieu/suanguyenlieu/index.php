<?php
include_once("controller/cNguyenLieu.php");
$p = new cnguyenlieu();
$manl= $_REQUEST["idnl"];
$mach=$_REQUEST["idch"];

$kq=$p->get1nguyenlieu($manl,$mach);
if($kq){
    while($r=$kq->fetch_assoc()){
        $tennl=$r["TenNguyenLieu"];
        $giamua=$r["GiaMua"];
        $gia = number_format($giamua, 0, ',', '.'); // Không có số thập phân
                          
        $hinhanh=$r["HinhAnh"];
        $loainl=$r["MaLoaiNguyenLieu"];
        $dvt=$r["MaDonViTinh"];
        $cuahang=$r["MaCuaHang"];
        $soluong=$r["SoLuong"];
        $tinhtrang=$r["TinhTrang"];


    }
}else{
    echo '<script>alert("ma san pham khong ton tai")</script>';
}


?>




<body>
        <div class="container qlnl">
            <h1 class="d-flex justify-content-center py-3 font-weight-bold">SỬA THÔNG TIN NGUYÊN LIỆU</h1>
            <form action="" method="post" enctype="multipart/form-data">
            <div class=" row">
                <div class="suanl-left col-9     ">
                    <div class="form-group row py-2">
                        <label for="" class="col-sm-2 col-form-label">Tên Nguyên Liệu</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" value="<?php if(isset($tennl)) echo $tennl ?>" name="TenNguyenLieu" id="">

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
                                if($r["MaLoaiNguyenLieu"]==$loainl){
                                    echo '<option name="maloainl"  value = "' .$r["MaLoaiNguyenLieu"].'" selected >'.$r["TenLoaiNguyenLieu"].'</option>';
                                }else{
                                    echo '<option name="maloainl"  value = "'.$r["MaLoaiNguyenLieu"].'"> '.$r["TenLoaiNguyenLieu"].'</option>';
                                }
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
                            <option value="" >Chọn Đơn Vị Tính</option>
                            <?php
                            include_once("controller/cDonViTinh.php");
                            $d=new cdonvitinh();
                            $madvt = $d->getalldvt();
                            if(!$madvt){
                                echo "khong co data";
                            }else{

                                while($r1= $madvt->fetch_assoc()) {
                                    if($r1["MaDonViTinh"]==$dvt){
                                        echo '<option name="dvt"  value = "' .$r1["MaDonViTinh"].'" selected >'.$r1["TenDonViTinh"].'</option>';
                                    }else{
                                        echo '<option name="dvt"  value = "'.$r1["MaDonViTinh"].'"> '.$r1["TenDonViTinh"].'</option>';
                                    }
                                }
                            }
        
                            ?>
                        </select>    


                        </div>
                    </div>
        
                    <div class="form-group row py-2">
                        <label for="" class="col-sm-2 col-form-label">Gía Mua</label>
                        <div class="col-sm-5">
                        <input type="number" class="form-control" value="<?php if(isset($gia)) echo $gia ?>" name="giamua" id="">

                        </div>
                    </div>

                    
        
                   
                    <!-- <div class="form-group row py-2">
                        <label for="" class="col-sm-2 col-form-label">Tình Trạng</label>
                        <div class="col-sm-5">
                            <select name="tinhtrang" id="" class="form-control">

                            
                            <?php
                            // if($tinhtrang==1){
                            //     echo '<option name="tinhtrang"  value = "' .$r["TinhTrang"].'" selected >Đang sử dụng</option>';
                                
                            // }else{
                            //     echo '<option name="tinhtrang"  value = "' .$r["TinhTrang"].'" selected >Không còn sử dụng</option>';

                            // }

                            ?>
                        </select>
                        </div>
                    </div> -->
                    <div class="form-group row py-2">
                        <label for="" class="col-sm-2 col-form-label">Hình ảnh</label>
                        <div class="col-sm-5">
                        <input type="file" name="hinhanh" class="form-control" id="">
                        </div>
                    </div>
                    
                    <!-- <div class="form-group row py-2 hidden"> -->
                        <!-- <label for="" class="col-sm-2 col-form-label">Số Lượng</label> -->
                        <!-- <div class="col-sm-5">
                        <input type="hidden" class="form-control" readonly value="<?php if(isset($soluong)) echo $soluong ?>" name="soluong" id="">

                        </div>
                    </div> -->
                    
                    <div class="form-actions py-3">
                        <label for="" class="col-sm-2 col-form-label"></label>
                       <!-- <a href="qlnl.html"> -->
                           <button class="btn btn-secondary"><a href="index.php?page=quanly/quanlynguyenlieu"><i class="fas fa-times"></i> Hủy</a></button>
        
                       <!-- </a> -->
                       <!-- <a href="qlnl.html"> -->
        
                           <button name = "submit"class="btn btn-success" onclick="showConfirm('Bạn có chắc chắn muốn sửa không?')"><i class="far fa-save"></i> Lưu</button>
                       <!-- </a> -->
                    </div>
                </div>
                <div class="suanl-right col-2">
                <img src="img/nguyenlieu/<?php  echo $hinhanh ?>" width="300px" alt="">
                </div>
            </div>
            </form>
        </div>

    </body>

    <?php

if(isset($_REQUEST["submit"])){
    $filename_new = $_FILES["hinhanh"]["name"];
    if($_FILES["hinhanh"]["type"]=="image/png"||$_FILES["hinhanh"]["type"]=="image/jpeg"||$_FILES["hinhanh"]["type"]=="image/jpg"||strlen($filename_new) === 0){
        if(strlen($filename_new) != 0) {
            if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], "img/" . $filename_new)) {
                if ($p->updatenguyenlieu($manl,$_REQUEST["TenNguyenLieu"],  $filename_new, $_REQUEST["giamua"], $_REQUEST["maloainl"], $_REQUEST["dvt"])){
    
                    echo "<script>alert('bạn đã sửa thông tin thành công')</script>";
                }
            else{
    
                echo "<script>alert('bạn đã sửa thất bại')</script>";
            }
            }else
            echo "<script>alert('Upload ảnh thất bại')</script>";
        }else {
            if($p->updatenguyenlieu($manl,$_REQUEST["TenNguyenLieu"],  $filename_new, $_REQUEST["giamua"], $_REQUEST["maloainl"], $_REQUEST["dvt"])){
                echo "<script>alert('bạn đã sửa thông tin thành công')</script>";

            }else{
                echo "<script>alert('bạn đã sửa thất bại')</script>";

            }
        }
       }else{
        echo "<script>alert('File khong phai la anh')</script>";
    
       }


}


?>


<script>
    function showConfirm(message) {
    return confirm(message);
}
</script>