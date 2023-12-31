<?php
include "../controllers/bookingrooms.php";
include "../controllers/detail_booking.php";

?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <div class="content-wrapper">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Cập nhật đặt phòng</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- jquery validation -->
              <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Cập nhật đặt phòng</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="quickForm" method="POST" action="update_bookingrooms.php">
                  <div class="card-body">
                    <div class="form-group">
                      <input type="text" name="id" hidden class="form-control" id="ma_loai_phong" placeholder="Enter code" value="<?php echo $detailbookingroom['id'] ?>">
                    </div>
                    
                    <div class="form-group">
                      <label for="customer_name">Tên khách hàng</label>
                      <input type="text" name="name_account" class="form-control" id="name_account" placeholder="Nhập tên khách hàng" value="<?php echo isset($booking['name_account']) ? $booking['name_account'] : ''; ?>">
                    </div>
                    <div class="form-group">
                      <label for="cccd">Số CCCD</label>
                      <input type="text" name="CCCD" class="form-control" id="cccd" placeholder="Nhập số CCCD">
                    </div>
                    <div class="form-group">
                      <label for="tel">Số điện thoại </label>
                      <input type="text" name="tel" class="form-control" id="tel" placeholder="Nhập số điện thoại">
                    </div>
                    <div class="form-group">
                      <label for="address">Địa chỉ</label>
                      <input type="text" name="address" class="form-control" id="address" placeholder="Nhập địa chỉ">
                    </div>
                    <div class="form-group row">
                      <label for="selectField" class="col-sm-2 col-form-label">Thông tin thuê
                        phòng</label>
                      <div class="col-sm-8 d-flex">
                        <button type="button" class="btn btn-primary ml-2" onclick="addFields()">Thêm phòng
                          mới</button>
                      </div>
                    </div>
                    <div id="additionalFields" class="additional-fields"></div>
                    <div class="form-group">
                      <label for="payment">Phương thức thanh toán</label>
                      <select name="payment" class="form-control" id="payment" placeholder="Select status">
                        <option value="">-- Phương thức thanh toán --</option>
                        <option value="1">Chuyển khoản</option>
                        <option value="0">Tiền mặt</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="status">Trạng thái</label>
                      <select name="status" class="form-control" id="status" placeholder="Select status">
                        <option value="">-- Trạng thái --</option>
                        <option value="1">Đã thanh toán</option>
                        <option value="0">Chưa thanh toán</option>
                      </select>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" name="update_bookingroom" class="btn btn-success">Đặt
                      phòng</button>
                    <a href="listbooking.php" class="btn btn-secondary ml-2">Quay lại</a>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-6">
            </div>
          </div>
        </div>
      </section>
    </div>
    <?php
    @include "../footer.php";
    ?>
    <script src="../../plugins/summernote/summernote-bs4.min.js"></script>
    <script src="../../plugins/codemirror/codemirror.js"></script>
    <script src="../../plugins/codemirror/mode/css/css.js"></script>
    <script src="../../plugins/codemirror/mode/xml/xml.js"></script>
    <script src="../../plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
    <script src="../../dist/js/demo.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
      function addFields() {
        let fieldHtml = `
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Chọn phòng:</label>
          <div class="col-sm-4">
            <select class="form-control" name="room_id[]">
              <?php
              if (isset($list_rooms) && is_array($list_rooms)) {
                foreach ($list_rooms as $index => $rooms) : ?>
                  <option value="<?php echo $rooms['id'] ?>"><?php echo $rooms['name'] ?></option>
                <?php endforeach;
              } else {
                echo "Không có dữ liệu phòng nào.";
              } ?>
            </select>
          </div>
          <div class="col-sm-3">
            <label>Check-in:</label>
            <input type="date" class="form-control" name="checkin[]">
          </div>
          <div class="col-sm-3">
            <label>Check-out:</label>
            <input type="date" class="form-control" name="checkout[]">
          </div>
          <button type="button" class="btn btn-danger remove-btn ml-2" onclick="removeField(this)">Xóa phòng</button>
        </div>
      `;

        $("#additionalFields").append(fieldHtml);

        // Hiển thị nút xóa khi có 2 phòng trở lên
        if ($("#additionalFields .form-group").length >= 2) {
          $("#additionalFields .form-group:first-child .remove-btn").show();
        }
      }

      function removeField(button) {
        $(button).closest('.form-group').remove();

        // Ẩn nút xóa cho field đầu tiên nếu chỉ còn một field
        if ($("#additionalFields .form-group").length === 1) {
          $("#additionalFields .form-group:first-child .remove-btn").hide();
        }
      }
    </script>
  </div>
</body>