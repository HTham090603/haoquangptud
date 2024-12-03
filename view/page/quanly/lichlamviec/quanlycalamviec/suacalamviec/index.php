<body>
    <div style="text-align: center; margin-top: 40px;">
        <b style=" font-size: 30px;">SỬA NHÂN VIÊN TRONG CA LÀM VIỆC</b>
    </div>
    <style>
       .chose-bar {
            max-width: 500px;
            width: 100%;
            margin: auto;
            margin-top: 50px;
        }
        .button-group {
            margin-top: 100px; /* Khoảng cách giữa ô tìm kiếm và nút */
        }

        .btn {
            padding: 10px 20px;
            margin: 0 10px;
            border: none;
            cursor: pointer; 
            border-radius: 5px;
        }

        footer {
                margin-top: 100px;
                
            }
    </style>

 <div class="container mt-3">
     <form class="form-inline my-2 my-lg-0">
         <div class="chose-bar">
            <b>Nhân viên hiện tại:</b> <p>NV9</p>

            <b>Nhân viên thay thế:</b>
            <select class="form-control " id="dropdown-menu">
                <option selected disabled><i class="fas fa-caret-down"> Chọn nhân viên</i></option>
                <option value="nv1">NV1</option>
                <option value="nv2">NV2</option>
                <option value="nv3">NV3</option>
                <option value="nv4">NV4</option>
            </select>
          
        </div>
     </form>
     <div class="button-group">
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-primary">Sửa</button>
            <button type="button" class="btn btn-secondary">Hủy</button>
        </div>
    </div>
 </div>
 
  
 
</body>