<style>
      .status {
        color: green;
      }
      .status-update {
        color: red;
      }
    </style>

  <body>
   

    <!-- content -->
    <div class="container">
      <div>
        <h2 class="d-flex justify-content-center py-3 font-weight-bold">
          QUẢN LÝ NHÂN VIÊN
        </h2>
        <a href="index.php?page=quanly/quanlynhanvien/themnhanvien" class="d-flex justify-content-center"
          >Thêm nhân viên</a
        >
        <div class="qlnl-header justify-content-end py-3">
          <div class="qlnl-search">
            <input placeholder="Tìm kiếm ..." type="text" />
            <button>
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </div>
      <div class="content">
        <table>
          <thead>
            <tr>
              <th>Mã nhân viên</th>
              <th>Họ và tên</th>
              <th>Ngày sinh</th>
              <th>Giới tính</th>
              <th>Địa chỉ</th>
              <th>Email</th>
              <th>SDT</th>
              <th>Trạng thái</th>
              <th>Thao tác</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>111</td>
              <td>Nguyễn Văn A</td>
              <td>01/01/2001</td>
              <td>Nam</td>
              <td>12 Nguyễn Văn Bảo</td>
              <td>nguyenvana@gmail.com</td>
              <td>0987654321</td>
              <td class="status">Đang làm việc</td>
              <td>
                <a href="index.php?page=quanly/quanlynhanvien/suanhanvien"><i class="fas fa-edit edit-icon"></i></a>
              </td>
            </tr>
            <tr>
              <td>112</td>
              <td>Nguyễn Văn B</td>
              <td>06/03/1995</td>
              <td>Nam</td>
              <td>118 Lê Lợi</td>
              <td>nguyenvanb@gmail.com</td>
              <td>0123456789</td>
              <td class="status">Đang làm việc</td>
              <td>
                <a href="index.php?page=quanly/quanlynhanvien/themnhanvien"><i class="fas fa-edit edit-icon"></i></a>
              </td>
            </tr>
            <tr>
              <td>113</td>
              <td>Nguyễn Thị C</td>
              <td>11/12/1999</td>
              <td>Nữ</td>
              <td>36 Nguyễn Thái Sơn</td>
              <td>nguyenthic@gmail.com</td>
              <td>0936284942</td>
              <td class="status-update">Nghỉ việc</td>
              <td>
                <a href="index.php?page=quanly/quanlynhanvien/themnhanvien"><i class="fas fa-edit edit-icon"></i></a>
              </td>
            </tr>
            <tr>
              <td>114</td>
              <td>Nguyễn Minh An</td>
              <td>16/11/2002</td>
              <td>Nam</td>
              <td>112 Nguyễn Văn Bảo</td>
              <td>nguyenminhan@gmail.com</td>
              <td>0987654321</td>
              <td class="status">Đang làm việc</td>
              <td>
                <a href="index.php?page=quanly/quanlynhanvien/themnhanvien"><i class="fas fa-edit edit-icon"></i></a>
              </td>
            </tr>
            <tr>
              <td>115</td>
              <td>Trần Ngọc Châu</td>
              <td>01/08/2003</td>
              <td>Nữ</td>
              <td>36 Nguyễn Văn Nghi</td>
              <td>tranngocchau@gmail.com</td>
              <td>0987654321</td>
              <td class="status">Đang làm việc</td>
              <td>
                <a href="index.php?page=quanly/quanlynhanvien/themnhanvien"><i class="fas fa-edit edit-icon"></i></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </body>