<?php
//session_start();
?>

<nav class="navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Vehicle Showcase</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/test.phpmvc/VehicleCon/">New</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/test.phpmvc/VehicleCon/">Used</a>
            </li>
            <li class="nav-item">
                <?php
                    if (isset($_SESSION["userID"]))
                    {
                        echo '<a class="nav-link" href="http://localhost/test.phpmvc/LoginCon/login/">Logoff</a>';

                    } else
                    {
                        echo '<a class="nav-link" href="http://localhost/test.phpmvc/LoginCon/login/">Login</a>';
                    }
                ?>
            </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
            <input class="form-control" type="text" placeholder="search">
        </form>

    </div>
</nav>