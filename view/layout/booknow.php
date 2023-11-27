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
                <h2 class="fw-bold"><?php echo $list_categories['room_name']?></h2>
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
                            <img src="./upload/<?php echo $list_categories['img'] ?>" class="img-fluid rounded">
                        </div>
                        <h4 class="mt-3">$<?= $price ?> per night</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow-sm rounded-3">
                    <div class="card-body">
                        <form action="#" id="booking_form">
                            <h6 class="mb-3">BOOKING DETAILS</h6>
                            <div class="row">
                                <div class="col-md-6 mb-3 ">
                                    <label class="form-label ">Name</label>
                                    <input type="text" name="name" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6 mb-3 ">
                                    <label class="form-label ">Phone Number</label>
                                    <input type="text" name="number" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-12 mb-3 ">
                                    <label class="form-label ">Address</label>
                                    <textarea type="text" name="address" class="form-control shadow-none" rows="1" required></textarea>
                                </div>
                                <div class="col-md-6 mb-3 ">
                                    <label class="form-label ">Check-in</label>
                                    <input onchange="check_availability()" type="date" name="checkin" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6 mb-3 ">
                                    <label class="form-label ">Check-out</label>
                                    <input onchange="check_availability()" type="date" name="checkout" class="form-control shadow-none" required>
                                </div>
                                <div class="col-12">
                                    <div class="spinner-border text-info mb-3 d-none" id="info_loader" role="status">
                                        <span class="visually-hidden">Loading....</span>
                                    </div>
                                    <h6 class="mb-3 text-danger">Provide check-in & check-out date !</h6>
                                    <button name="pay_now" class="btn w-100 text-white custom-bg shadow-none mb-2">pay_now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    

    <script>
        let booking_form = document.getElementById('booking_form');
        let info_loader = document.getElementById('info_loader');
        let pay_info = document.getElementById('pay_info');

        function check_availability() {
            let checkin_val = booking_form.elements['checkin'].value;
            let checkout_val = booking_form.elements['checkout'].value;
        }
    </script>



</body>

</html>