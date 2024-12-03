<body>
        
        <div class="container ">
            <h1 class="d-flex justify-content-center py-3 font-weight-bold">THÊM MÓN ĂN</h1>
            <div class="form-group row py-2">
                <label for="" class="col-sm-2 col-form-label">Tên Món Ăn</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="" placeholder="Nhập tên nguyên liệu">
                </div>
            </div>
           
            <div class="form-group row py-2">
                <label for="" class="col-sm-2 col-form-label">Loại Món Ăn</label>
                <div class="col-sm-5">
                    <select id="loai-nguyen-lieu" class="form-control">
                        <option>Gà </option>
                        <option>Hamburger</option>
                        <option>Đồ ăn kèm</option>
                        <option>Nước uống</option>

                    </select>
                    
                </div>
            </div>

            <div class="form-group row py-2">
                <label for="" class="col-sm-2 col-form-label">Giá món ăn</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" id="" placeholder="Nhập đơn vị tính">
                </div>
            </div>
            <div class="form-group row py-2">
                        <label for="" class="col-sm-2 col-form-label">Mô tả</label>
                        <div class="col-sm-5">
                            <textarea name="" class="form-control" id="">.....</textarea>
                        </div>
                    </div>

            <div class="form-group row py-2">
                <label for="" class="col-sm-2 col-form-label">Số Lượng Tồn</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="" placeholder="Nhập số lượng tồn">
                </div>
            </div>
            <div class="form-group row py-2">
                <label for="" class="col-sm-2 col-form-label">Hình ảnh</label>
                <div class="col-sm-5">
                    <input type="file" name="" class="form-control" id="">
                </div>
            </div>
            <div class="form-group row py-2">
                <label for="" class="col-sm-2 col-form-label">Số Lượng Tồn</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="" placeholder="Nhập số lượng tồn">
                </div>
            </div>
            <div class="form-group row py-2">
                <label for="" class="col-sm-2 col-form-label">Hình ảnh</label>
                <div class="col-sm-5">
                    <input type="file" class="form-control" id="" >
                </div>
            </div>
            
            <div class="form-actions py-3">
                <label for="" class="col-sm-2 col-form-label"></label>
               <a href="qlnl.html">
                   <button class="btn btn-secondary"><i class="fas fa-times"></i> Hủy</button>

               </a>
               <a href="qlnl.html">

                   <button class="btn btn-success" onclick="showConfirm()"><i class="far fa-save"></i> Lưu</button>
               </a>
            </div>
        </div>
    </body>