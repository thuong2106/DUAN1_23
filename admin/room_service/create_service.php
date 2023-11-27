<?php
include '../header.php';
include "../controllers/room_service.php"
?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Thêm Dịch vụ</h1>
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
                                    <h3 class="card-title">Thêm Dịch vụ</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form id="quickForm" method="POST" action="create_service.php">
                                    <div class="form-group">
                                        <label for="service_name">Tên dịch vụ</label>
                                        <input type="text" name="service_name" class="form-control" id="ten_dich_vu" placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label for="gia">Giá</label>
                                        <input type="text" name="price" class="form-control" id="gia" placeholder="Enter price">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Mô tả chi tiết</label>
                                        <textarea name="description" id="summernote"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="trang_thai">Trạng thái</label>
                                        <select name="status" class="form-control" id="trang_thai" placeholder="Select status">
                                            <option value="">-- Trạng thái --</option>
                                            <option value="1">Hoạt Động</option>
                                            <option value="0">Tạm Ẩn</option>
                                        </select>
                                    </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" name="add_service" class="btn btn-success">Thêm Dịch vụ</button>
                                <a href="listservice.php" class="btn btn-secondary ml-2">Quay lại</a>
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
    @include "../footer.php";
    ?>
    </div>
</body>