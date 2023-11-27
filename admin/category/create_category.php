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
              <h1>Thêm mới loại phòng</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Project Add</li>
              </ol>
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
                  <h3 class="card-title">Thêm mới loại phòng</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="quickForm" method="POST" action="create_category.php">
                  <div class="card-body">
                    <!-- <div class="form-group">
                      <label for="ma_loai_phong">Mã loại phòng</label>
                      <input type="text" name="code" class="form-control" id="ma_loai_phong" placeholder="Enter code">
                    </div> -->
                    <div class="form-group">
                      <label for="ten_loai_phong">Tên loại phòng</label>
                      <input type="text" name="room_type_name" class="form-control" id="ten_loai_phong" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                      <label for="price">Giá</label>
                      <input type="number" name="price" class="form-control" id="price">
                    </div>
                    <div class="form-group">
                      <label for="number_adult">Số người lớn</label>
                      <input type="number" name="number_adult" class="form-control" id="number_adult">
                    </div>
                    <div class="form-group">
                      <label for="number_children">Số trẻ em</label>
                      <input type="number" name="number_children" class="form-control" id="number_children">
                    </div>
                    
                    <div class="form-group">
                      <label for="trang_thai">Trạng thái</label>
                      <select name="status" class="form-control" id="trang_thai" placeholder="Select status">
                        <option value="">-- Trạng thái --</option>
                        <option value="1">Hoạt động</option>
                        <option value="0">Tạm ẩn</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="mo_ta_chi_tiet">Mô tả chi tiết</label>
                      <textarea name="description" id="summernote"></textarea>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" name="add_category" class="btn btn-success">Thêm mới loại phòng</button>
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