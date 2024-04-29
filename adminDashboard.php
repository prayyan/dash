<?php 
include 'dbcon.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="https://res.cloudinary.com/dpdwa1atx/image/upload/v1686602059/Prayyan%20Website/2_ajsout.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />



    <title>Admin Dashboard</title>
    <style>
        .highlight {
            background-color: #ff0b0b;
        }

        .list-group-item:hover .collapse.show {
            display: block;
        }

        :root {
            --main-bg-color: #000000;
            --main-text-color: #000000;
            --second-text-color: #f1f3f6;
            --second-bg-color: #f1f3f6;
          }
          .primary-text {
            color: var(--main-text-color);
          }
          
          .second-text {
            color: var(--second-text-color);
          }
          
          .primary-bg {
            background-color: var(--main-bg-color);
          }
          
          .secondary-bg {
            background-color: var(--second-bg-color);
          }
          
          .rounded-full {
            border-radius: 100%;
          }
          
          #wrapper {
            color:"#FFFFFF";
            overflow-x: hidden;
            background-image: linear-gradient(
              to right,
              #e4cd66,
              #faee70,
              #f4dd42,
              #f7e466,
              #f4e164  );
          }
          
          #sidebar-wrapper {
            min-height: 100vh;
            margin-left: -15rem;
            background-image: linear-gradient(
              to right,
              #000000,
              #000000);
            -webkit-transition: margin 0.25s ease-out;
            -moz-transition: margin 0.25s ease-out;
            -o-transition: margin 0.25s ease-out;
            transition: margin 0.25s ease-out;
          }
          
          #sidebar-wrapper .sidebar-heading {
            padding: 0.875rem 1.25rem;
            font-size: 1.2rem;
          }
          
          #sidebar-wrapper .list-group {
            width: 15rem;
            background-image: linear-gradient(
              to right,
              #000000,
              #000000);
          }
          
          #page-content-wrapper {
            min-width: 100vw;
          }
          
          #wrapper.toggled #sidebar-wrapper {
            margin-left: 0;
            background-image: linear-gradient(
              to right,
              #000000,
              #000000);
          }
          
          #menu-toggle {
            cursor: pointer;
          }
          
          .list-group-item {
            border: none;
            padding: 20px 30px;
            background-image: linear-gradient(
              to right,
              #000000,
              #000000);
          }
          
          .list-group-item.active {
            background-color: transparent;
            color: var(--main-text-color);
            font-weight: bold;
            border: none;
          }
          
          @media (min-width: 768px) {
            #sidebar-wrapper {
              margin-left: 0;
            }
          
            #page-content-wrapper {
              min-width: 0;
              width: 100%;
            }
          
            #wrapper.toggled #sidebar-wrapper {
              margin-left: -15rem;
            }
          }  


        .pointer-cursor {
            cursor: pointer;
        }

        .pointer-cursor:hover {
            cursor: pointer;
        }

        .pointer-cursor:active {
            cursor: pointer;
        }

    </style>
</head>
<body>
  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-dark" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom text-white">
            <a href="../template/index.php">
                <img src="https://res.cloudinary.com/dpdwa1atx/image/upload/v1686590888/Prayyan%20Website/Logo2_ndwauh_kpbsum.png" width="150" alt="Prayyan Logo" class="me-2" />
            </a>
        </div>
        <div class="list-group list-group-flush my-3">
            <!-- Dashboard -->
            <a onclick="window.location.href='adminDashboard.php'" class="list-group-item list-group-item-action active text-white pointer-cursor">
                <i class="fas fa-chart-bar me-2"></i>Dashboard
             </a>
             
            <!--Home Page-->
            <a onclick="window.location.href=''" class="list-group-item list-group-item-action active text-white pointer-cursor">
                <i class="fas fa-home me-2"></i>HomePage</a>
            
            <!-- Location -->
            <div class="list-group">
                <a href="" class="list-group-item list-group-item-action fw-bold text-white pointer-cursor" data-bs-toggle="collapse show"
                data-bs-target="#locationCollapse" aria-expanded="false" aria-controls="locationCollapse">
                <i class="fas fa-map-marker-alt me-2 text-white"></i>Location <i class="fas fa-chevron-down float-end"></i>
                </a>

                <div class="collapse" id="locationCollapse">
                    <div class="list-group">
                        <a onclick="window.location.href='addLocation.php'" class="list-group-item list-group-item-action text-white pointer-cursor"
                            onclick="highlightItem(this)">Add Location</a>
                        <a onclick="window.location.href='myLocation.php'" class="list-group-item list-group-item-action text-white pointer-cursor"
                            onclick="highlightItem(this)">My Location</a>
                            <a onclick="window.location.href='pickupDropLocation.php'" class="list-group-item list-group-item-action text-white pointer-cursor"  onclick="highlightItem(this)">Pickup Drop Location</a>
                      <a onclick="window.location.href='mypickupDropLocation.php'" class="list-group-item list-group-item-action text-white pointer-cursor"  onclick="highlightItem(this)">My Pickup Drop Location</a>
                    </div>
                </div>
            </div>
            
            <!-- Bikes -->
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action fw-bold text-white pointer-cursor" data-bs-toggle="collapse show"
                    data-bs-target="#bikesCollapse" aria-expanded="false" aria-controls="bikesCollapse">
                    <i class="fas fa-bicycle me-2 text-white "></i>Bikes <i class="fas fa-chevron-down float-end"></i>
                </a>

                <div class="collapse" id="bikesCollapse">
                    <div class="list-group">
                        <a onclick="window.location.href='addNewBike.php'" class="list-group-item list-group-item-action text-white pointer-cursor"  onclick="highlightItem(this)">Add New Bike</a>
                        <a onclick="window.location.href='myBikes.php'" class="list-group-item list-group-item-action text-white pointer-cursor"  onclick="highlightItem(this)">My Bikes</a>
                        <a onclick="window.location.href='biketypes.php'" class="list-group-item list-group-item-action text-white pointer-cursor"  onclick="highlightItem(this)">Bike Types</a>
                        
                        <a onclick="window.location.href='bikeBookings.php'" class="list-group-item list-group-item-action text-white pointer-cursor"  onclick="highlightItem(this)">Bike Bookings</a>
                    </div>
                </div>
            </div>
            
            <!-- Cars -->
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action fw-bold text-white pointer-cursor" data-bs-toggle="collapse show"
                    data-bs-target="#carsCollapse" aria-expanded="false" aria-controls="carsCollapse">
                    <i class="fas fa-car me-2 text-white"></i> Cars <i class="fas fa-chevron-down float-end"></i>
                </a>

                <div class="collapse show" id="carsCollapse">
                    <div class="list-group">
                        <a onclick="window.location.href='addNewCar.php'" class="list-group-item list-group-item-action text-white  pointer-cursor" onclick="highlightItem(this)">Add New Car</a>
                        <a onclick="window.location.href='myCars.php'" class="list-group-item list-group-item-action text-white pointer-cursor" onclick="highlightItem(this)">My Cars</a>
                        <a onclick="window.location.href='carTypes.php'" class="list-group-item list-group-item-action text-white pointer-cursor" onclick="highlightItem(this)">Car Types</a>
                        <a onclick="window.location.href='carFuelType.php'" class="list-group-item list-group-item-action text-white pointer-cursor" onclick="highlightItem(this)">Fuel Type</a>
                        <a onclick="window.location.href='carBookings.php'" class="list-group-item list-group-item-action text-white pointer-cursor" onclick="highlightItem(this)">Car Bookings</a>
                    </div>
                </div>
            </div>
            
            <!-- Users -->
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action fw-bold text-white pointer-cursor" data-bs-toggle="collapse"
                    data-bs-target="#usersCollapse" aria-expanded="false" aria-controls="usersCollapse">
                    <i class="fas fa-user me-2 text-white"></i>User <i class="fas fa-chevron-down float-end"></i>
                </a>

                <div class="collapse" id="usersCollapse">
                    <div class="list-group">
                        <a onclick="window.location.href='addNewUser.php'" class="list-group-item list-group-item-action text-white pointer-cursor" onclick="highlightItem(this)">Add New User</a>
                        <a onclick="window.location.href='myUsers.php'" class="list-group-item list-group-item-action text-white pointer-cursor" onclick="highlightItem(this)">My Users</a>
                        <a onclick="window.location.href='kyc.php'" class="list-group-item list-group-item-action text-white pointer-cursor" onclick="highlightItem(this)">KYC</a>
                    </div>
                </div>
            </div>
            
            <!-- Partners -->
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action fw-bold text-white pointer-cursor" data-bs-toggle="collapse show"
                    data-bs-target="#partnersCollapse" aria-expanded="false" aria-controls="partnersCollapse">
                    <i class="fas fa-handshake me-2 text-white"></i>Partner <i class="fas fa-chevron-down float-end"></i>
                </a>

                <div class="collapse" id="partnersCollapse">
                    <div class="list-group">
                      <a onclick="window.location.href='addNewPartner.php'" class="list-group-item list-group-item-action text-white pointer-cursor"  onclick="highlightItem(this)">Add New Partner</a>
                      <a onclick="window.location.href='myPartners.php'" class="list-group-item list-group-item-action text-white pointer-cursor"  onclick="highlightItem(this)">My Partners</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse show"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user-cog me-2"></i>Admin
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="adminProfile.html">Profile</a></li>
                                <li><a class="dropdown-item" href="adminLogout.html">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container mt-4 justify-text-content">
                <div class="row">
                <div class="col-md-12">
                    <h2>Car Search</h2>
                    <hr>
                </div>
                </div>
                
                <!-- Search Filter -->
                <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="locationSelect" class="form-label">Location:</label>
                    <select class="form-select" id="location">
                        <option value="">Select Location</option>
                        <?php
                            require_once('dbcon.php');
                                            // Assuming you have a database connection established
                            $sql = "SELECT location FROM locations";
                            $result = mysqli_query($connection, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value="' . $row['location'] . '">' . $row['location'] . '</option>';
                            }
                        ?>
                    </select>
                </div>
                
                <div class="col-md-3 mb-3">
                    <label class="form-label">Pickup Point:</label>
                    <select class="form-select" id="point">
                        <option value="">Select Pickup</option>
                    </select>
                </div>
                      
                <div class="col-md-3 mb-3">
                    <label for="partnerSelect" class="form-label">Partner:</label>
                    <select class="form-select" id="partner">
                        <option value="">Select Partner</option>
                        <?php
                            require_once('dbcon.php');
                            // Assuming you have a database connection established
                            $sql = "SELECT DISTINCT partner FROM partners";
                            $result = mysqli_query($connection, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value="' . $row['partner'] . '">' . $row['partner'] . '</option>';
                            }
                        ?>
                    </select>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="cartypeSelect" class="form-label">Car Type:</label>
                    <select class="form-select" id="cartype">
                    <option value="">Select Car Type</option>
                    <?php
                        $sql = "SELECT carName FROM cartypes";
                        $result = mysqli_query($connection, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<option value="' . $row['carName'] . '">' . $row['carName'] . '</option>';
                        }
                    ?>
                    </select>
                </div>

                <button class="btn btn-primary" id="search" onclick="searchCars()">Search</button>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th colspan="14">Current Bookings</th>
                                </tr>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Vehicle</th>
                                    <th>Partner</th>
                                    <th>User</th>
                                    <th>User Mobile</th>
                                    <th>Billing Name</th>
                                    <th>Billing Address</th>
                                    <th>Location</th>
                                    <th>Pickup Point</th>
                                    <th>Pickup DateTime</th>
                                    <th>Drop DateTime</th>
                                    <th>Cost</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                              require_once 'dbcon.php';
                              $s = 1;

                              // Use NOW() to get the current date and time
                              $currentDateTime = date('Y-m-d H:i:s');

                              // Fetch car bookings where the current date and time are between pickupDateTime and dropDateTime
                              $user_query = "SELECT * FROM carbookings UNION ALL SELECT * FROM bikebookings WHERE pickupDateTime <= '$currentDateTime' AND dropDateTime >= '$currentDateTime'";
                              $temp = $connection->query($user_query);

                              if ($temp->num_rows > 0) {
                                  while ($row = $temp->fetch_assoc()) {
                                      // Retrieve car booking details
                                      $id = $row['id'];
                                      $carname = $row['carname'];
                                      $partner = $row['partner'];
                                      $user = $row['user'];
                                      $usermobile = $row['usermobile'];
                                      $billingname = $row['billingname'];
                                      $billingaddress = $row['billingaddress'];
                                      $location = $row['location'];
                                      $pickuppoint = $row['pickuppoint'];
                                      $pickupDateTime = $row['pickupDateTime'];
                                      $dropDateTime = $row['dropDateTime'];
                                      $cost = $row['cost'];

                                      // Display car booking details
                                      echo "<tr>";
                                      echo "<th scope='row'>$s</th>";
                                      echo "<td id='carname-$id'>$carname</td>";
                                      echo "<td id='partner-$id'>$partner</td>";
                                      echo "<td id='user-$id'>$user</td>";
                                      echo "<td id='usermobile-$id'>$usermobile</td>";
                                      echo "<td id='billingname-$id'>$billingname</td>";
                                      echo "<td id='billingaddress-$id'>$billingaddress</td>";
                                      echo "<td id='location-$id'>$location</td>";
                                      echo "<td id='pickuppoint-$id'>$pickuppoint</td>";
                                      echo "<td id='pickupDateTime-$id'>$pickupDateTime</td>";
                                      echo "<td id='dropDateTime-$id'>$dropDateTime</td>";
                                      echo "<td id='cost-$id'>$cost</td>";
                                      echo "</tr>";

                                      $s = $s + 1;
                                  }
                              } else {
                                  echo "<tr><td colspan='14'>No car bookings found in the database.</td></tr>";
                              }
                              ?>
                                </tbody>
                        </table>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th colspan="14">All Bookings</th>
                                </tr>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Vehicle</th>
                                    <th>Partner</th>
                                    <th>User</th>
                                    <th>User Mobile</th>
                                    <th>Billing Name</th>
                                    <th>Billing Address</th>
                                    <th>Location</th>
                                    <th>Pickup Point</th>
                                    <th>Pickup DateTime</th>
                                    <th>Drop DateTime</th>
                                    <th>Cost</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                              require_once 'dbcon.php';
                              $s = 1;

                              // Use NOW() to get the current date and time
                              $currentDateTime = date('Y-m-d H:i:s');

                              // Fetch car bookings where the current date and time are between pickupDateTime and dropDateTime
                              $user_query = "SELECT 'bike' AS vehicle_type, id, bikename, partner, user, usermobile, billingname, billingaddress, location, pickuppoint, pickupDateTime, dropDateTime, cost FROM bikebookings
                              UNION ALL
                              SELECT 'car' AS vehicle_type, id, carname AS bikename, partner, user, usermobile, billingname, billingaddress, location, pickuppoint, pickupDateTime, dropDateTime, cost FROM carbookings";
                              $temp = $connection->query($user_query);

                              if ($temp->num_rows > 0) {
                                  while ($row = $temp->fetch_assoc()) {
                                      // Retrieve car booking details
                                      $id = $row['id'];
                                      $vehiclename = $row['bikename'];
                                      $partner = $row['partner'];
                                      $user = $row['user'];
                                      $usermobile = $row['usermobile'];
                                      $billingname = $row['billingname'];
                                      $billingaddress = $row['billingaddress'];
                                      $location = $row['location'];
                                      $pickuppoint = $row['pickuppoint'];
                                      $pickupDateTime = $row['pickupDateTime'];
                                      $dropDateTime = $row['dropDateTime'];
                                      $cost = $row['cost'];

                                      // Display car booking details
                                      echo "<tr>";
                                      echo "<th scope='row'>$s</th>";
                                      echo "<td id='carname-$id'>$vehiclename</td>";
                                      echo "<td id='partner-$id'>$partner</td>";
                                      echo "<td id='user-$id'>$user</td>";
                                      echo "<td id='usermobile-$id'>$usermobile</td>";
                                      echo "<td id='billingname-$id'>$billingname</td>";
                                      echo "<td id='billingaddress-$id'>$billingaddress</td>";
                                      echo "<td id='location-$id'>$location</td>";
                                      echo "<td id='pickuppoint-$id'>$pickuppoint</td>";
                                      echo "<td id='pickupDateTime-$id'>$pickupDateTime</td>";
                                      echo "<td id='dropDateTime-$id'>$dropDateTime</td>";
                                      echo "<td id='cost-$id'>$cost</td>";
                                      echo "</tr>";

                                      $s = $s + 1;
                                  }
                              } else {
                                  echo "<tr><td colspan='14'>No car bookings found in the database.</td></tr>";
                              }
                              ?>
                                </tbody>
                        </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div>
                <!-- write here -->
</div>
        </div>
    </div>

    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };


        function highlightItem(element) {
            var listItems = document.getElementsByClassName("list-group-item-action");
            for (var i = 0; i < listItems.length; i++) {
                listItems[i].classList.remove("active");
            }
            element.classList.add("active");
        };
        
        // Function to hide all submenus except the one clicked
    function showSubMenu(collapseId) {
        var collapses = document.getElementsByClassName("collapse");
        for (var i = 0; i < collapses.length; i++) {
          var collapse = collapses[i];
          if (collapse.id === collapseId) {
            collapse.classList.toggle("show");
          } else {
            collapse.classList.remove("show");
          }
        }
      }
  
      // Event listener for dropdown menu items
      var dropdownItems = document.getElementsByClassName("list-group-item-action");
      for (var i = 0; i < dropdownItems.length; i++) {
        var dropdownItem = dropdownItems[i];
        dropdownItem.addEventListener("click", function(event) {
          event.preventDefault();
          showSubMenu(this.getAttribute("data-bs-target").slice(1));
        });
      }

      $(document).ready(function() {
        function scrollToSubMenu() {
            // Check if there is an active submenu
            var activeSubMenu = $('.list-group-item.active .collapse.show');
            if (activeSubMenu.length > 0) {
                // Calculate the position of the active submenu
                var submenuTop = activeSubMenu.offset().top;

                // Calculate the height of the sidebar
                var sidebar = $('#sidebar-wrapper');
                var sidebarHeight = sidebar.height(); 

                // Calculate the new scroll position
                var scrollPosition = submenuTop - (sidebarHeight / 2);

                // Scroll the sidebar upwards to show the active submenu
                sidebar.scrollTop(scrollPosition);
            } 
        }

        // Call the scrollToSubMenu function when the page finishes loading
        scrollToSubMenu();
    });
      

    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</body>

</html>