<?php
include "../controllers/rooms.php";
include '../header.php';
?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <div class="content-wrapper">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Cập nhật phòng</h1>
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
                  <h3 class="card-title">Cập nhật phòng</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="quickForm" method="POST" action="?action=update&update_rooms=<?= $detailrooms['id'] ?>" enctype="multipart/form-data">
                  <div class="card-body">
                    <?php // echo($detailrooms); 
                    ?>
                    <div class="form-group">
                      <input type="hidden" name="id" value="<?php echo $detailrooms['id']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="room_name">Tên Phòng</label>
                    <input type="text" name="room_name" class="form-control" id="room_name" placeholder="Nhập tên phòng" value="<?php echo $detailrooms['room_name'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="current_img">Ảnh hiện tại</label>
                    <img src="../../upload $detailrooms['img'] " height="80" width="100" class="rounded" alt="">
                  </div>
                  <div class="form-group">
                    <label for="anh_phong">Chọn ảnh mới</label>
                    <input type="file" name="img" id="anh_phong">
                  </div>
                  <div class="form-group">
                    <label for="id_category">Loại Phòng</label>
                    <select name="id_category" class="form-control" id="id_category" placeholder="Select category">
                      <option value="">-- Chọn loại phòng --</option>
                      <?php foreach ($list_categories as $lct) : ?>
                        <option value="<?= $lct['id'] ?>" <?php echo ($lct['id'] == $detailrooms['id_category']) ? 'selected' : ''; ?>>
                          <?= $lct['room_type_name'] ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
    
                  <div class="form-group">
                    <label for="summernote">Mô tả chi tiết</label>
                    <textarea name="description" id="summernote"><?php echo $detailrooms['description']; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="trang_thai">Trạng thái</label>
                    <select name="status" class="form-control" id="trang_thai" required>
                      <option value="" <?php echo ($detailrooms['status'] == '') ? 'selected' : ''; ?>>--
                        Trạng thái --</option>
                      <option value="1" <?php echo ($detailrooms['status'] == '1') ? 'selected' : ''; ?>>Còn phòng
                      </option>
                      <option value="0" <?php echo ($detailrooms['status'] == '0') ? 'selected' : ''; ?>>Hết phòng
                      </option>
                    </select>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" name="update_rooms" class="btn btn-success">Cập nhật phòng</button>
                    <a href="list.php" class="btn btn-secondary ml-2">Quay lại</a>
                  </div>
                </form>
              </div>
                
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