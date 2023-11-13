<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6"> <!-- Adjust the column size as needed -->
      <h1 class="font_title">THÊM MỚI LOẠI PHÒNG</h1>
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
          <input type="reset" value="NHẬP LẠI" class="btn btn-secondary me-2">
          <a href="index.php?act=loaiphong" class="btn btn-secondary">DANH SÁCH</a>
          <?php
          if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
          ?>
        </div>
      </form>
    </div>
  </div>
</div>
