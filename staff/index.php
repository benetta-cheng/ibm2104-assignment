<!DOCTYPE html>
<html lang="en" style="height: 100%;">

<head>
    <?php require('../head.php') ?>
    <title>AirAsia Staff Portal</title>
</head>

<body class="d-flex flex-column h-100" style="background-image: url('../images/airasia-background.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div><img class="justify-content-start" src="../images/airasia-logo.svg" alt="AirAsia Logo" height="150px"></div>

    <div class="d-flex mt-auto m-5 pb-5">
        <form>
            <div class="form-group">
                <label for="username" class="h5">Username</label>
                <input type="text" class="form-control form-control-lg" id="username" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="password" class="h5">Password</label>
                <input type="password" class="form-control form-control-lg" id="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Login</button>
        </form>
    </div>

    <?php require('../scripts.php') ?>
</body>

</html>