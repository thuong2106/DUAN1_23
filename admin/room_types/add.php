<div class="container-fluid px-0">
  <div class="row justify-content-center m-0">
    <div class="col-md-6">
      <h1 class="font_title">THÊM MỚI LOẠI PHÒNG</h1>
      <?php
      // HIỂN THỊ THÔNG BÁO XÓA THÀNH CÔNG
      if (isset($thongbao) && ($thongbao != ""))
        echo '<div class="alert alert-success"> ' . $thongbao . '</div>';
      echo '<script> setTimeout(function() { document.querySelector(".alert").style.display = "none"; }, 2000); // 2000ms = 2 giây </script>';
      ?>
      <form action="index.php?act=addloaiphong" method="POST">
        <div class="mb-3">
          <label for="maloai" class="form-label">Mã loại</label>
          <input type="text" name="maloai" class="form-control" placeholder="Nhập vào mã loại" disabled>
        </div>
        <div class="mb-3">
          <label for="tenloai" class="form-label">Tên loại</label>
          <input type="text" name="tenloai" class="form-control" placeholder="Nhập vào tên">
        </div>
        <div class="mb-3">
          <input type="submit" name="themloai" value="THÊM MỚI" class="btn btn-primary me-2">
          <a href="index.php?act=loaiphong" class="btn btn-secondary">DANH SÁCH</a>

        </div>
      </form>
    </div>
  </div>
</div>