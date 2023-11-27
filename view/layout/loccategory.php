<style>
    /* CSS cho trạng thái active của nút */
    .btn:active {
        background-color: white;
        color: black;
        border: none;
        /* Bất kỳ thuộc tính CSS khác bạn muốn áp dụng khi nút được nhấp */
    }
</style>
<div style="margin-left: 110px">
    <a href="?act=rooms"><button class="btn btn-primary">All sản phẩm</button></a>
    <?php foreach ($listcate as $lct) : ?>
        <?php extract($lct) ?>
        <a href="?act=loccategory&id=<?= $id ?>"><button style="margin: 5px 10px; &active: background-color: green;" class="btn btn-dark"><?= $room_type_name ?></button></a>
    <?php endforeach ?>
</div>
<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center"><?= $name_cate['room_type_name'] ?></h2>
    <div class="h-line bg-dark"></div>  
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
            <?php include_once 'fillter.php' ?>
        </div>

        <div class="col-lg-9 col-md-12 px-4">
            <?php foreach ($filtercate as $lth) : ?>
                <?php extract($lth) ?>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="./upload/<?= $img ?>" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-0">
                            <h5 class="mb-3"><?= $room_name ?></h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Bathrooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Balcony
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    3 Sofa
                                </span>
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Wifi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Televison
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    AC
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Room heater
                                </span>
                            </div>
                            <div class="guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    5 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    4 Children
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                            <h6 class="mb-4">$<?= $price ?> per night</h6>
                            <a href="?act=booknow&id=<?= $id ?>" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="?act=detail&id=<?= $id ?>" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>