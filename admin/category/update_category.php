<?php
include "../controllers/category.php";
include '../header.php';
?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <div class="content-wrapper">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Cập nhật loại phòng</h1>
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
                  <h3 class="card-title">Cập nhật loại phòng</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="quickForm" method="POST" action="update_category.php">
                  <div class="card-body">
                    <div class="form-group">
                      <input type="text" name="id" hidden class="form-control" id="ma_loai_phong" placeholder="Enter code" value="<?php echo $detailCategory['id'] ?>">
                    </div>

                    <div class="form-group">
                      <label for="ten_loai_phong">Tên loại phòng</label>
                      <input type="text" name="room_type_name" class="form-control" id="ten_loai_phong" placeholder="Enter name" value="<?php echo $detailCategory['room_type_name'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="gia_loai_phong">Giá loại phòng</label>
                      <input type="text" name="price" class="form-control" id="gia_loai_phong" placeholder="Enter price" value="<?php echo $detailCategory['price'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="number_adult">Số người lớn</label>
                      <input type="number" name="number_adult" class="form-control" id="number_adult" value="<?php echo $detailCategory['number_adult'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="number_children">Số trẻ em</label>
                      <input type="number" name="number_children" class="form-control" id="number_children" value="<?php echo $detailCategory['number_children'] ?>">
                    </div>
                    <!-- <div class="form-group">
                      <label for="service_id">Dịch vụ</label>
                      <input type="text" name="service_id" class="form-control" id="service_id" value="<?php echo $detailCategory['service_id'] ?>">
                    </div> -->
                    <div class="form-group">
                      <label for="trang_thai">Trạng thái</label>
                      <select name="status" class="form-control" id="trang_thai" placeholder="Select status" required>
                        <option value="" <?php echo ($detailCategory['status'] == '') ? 'selected' : ''; ?>>--
                          Trạng thái --</option>
                        <option value="1" <?php echo ($detailCategory['status'] == '1') ? 'selected' : ''; ?>>Hoạt
                          Động</option>
                        <option value="0" <?php echo ($detailCategory['status'] == '0') ? 'selected' : ''; ?>>Tạm
                          Ẩn</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="mo_ta_chi_tiet">Mô tả chi tiết</label>
                      <textarea name="description" id="summernote"><?php echo $detailCategory['description']; ?></textarea>

                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" name="update_category" class="btn btn-success">Cập nhật loại phòng</button>
                    <a href="category.php" class="btn btn-secondary ml-2">Quay lại</a>
                  </div>
                </form>

              </div>
              <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
    </div>
    <?php
    @include "..footer.php";
    ?>
  </div>
</body>