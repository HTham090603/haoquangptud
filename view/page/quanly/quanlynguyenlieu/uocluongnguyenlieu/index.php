

<body>
        <div class="container ulnl">
            <h1 class="d-flex justify-content-center py-3 font-weight-bold">ƯỚC LƯỢNG NGUYÊN LIỆU</h1>

            <form action="index.php?page=quanly/quanlynguyenlieu/uocluongnguyenlieu/quanlyketquauocluongnguyenlieu" method="post">
            <!-- <button type="submit" class="btn btn-success p-2" name="tinh" value="tinh">Tính </button> -->

            <table class="table">
                <thead>
                    <tr>
                        <th>
                            Mã Món Ăn
                        </th>
                        <th>
                            Tên Món Ăn
                        </th>
                        <th>
                            Hình Ảnh
                        </th>
                        <th>
                            Số Lượng
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once("controller/cMonAn.php");
                    $p= new cmonan();
                    $table=$p->getallmonan();
                    if(!$table){
                        echo "Không tìm thấy dữ liệu";
                        
                    }else{
                        while($r=$table->fetch_assoc()){
                            echo "<tr>";
                            echo'<td>'.$r["MaMonAn"].'</td>';
                            echo'<td>'.$r["Tenmonan"].'</td>';
                            echo '<td><img style="width: 100px;height=100" src="img/Monan/'.$r["Hinhanh"].'" alt=""></td>';

                            echo'<td><input class="ul-input btn border " type="number" name="soluong[]" id="" placeholder="0" value="0" ></td> </tr>';
                        
                        }
                    }

                    ?>
                    
                    
                    
                </tbody>
            </table>
            <div class="d-flex justify-content-center py-4">
                <button class="btn btn-secondary mx-3"><a href="index.php?page=quanly/quanlynguyenlieu"><i class="fas fa-times"></i> Hủy</a></button>
                
                
                <button class="btn btn-success p-2" name="tinhtoan">Tính toán</button>
                
                
                
            </div>
            
        </form>
        </div>
    </body>