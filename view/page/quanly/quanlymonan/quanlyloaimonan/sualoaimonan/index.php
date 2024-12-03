<body>
        <div class="container qlnl">
            <h1 class="d-flex justify-content-center py-3 font-weight-bold">SỬA THÔNG TIN LOẠI MÓN ĂN</h1>
            <div class=" row">
                <div class="suanl-left col-9">
                    <div class="form-group row py-2">
                        <label for="" class="col-sm-2 col-form-label">Tên Nguyên Liệu</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="" placeholder="Burger">
                        </div>
                    </div>

                    <div class="form-group row py-2">
                        <label for="" class="col-sm-2 col-form-label">Tình Trạng</label>
                        <div class="col-sm-5">
                            <select class="form-select form-select" style="width: 50%;">
                                <option value="1">Có</option>
                                <option value="2">Chưa sẵn sàng</option>
                              </select>
                        </div>
                    </div>
                                
                    <div class="form-actions py-3">
                        <label for="" class="col-sm-2 col-form-label"></label>
                       <a href="qllma.html">
                           <button class="btn btn-secondary"><i class="fas fa-times"></i> Hủy</button>
        
                       </a>
                       <!-- <a href="qllma.html"> -->
                           <button class="btn btn-success" onclick="showConfirm()"><i class="far fa-save"></i> Lưu</button>
                       <!-- </a> -->
                    </div>
                </div>
            </div>
        </div>

    </body>

<script>
    function showConfirm() {
        // Hiển thị hộp thoại xác nhận
        var result = confirm("Bạn có chắc chắn muốn sửa không?");
        if (result) {
            alert("Sửa thành công");

            window.location.href = 'qllma.html';
        } else {
            alert("Sửa thất bại");
            window.location.href = 'sualma.html';

        }
    }
</script>