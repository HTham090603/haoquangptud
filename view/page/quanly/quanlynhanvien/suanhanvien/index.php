<style>
      h2 {
        margin: 0;
        padding-top: 20px;
        padding-bottom: 20px;
      }
    </style>

  <body>
   
    <!-- content -->
    <div class="container">
      <h2 style="text-align: center">SỬA NHÂN VIÊN</h2>
      <div class="form-group row py-2">
        <label for="" class="col-sm-2 col-form-label">Họ Và Tên</label>
        <div class="col-sm-5">
          <input
            type="text"
            class="form-control"
            id="name"
            value="Nguyễn Văn A"
          />
        </div>
      </div>
      <div class="form-group row py-2">
        <label for="" class="col-sm-2 col-form-label">Ngày Sinh</label>
        <div class="col-sm-5">
          <input type="date" class="form-control" id="dob" />
        </div>
      </div>
      <div class="form-group row py-2">
        <label for="" class="col-sm-2 col-form-label">Giới tính</label>
        <div class="col-sm-5">
          <div class="form-control">
            <input
              type="radio"
              class=""
              id="male"
              name="gender"
              value="male"
            />Nam
            <input
              type="radio"
              class=""
              id="female"
              name="gender"
              value="female"
            />Nữ
          </div>
        </div>
      </div>
      <div class="form-group row py-2">
        <label for="" class="col-sm-2 col-form-label">Địa chỉ</label>
        <div class="col-sm-5">
          <input
            type="text"
            class="form-control"
            id="address"
            value="12 Nguyễn Văn Bảo"
          />
        </div>
      </div>
      <div class="form-group row py-2">
        <label for="" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-5">
          <input
            type="email"
            class="form-control"
            id="email"
            value="nguyenvana@gmail.com"
          />
        </div>
      </div>
      <div class="form-group row py-2">
        <label for="" class="col-sm-2 col-form-label">Số điện thoại</label>
        <div class="col-sm-5">
          <input
            type="tel"
            class="form-control"
            id="phone"
            value="0987654321"
          />
        </div>
      </div>
      <div class="form-group row py-2">
        <label for="" class="col-sm-2 col-form-label">Trạng thái</label>
        <div class="col-sm-5">
          <select id="status" class="form-control">
            <option>- Chọn -</option>
            <option>Đang làm việc</option>
            <option>Thử việc</option>
            <option>Nghỉ việc</option>
          </select>
        </div>
      </div>
      <div class="form-actions py-3">
        <label for="" class="col-sm-2 col-form-label"></label>

        <button class="btn btn-secondary">
          <i class="fas fa-times"></i> Hủy
        </button>

        <button class="btn btn-success" onclick="showConfirm()">
          <i class="far fa-save"></i> Lưu
        </button>
      </div>
    </div>
  </body>
  <footer>