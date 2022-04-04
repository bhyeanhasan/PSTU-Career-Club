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
    <title>Document</title>


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="../Static/styles/css/style.css">
    <link rel="stylesheet" href="../Static/styles/css/login.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">


        <a class="navbar-brand" href="../index.php"> <img class="logo" src='../Static/picture/logo.jpg' alt=""> PSTU CC</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Wings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Pages/members.php">Members</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Alumni</a>
            </li>
        </ul>


    </div>
</nav>


<div class="wrapper mb-4">
    <div id="formContent">

        <div class="">
            <img class="logo_login" src="../Static/picture/logo.jpg" id="icon" alt="User Icon"/>
        </div>
        <form action="../Auth/login.php" method="POST">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 input-group form-group">
                        <input class="form-control" type="text" id="login" name="user" placeholder="Email or ID"
                               required>
                    </div>

                    <div class="col-md-12 input-group form-group">
                        <input class="form-control" type="password" id="password" name="password" placeholder="Password"
                               required>
                    </div>

                    <div class="col-md-12  form-group">
                        <input style="background-color:#4284B4" class="btn  login_btn" type="submit" value="Log In">
                    </div>


                </div>
            </div>

        </form>

        <div id="formFooter">

            <?php
            if (!empty($_SESSION['error'])) {
                ?>
                <h5 style="color: red"><?php echo $_SESSION['error'] ?></h5>
                <?php
                unset($_SESSION['error']);
            }
            ?>

            <a class="underlineHover" href="#">Forgot Password?</a>


        </div>

    </div>
</div>

<?php include '../Templates/footer.php' ?>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>