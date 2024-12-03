<body>
    <div style="text-align: center; margin-top: 40px;">
        <b style=" font-size: 30px;">THÊM NHÂN VIÊN VÀO CA LÀM VIỆC</b>
    </div>
    <style>
       .search-bar {
            max-width: 500px;
            width: 100%;
            margin: auto;
            margin-top: 50px;
        }
        .button-group {
            margin-top: 100px; /* Khoảng cách giữa ô tìm kiếm và nút */
        }

        .btn {
            padding: 10px 20px; /* Padding cho nút */
            margin: 0 10px; /* Khoảng cách giữa các nút */
            border: none; /* Xóa border mặc định */
            cursor: pointer; /* Con trỏ chuột khi hover */
            border-radius: 5px; /* Bo góc cho nút */
        }

        footer {
                margin-top: 100px;
                
            }
    </style>

 <div class="container mt-3">
     <form class="form-inline my-2 my-lg-0">
         <div class="input-group search-bar">
             
             <!-- Thanh tìm kiếm -->
             <input type="text" class="form-control" placeholder="Tìm kiếm..." aria-label="Tìm kiếm">
             
            <button class="btn btn-info" type="submit">Tìm</button>
            

              <!-- Thanh xổ danh sách -->
            <select class="form-control " id="dropdown-menu">
                <option selected disabled>Chọn nhân viên</option>
                <option value="nv1">NV1</option>
                <option value="nv2">NV2</option>
                <option value="nv3">NV3</option>
                <option value="nv4">NV4</option>
            </select>
          
        </div>
     </form>
     <div class="button-group">
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-primary">Thêm</button>
            <button type="button" class="btn btn-secondary">Hủy</button>
        </div>
    </div>
 </div>
 
  
 
</body>

<footer>