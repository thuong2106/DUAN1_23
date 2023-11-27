<nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
    <div class="container-fluid flex-lg-column align-items-stretch">
        <h4 class="mt-2">FILTERS</h4>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2 " id="filterDropdown">
            <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                <label class="form-label">Check in</label>
                <input type="date" class="form-control shadow-none">
                <label class="form-label">Check out</label>
                <input type="date" class="form-control shadow-none">
            </div>
            <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">fACILITIES</h5>
                <div class="mb-2">
                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                    <label class="form-check-label" for="f1">Facility one</label>
                </div>
                <div class="mb-2">
                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                    <label class="form-check-label" for="f2">Facility two</label>
                </div>
                <div class="mb-2">
                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                    <label class="form-check-label" for="f3">Facility three</label>
                </div>
            </div>
            <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
                <div class="d-flex">
                    <div class="me-3">
                        <label class="form-label">Adluts</label>
                        <input type="number" class="form-control shadow-none">
                    </div>
                    <div>
                        <label class="form-label">Childern</label>
                        <input type="number" class="form-control shadow-none">
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>