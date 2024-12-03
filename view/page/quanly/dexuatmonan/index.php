<style>
      h2 {
        margin: 0;
        padding-top: 10px;
        padding-bottom: 10px;
      }
    </style>

  <body>

    <!-- content -->
    <div class="container">
      <h2 style="text-align: center">ĐỀ XUẤT MÓN ĂN</h2>
      <div class="form-group row py-2">
        <label for="" class="col-sm-2 col-form-label">Tên món ăn</label>
        <div class="col-sm-5">
          <input
            type="text"
            class="form-control"
            id="name"
            placeholder="Nhập tên món ăn"
          />
        </div>
      </div>
      <div class="form-group row py-2">
        <label for="" class="col-sm-2 col-form-label">Mô tả</label>
        <div class="col-sm-5">
          <textarea
            name=""
            class="form-control"
            id=""
            rows="5"
            placeholder="Mô tả"
          ></textarea>
        </div>
      </div>
      <div class="form-group row py-2">
        <label for="" class="col-sm-2 col-form-label">Nguyên liệu</label>
        <div class="col-sm-5">
          <input
            type="text"
            class="form-control"
            id="nguyenlieu"
            placeholder="Nhập nguyên liệu"
          />
        </div>
      </div>
      <div class="form-group row py-2">
        <label for="" class="col-sm-2 col-form-label">Giá đề xuất</label>
        <div class="col-sm-5">
          <input
            type="float"
            class="form-control"
            id="price"
            placeholder="VND"
          />
        </div>
      </div>
      <div class="form-actions py-3">
        <label for="" class="col-sm-2 col-form-label"></label>

        <button class="btn btn-secondary">
          <i class="fas fa-times"></i> Hủy
        </button>

        <button class="btn btn-success" onclick="showConfirm()">
          <i class=""></i> Gửi đề xuất
        </button>
      </div>
    </div>
  </body>