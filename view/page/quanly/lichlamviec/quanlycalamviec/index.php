<body>
    <div style="text-align: center; margin-top: 40px;">
        <b style=" font-size: 30px;">QUẢN LÝ CA LÀM VIỆC</b>
    </div>
    
    <style>
        table {
          margin: auto;
          /* border-collapse: collapse; */
          text-align: center;
          max-width: 1000px;
          margin-bottom: 30px;
          margin-top: 30px;
          border: 3px solid #bab7b7;
        }
        footer {
                margin-top: 100px;
                
            }
        .cell {
          border: 1px solid rgb(229, 224, 224);
          box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
          padding: 8px;
          text-align: center;
        }
    </style>
  <div>
    <table class="table table-light">

        <tr>
            <th class="cell">Số thứ tự</th>
            <th class="cell">Mã nhân viên</th>
            <th class="cell">Tên nhân viên</th>
            <th class="cell">Thao tác</th>
           
        </tr>
        <tr>
            <td class="cell">1</td>
            <td class="cell">111</td>
            <td class="cell">nv1</td>
            <td class="cell"> 
                <button class="btn btn-primary mr-2" onclick="window.location.href='index.php?page=quanly/lichlamviec/quanlycalamviec/suacalamviec';"><i class="fas fa-user-edit"> Sửa</i></button>
                <button class="btn btn-danger"><i class="fas fa-user-times"> Xóa</i></button>
            </td>
        </tr>
        <tr>
            <td class="cell">2</td>
            <td class="cell">222</td>
            <td class="cell">nv2</td>
            <td class="cell"> 
                <button class="btn btn-primary mr-2" onclick="window.location.href='index.php?page=quanly/lichlamviec/quanlycalamviec/suacalamviec';"><i class="fas fa-user-edit"> Sửa</i></button>
                <button class="btn btn-danger"><i class="fas fa-user-times"> Xóa</i></button>
        </tr>
        <tr>
            <td class="cell">3</td>
            <td class="cell">333</td>
            <td class="cell">nv3</td>
            <td class="cell">
                <button class="btn btn-primary mr-2" onclick="window.location.href='index.php?page=quanly/lichlamviec/quanlycalamviec/suacalamviec';"><i class="fas fa-user-edit"> Sửa</i></button>
                <button class="btn btn-danger"><i class="fas fa-user-times"> Xóa</i></button>
            </td>
        </tr>
      </table>
      <button type="button" class="btn btn-info" style="display: block; margin: 0 auto;" onclick="window.location.href='index.php?page=quanly/lichlamviec/quanlycalamviec/themcalamviec';"><i class="fas fa-address-card"> Thêm</i></button>

  </div>
 
</body>