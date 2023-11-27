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
                            <h1>Thêm mới phòng</h1>
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
                                    <h3 class="card-title">Thêm mới phòng</h3>
                                    
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form id="quickForm" method="POST" action="" enctype="multipart/form-data">
                                    <div class="card-body">

                                        <div class="form-group">
                                            <label for="ten_phong">Tên phòng</label>
                                            <input type="text" name="room_name" class="form-control" id="ten_phong" placeholder="Enter name">
                                        </div>
                                        <div class="form-group">
                                            <label for="img">Ảnh phòng</label>
                                            <input type="file" name="img" id="img">
                                        </div>
                                        <div class="form-group">
                                            <label for="id">Loại Phòng</label>
                                            <select name="id_category" class="form-control" id="id" placeholder="Select price">
                                                <option value="">-- Chọn loại phòng --</option>
                                                <?php foreach ($list_categories as $lct) : ?>
                                                    <option value="<?= $lct['id'] ?>"><?= $lct['room_type_name'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="id_service">Dịch vụ</label>
                                            <?php
                                            foreach ($allServices as $service) :
                                            ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="id_service[]" value="<?php echo $service['id']; ?>" id="service_<?php echo $service['id']; ?>">
                                                    <label class="form-check-label" for="service_<?php echo $service['id']; ?>">
                                                        <?php echo $service['service_name']; ?>
                                                    </label>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <!--  -->
                                        <div class="form-group">
                                            <label for="mo_ta_chi_tiet">Mô tả chi tiết</label>
                                            <textarea name="description" id="summernote"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="trang_thai">Trạng thái</label>
                                            <select name="status" class="form-control" id="trang_thai" placeholder="Select status">
                                                <option value="">-- Trạng thái --</option>
                                                <option value="0">Còn phòng</option>
                                                <option value="1">Hết phòng</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" name="add_rooms" class="btn btn-success">Thêm mới phòng</button>

                                        <a href="list.php" class="btn btn-secondary ml-2">Quay lại</a>
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