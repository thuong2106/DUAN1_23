<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">QUẢN LÝ LOẠI PHÒNG</h3>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>MÃ LOẠI PHÒNG</th>
                                        <th>TÊN LOẠI PHÒNG</th>
                                        <th>THAO TÁC</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($room_type as $type) {
                                        extract($type);
                                        $themloai = "index.php?act=addloaiphong&id=" . $id;
                                        $suatype = "index.php?act=suatype&id=" . $id;
                                        $xoatype = "index.php?act=xoatype&id=" . $id;
                                        echo '<tr>
                                                    <td> ' . $id . '</td>
                                                    <td>' . $room_type_name . '</td>
                                                    <td> 
                                                    <a class="btn btn-primary btn-sm" href="' . $themloai . '"><i class="fas fa-folder"></i> Add </a>
                                                    <a class="btn btn-info btn-sm" href="' . $suatype . '"><i class="fas fa-pencil-alt"></i> Edit </a>
                                                    <a class="btn btn-danger btn-sm" href="' . $xoatype . '"><i class="fas fa-trash"></i> Delete</a>
                                                    </td>
                                            </tr>';
                                    }
                                    ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>