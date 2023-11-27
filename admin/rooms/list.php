<?php
include '../header.php';
include '../controllers/rooms.php';
?>

<div class="wrapper">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>QUẢN LÝ PHÒNG</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <div class="card-tools">
                        <a class="btn btn-success btn-sm" href="add.php">
                            <i class="fas fa-plus"></i>&nbsp; Thêm phòng
                        </a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr style="text-align:center;">
                                <th style="width: 1%">#</th>
                                <th style="width: 12%">Tên phòng</th>
                                <th style="width: 10%">Ảnh phòng</th>
                                <th style="width: 10%">Loại phòng</th>
                                <th style="width: 10%">Giá</th>
                                <th style="width: 10%">Số người lớn</th>
                                <th style="width: 10%">Số trẻ em</th>
                                <th style="width: 10%">Dịch vụ</th>
                                <th style="width: 10%">Mô tả</th>
                                <th style="width: 10%">Trạng thái</th>
                                <th style="width: 15%">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($list_rooms) && is_array($list_rooms)) {
                                foreach ($list_rooms as $index => $rooms) : ?>
                                    <tr style="text-align:center;">
                                        <td><?php echo $index + 1 ?></td>
                                        <td style="text-align:start;">
                                            <a><?php echo $rooms['room_name'] ?></a>
                                            <br />
                                            <small>Ngày tạo <?php echo $rooms['create_date'] ?></small>
                                        </td>
                                        <td> <img src="../../upload/<?= $rooms['img'] ?>" height="80" width="100" alt=""></td>
                                        <td><?php echo $rooms['name_category'] ?></td>
                                        <td><?php echo $rooms['price'] ?></td>
                                        <td><?php echo $rooms['number_adult'] ?></td>
                                        <td><?php echo $rooms['number_children'] ?></td>
                                        <td><?php echo $rooms['name'] ?></td>
                                        <td><?php echo $rooms['description'] ?></td>
                                        <td class="project-state">
                                            <span>
                                                <?php if ($rooms['status'] == 0) : ?>
                                                    <span class="badge badge-success">Còn phòng</span>
                                                <?php else : ?>
                                                    <span class="badge badge-danger">Hết phòng</span>
                                                <?php endif; ?>
                                            </span>
                                        </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-info btn-sm" href="update.php?action=update&update_rooms=<?= $rooms['id'] ?>">
                                                <i class="fas fa-pencil-alt"></i>&nbsp; Edit
                                            </a>
                                            <a href="list.php?action=delete&id=<?= $rooms['id'] ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>&nbsp;Delete</a>

                                        </td>
                                    </tr>
                            <?php endforeach;
                            } else {
                                echo "Không có dữ liệu danh mục.";
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

    <?php include "../footer.php"; ?>
</div>