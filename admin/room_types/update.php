<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h1 class="font_title">CẬP NHẬT LOẠI HÀNG HÓA</h1>
      <?php
      // HIỂN THỊ THÔNG BÁO XÓA THÀNH CÔNG
      if (isset($thongbao) && ($thongbao != ""))
        echo '<div class="alert alert-success"> ' . $thongbao . '</div>';
      echo '<script> setTimeout(function() { document.querySelector(".alert").style.display = "none"; }, 2000); // 2000ms = 2 giây </script>';
      ?>
      <form action="" method="POST">
        <?php
        if (isset($_GET['id'])) {
          $maloai = $_GET['id'];
          foreach (get_room_type_detail($maloai) as $lh) {
        ?>
            <div class="mb-3">
              <label for="tenloai" class="form-label">Tên loại phòng</label>
              <input type="text" name="tenloai" class="form-control" placeholder="Nhập vào tên" value="<?= $lh ?>">
            </div>
        <?php }
        } ?>
        <div class="mb-3">
          <input type="submit" name="testcapnhap" value="CẬP NHẬT" class="btn btn-primary me-2">
          <a href="index.php?act=loaiphong" class="btn btn-secondary">DANH SÁCH</a>
        </div>

      </form>
    </div>
  </div>
</div>