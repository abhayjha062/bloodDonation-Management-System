<nav class="navbar navbar-expand-md bg-primary navbar-dark">
    <div class="container">
        <!-- Links -->
        <ul class="navbar-nav nav-tabs">
            <li class="nav-item">
            <a class="nav-link text-dark active" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-dark" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <?php
                        if(!isset($_SESSION['username'])) {
                    ?>
                        <a class="nav-link text-dark" href="registration.php">Register</a>
                    <?php
                    }
                ?>
            </li>
            <li class="nav-item">
                <?php
                    if(isset($_SESSION['username'])) {
                ?>
                    <a class="nav-link text-dark" href="userProfile.php"><?php echo $_SESSION['username']; ?></a>
                <?php
                }  else {
                ?>
                    <a class="nav-link text-dark" href="loginForm.php">Login</a> 
                <?php
                }
                ?>
            </li>
            <li class="nav-item">
                <?php
                    if(isset($_SESSION['username'])) {
                ?>
                    <a class="nav-link text-dark" href="logout.php">Logout</a>
                <?php
                     }
                ?>
            </li>
        </ul>
        <form class="form-inline" action="search.php" method="POST">
            <input class="form-control mr-sm-2" type="text" placeholder="Search your blood group" name="search">
            <button class="btn btn-success" type="submit" name="submit">Search</button>
        </form>
        <button onclick="getLocation()" class="btn-warning rounded">Allow location</button>
    </div>
</nav>

<div id="txtHint"></div>
<script>
    //alert("please click on allow location than search for blood group");
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        document.getElementById("txtHint").innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    if (position.coords.latitude == 0 || position.coords.longitude == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var lat = position.coords.latitude;
        var lon = position.coords.longitude;
        console.log(lat,lon);
        window.location.href = "search.php?lat=" + lat + "&lon=" + lon;
    }
}
</script>