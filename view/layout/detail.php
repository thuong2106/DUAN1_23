<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KING HOTEL - ROOOMS</title>
    <?php require('view/links.php') ?>
    <style>
        .pop:hover {
            border-top-color: var(--teal) !important;
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>
</head>

<body class="bg-light">

    <?php require('view/header.php') ?>


    <div class="container">
        <div class="row" style="display: flex;">

            <div class=" col-12 my-5 px-4">
                <h2 class="fw-bold">Simple Room</h2>
                <div style="font-size: 14px;">
                    <a href="index.php" class="text-secondary text-decoration-none">HOME</a>
                    <span class="text-secondary">></span>
                    <a href="rooms.php" class="text-secondary text-decoration-none">ROOMS</a>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 -px4">
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center" style="display: flex;">
                        <div class="col-md-20 mb-lg-0 mb-md-0 mb-0">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow-sm rounded-3">
                    <div class="card-body">
                        <h4 class="mb-1">$200 per night</h4>
                        <div class="rating mb-4">
                            <span class="badge ">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="features mb-4">
                            <h6 class="mb-2">features</h6>
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
                        <div class="facilities mb-4">
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
                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                5 Adults
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                4 Children
                            </span>
                        </div>
                        <div>
                            <a href="#" class="btn w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mt-4 px-4">
            <div class="mb-4">
                <h5>Descruiption</h5>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Ea sunt distinctio cum vero totam at facere
                    animi beatae, asperiores nobis recusandae?
                    Non velit at ea molestias assumenda ex et
                    eligendi.
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


    <?php require('view/footer.php') ?>



</body>

</html>