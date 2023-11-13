<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6"> <!-- Adjust the column size as needed -->
      <h1 class="font_title">CẬP NHẬT LOẠI PHÒNG</h1>
      <form action="" method="POST">
        <?php
        if (isset($_GET['id'])) {
          $maloai = $_GET['id'];
          foreach (loadone_room_type($maloai) as $lh) {
        ?>
            <div class="mb-3">
              <label class="form-label">Tên loại phòng</label> <br>
              <input type="text" name="tenloai" class="form-control" placeholder="Nhập vào mã loại" disabled value="<?= $lh ?>">
            </div>
        <?php
          }
        }
        ?>
        <div class="mb-3">
          <input type="submit" name="testcapnhap" value="CẬP NHẬT" class="btn btn-primary me-2">
          <input type="reset" name="nhaplai" value="NHẬP LẠI" class="btn btn-secondary me-2">
          <a href="index.php?act=listlp" class="btn btn-secondary">DANH SÁCH</a>
          <?php
          if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
          ?>
        </div>
      </form>
    </div>
  </div>
</div>