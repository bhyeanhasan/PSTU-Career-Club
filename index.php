<?php
session_start();
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Static/styles/css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Index</title>
</head>
<body>

<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-light ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">


        <a class="navbar-brand" href="index.php"> <img class="logo" src='Static/picture/logo.jpg' alt=""> PSTU CC</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Wings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Pages/members.php">Members</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Alumni</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

            <?php
            if (isset($_SESSION['id'])) {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="Pages/profile.php?id=<?php echo $_SESSION['id'] ?>"><i
                                class="fas fa-user-plus"></i>
                        <?php
                        echo $_SESSION['user'];
                        ?>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="Auth/logout.php"><i class="fas fa-sign-in-alt"></i> Log Out</a>
                </li>

                <?php
            } else {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="Pages/register.html"><i class="fas fa-user-plus"></i> Sing Up</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="Pages/login_page.php"><i class="fas fa-sign-in-alt"></i> Log In</a>
                </li>
                <?php
            }
            ?>


        </ul>

    </div>
</nav>
<!--end navbar-->

<!--slider-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">

        <div class="carousel-item active">
            <img class="d-block slider" src="Static/picture/pstu.jpg" alt="Second slide">
        </div>
        <div class="carousel-item ">
            <img class="d-block slider" src="Static/picture/2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item  ">
            <img class="d-block slider" src="Static/picture/1.png" alt="First slide">

        </div>
        <div class="carousel-item">
            <img class="d-block slider" src="Static/picture/3.jpg" alt="Third slide">

        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!--end slider-->

<img width="100%" src="Static/picture/1.png">

<?php include 'Templates/footer.php'?>


<script src="Static/styles/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>
</html>



