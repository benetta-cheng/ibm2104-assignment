<!DOCTYPE html>
<html lang="en" style="height: 100%;">

<head>
    <?php require('head.php') ?>
    <title>Welcome to AirAsia</title>
</head>

<body class="d-flex flex-column h-100" style="background-image: url('images/airasia-background.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div class="d-flex justify-content-between">
        <img src="images/airasia-logo.svg" alt="AirAsia Logo" height="150px">
        <input class="btn btn-outline-primary btn-lg text-right align-self-center mr-5" type="button" value="Login">
    </div>

    <div class="d-flex mt-auto m-5 pb-5">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Flights</h5>
                <p class="card-text">Check flight availabilities and schedules. Book your flights here too!</p>
                <a href="#" class="btn btn-primary">Show Flights</a>
            </div>
        </div>
        <div class="card ml-4" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Check-In</h5>
                <p class="card-text">Perform online check-in here a few hours before boarding your flight. All you need is your booking id.</p>
                <a href="#" class="btn btn-primary">Check-in</a>
            </div>
        </div>
    </div>

    <?php require('scripts.php') ?>
</body>

</html>