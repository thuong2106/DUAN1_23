<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KING HOTEL - ROOOMS</title>

    <style>
        .pop:hover {
            border-top-color: var(--teal) !important;
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>
</head>

<body class="bg-light">




    <div class="container">
        <div class="row" style="display: flex;">

            <div class=" col-12 my-5 px-4">
                <h2 class="fw-bold"><?php echo ($list_categories['room_name']) ?></h2>
                <div style="font-size: 14px;">
                    <a href="index.php" class="text-secondary text-decoration-none">HOME</a>
                    <span class="text-secondary"></span>
                    <a href="rooms.php" class="text-secondary text-decoration-none">ROOMS</a>
                </div>
            </div>

            <div class="col-lg-7 col-md-12 -px4">
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center" style="display: flex;">
                        <div class="col-md-20 mb-lg-0 mb-md-0 mb-0">
                            <img src="./upload/<?php echo $list_categories['img'] ?>" class="img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow-sm rounded-3">
                    <div class="card-body">
                        <h4 class="mb-1">$<?= $price ?> per night</h4>
                        <p><?= $room_type_name ?></p>
                        <div class="rating mb-4">
                            <div>
                                <i style="color: <?= $status ? 'red' : 'green'; ?>">
                                    <?= $status ? 'Hết phòng' : 'Còn phòng'; ?>
                                </i>
                            </div>
                            <style>

                            </style>
                            <table class="table">
                                <tr>
                                    <th>Create date</th>
                                    <th>Update date</th>
                                </tr>
                                <tr>
                                    <td><?= $create_date ?></td>
                                    <td><?= $update_date ?></td>
                                </tr>
                            </table>
                            <div>
                                <a href="?act=booknow&id=<?= $id ?>" class="btn w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-12 mt-4 px-4">
                <div class="mb-4">
                    <h5>Description</h5>
                    <p>
                        <?php echo $list_categories['description'] ?>
                    </p>
                </div>
            </div>
            <div class="col-12 mt-4 px-4">
                <h5 class="mb-3">Reviews & Ratings</h5>
                <div class=" d-flex align-items-center mb-2">
                    <img src="images/facilities/star-fill.svg" width="30px">
                    <h6 class="m-0 ms-2">Random user1</h6>
                </div>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Ducimus quam, fuga aut in iste amet
                    ipsam incidunt deserunt ea? Consequatur.
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
            </div>
        </div>
</body>

</html>