<?php require('validateLogin.php') ?>
<!DOCTYPE html>
<html lang="en" style="height: 100%;">

<head>
    <?php require('../head.php') ?>
    <title>AirAsia Staff Portal</title>
</head>

<body>
    <?php require('navbar.php') ?>
    <div class="container-fluid">
        <div class="row mt-5 ml-3 mr-3">
            <div class="card ml-4 col-3">
                <div class="card-body">
                    <h5 class="card-title">Flights</h5>
                    <p class="card-text">Add and update the flight records as well as the flight schedules in this module</p>
                    <div class="btn-group">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                            Flight
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="flight.php">Add Flight</a>
                            <a class="dropdown-item" href="flight-search.php">Search Flight</a>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                            Flight Schedule
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="flight-schedule.php">Add Flight Schedule</a>
                            <a class="dropdown-item" href="flight-schedule-search.php">Search Flight Schedule</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card ml-4 col-3">
                <div class="card-body">
                    <h5 class="card-title">Ticket Sales</h5>
                    <p class="card-text">Add and update the flight ticket records and the prices for different classes of seatings in this module</p>
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                        Access
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Add Ticket</a>
                        <a class="dropdown-item" href="#">Search Ticket</a>
                        <a class="dropdown-item" href="#">Update Ticket Classes</a>
                    </div>
                </div>
            </div>
            <div class="card ml-4 col-3">
                <div class="card-body">
                    <h5 class="card-title">Flight Crew</h5>
                    <p class="card-text">Add and update the pilot, co-pilot and flight attendants’ assigned to a flight schedule in this module</p>
                    <a href="#" class="btn btn-primary" type="button">Access</a>
                </div>
            </div>
        </div>
        <div class="row mt-5 ml-3 mr-3">
            <div class="card ml-4 col-3">
                <div class="card-body">
                    <h5 class="card-title">Boarding Status</h5>
                    <p class="card-text">Check the boarding status of each flight in this module</p>
                    <a href="#" class="btn btn-primary" type="button">Access</a>
                </div>
            </div>
            <div class="card ml-4 col-3">
                <div class="card-body">
                    <h5 class="card-title">Reports</h5>
                    <p class="card-text">Generate flight reports, sales report and other related reports in this module</p>
                    <a href="#" class="btn btn-primary" type="button">Access</a>
                </div>
            </div>
        </div>
    </div>
    <?php require('../scripts.php') ?>
</body>

</html>