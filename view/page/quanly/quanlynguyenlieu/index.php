
<?php
    include_once("controller/cNguyenLieu.php");
$p=new cnguyenlieu();
// include_once ("view/quanlynguyenlieu/xuly.php");
if(isset($_GET["loainguyenlieu"])){
    $table= $p->getallnguyenlieubytype($_GET["loainguyenlieu"]);
    }
elseif(isset($_POST["search"])){
    $table= $p->getallnguyenlieubyname($_REQUEST["txtsearch"]);
    
    }
    
    elseif(isset($_POST["reset"])){
        $table=$p->resetnguyenlieutuoi();
$table= $p->getallnguyenlieujoinloainguyenlieu();

    }
    else{
$table= $p->getallnguyenlieujoinloainguyenlieu();
    }

if(!$table){

echo '<body>
        <div class=" qlnl ">
            <h1 class="d-flex justify-content-center py-3 font-weight-bold">QUẢN LÝ NGUYÊN LIỆU</h1>
            <a href="index.php?page=quanly/quanlynguyenlieu/themnguyenlieu" class="d-flex justify-content-center ">Thêm nguyên liệu</a>

            <div class="qlnl-header justify-content-end py-3 container">
                <div class="qlnl-search">
                    <form action="" method="post" class="d-flex justify-content-end">
                    <input placeholder="Tìm kiếm theo tên..." type="text" name="txtsearch"> 
                    <input class="btn btn-primary" type="submit" value="Tìm kiếm" name="search">
                    </form>
                </div>';

              
                include_once("controller/cLoaiNguyenLieu.php");
                $p1=new cloainguyenlieu();
                $table1= $p1->getallloainguyenlieu();
                if(!$table1){
                echo "khong co data";
                }else{
                    
                    
                    echo'
                    <div class="dropdown1">
  <button class="dropbtn1">Tất cả</button>
  <div class="dropdown-content1"><ul>';
  echo "<li class='dropdown-item2'><a class='dropdown-item1' href='index.php?page=quanly/quanlynguyenlieu'>Tất cả</a></li>";
                    
                    while($r1=$table1->fetch_assoc()){
      
                            echo "<li class='dropdown-item2'><a class='dropdown-item1' href='index.php?page=quanly/quanlynguyenlieu&loainguyenlieu=" . $r1["MaLoaiNguyenLieu"] . "&#ci'>" . $r1["TenLoaiNguyenLieu"] . "</a></li>";

                            
                        }
                    
                        echo "  </ul></div>
    </div>";


                    
                        



                }
                
           
             echo '  <button class="qlnl-uocluong ">
                    <a href="index.php?page=quanly/quanlynguyenlieu/uocluongnguyenlieu">Ước lượng nguyên liệu</a>
                </button>
                <button class="qlnl-uocluong btn btn-danger">
                    // <a href="index.php?page=quanly/quanlynguyenlieu/uocluongnguyenlieu">Ước lượng nguyên liệu</a>
                    Reset Nguyên Liệu
                </button>
            </div>
            <table class="table container" >
                ';
                echo "<p class='container'>Không có dữ liệu</p>";
                echo "</div>";
                
}else{
    echo '<body>
        <div class="container qlnl ">
            <h1 class="d-flex justify-content-center py-3 font-weight-bold">QUẢN LÝ NGUYÊN LIỆU</h1>
            <a href="index.php?page=quanly/quanlynguyenlieu/themnguyenlieu" class="d-flex justify-content-center ">Thêm nguyên liệu</a>

            <div class="qlnl-header justify-content-end py-3">
                <div class="qlnl-search">
                    <form action="" method="post" class="d-flex justify-content-end">
                    <input placeholder="Tìm kiếm theo tên..." type="text" name="txtsearch"> 
                    <input class="btn btn-primary" type="submit" value="Tìm kiếm" name="search">
                    </form>
                </div>';

              
                include_once("controller/cLoaiNguyenLieu.php");
                $p1=new cloainguyenlieu();
                $table1= $p1->getallloainguyenlieu();
                if(!$table1){
                echo "khong co data";
                }else{
                    
                    
                    echo'
                    <div class="dropdown1">
  <button class="dropbtn1">Tất cả</button>
  <div class="dropdown-content1"><ul>';
  echo "<li class='dropdown-item2'><a class='dropdown-item1' href='index.php?page=quanly/quanlynguyenlieu'>Tất cả</a></li>";
                    
                    while($r1=$table1->fetch_assoc()){
      
                            echo "<li class='dropdown-item2'><a class='dropdown-item1' href='index.php?page=quanly/quanlynguyenlieu&loainguyenlieu=" . $r1["MaLoaiNguyenLieu"] . "&#ci'>" . $r1["TenLoaiNguyenLieu"] . "</a></li>";

                            
                        }
                    
                        echo "  </ul></div>
    </div>";


                    
                        



                }
                
           
             echo '  <button class="qlnl-uocluong">
                    <a href="index.php?page=quanly/quanlynguyenlieu/uocluongnguyenlieu">Ước lượng nguyên liệu</a>
                </button>
               
               
                
            </div>
            <table class="table">
                <thead>';
    echo '<form action="" class="container" method="post">
    <table class ="table" style = "width: 100%;">';
    echo "<thead>
                    <tr>
                        <th>
                            Mã Nguyên Liệu
                        </th>
                        <th>
                            Tên Nguyên Liệu
                        </th>
                        <th>
                            Loại Nguyên Liệu
                        </th>
                        <th>
                            Đơn Vị Tính
                        </th>
                        <th>
                            Số Lượng
                        </th>
                        <th>
                            Hình Ảnh
                        </th>
                        <th>
                            Tên Cửa Hàng
                        </th>
                        <th>
                            Tình Trạng
                        </th>
                        <th>
                            Thao Tác
                        </th>
                    </tr>
                </thead>";



    while($r=$table->fetch_assoc()){
        echo "<tr>";
        echo'<td>'.$r["MaNguyenLieu"].'</td>';
        echo'<td>'.$r["TenNguyenLieu"].'</td>';
        echo'<td>'.$r["TenLoaiNguyenLieu"].'</td>';
        echo'<td>'.$r["TenDonViTinh"].'</td>';
        echo'<td>'.$r["SoLuong"].'</td>';
        echo '<td><img style="width: 50px;height=50" src="img/nguyenlieu/'.$r["HinhAnh"].'" alt=""></td>';
        echo'<td>'.$r["TenCuaHang"].'</td>';
        echo'<td>';
        if($r["SoLuong"]>10){
            echo '<p style="color:green">Còn hàng</p>';
        }elseif($r["SoLuong"]<=10){
            echo '<p style="color:red">Sắp hết hàng</p>';
        }
        echo '</td>';

        echo'<td> <a class="btn" href="index.php?page=quanly/quanlynguyenlieu/suanguyenlieu&idnl='. $r["MaNguyenLieu"] .'"><i class="fas fa-edit edit-icon" style="color:blue"></i> </a></td>';


        echo "</tr>";
    }




    echo "    </table>";
    echo ' <button name = "reset" class="qlnl-uocluong btn btn-danger" onclick="confirm(\'Bạn có chắc chắn muốn reset nguyên liệu tươi không!\')">
                    Reset Nguyên Liệu
                </button>
    
    </form>';
}
echo '<hr class="my-4"></div>';

?>



