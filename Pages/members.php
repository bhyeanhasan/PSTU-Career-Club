<?php
include '../Database_Operations/all_members.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Members</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../Static/styles/css/style.css">
    <link rel="stylesheet" href="../Static/styles/css/members.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
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


<div class="container">
    <div class="row">
        <div class="col-md-12 part">
            <?php
            while ($member = mysqli_fetch_array($result))
            {
            ?>

                <div class="mainPart">


                    <div class="container">
                        <div class="row">

                            <div class="col-md-2">
                                <img style="width: 100%; border: #ffffff;border-radius: 50%; padding: 10px" src="../Static/picture/member.png" alt="">
                            </div>

                            <div class="col-md-4">
                                <h3 class="name" style="text-align: left;"><?php echo  $member['name']; ?></h3>
                                <h6 class="position" style="text-align: left">Member</h6>

                            </div>

                            <div class="col-md-6">
                                <h6 style="text-align: center">ID: <?php echo  $member['id']; ?></h6>
                                <h6 style="text-align: center">Faculty: <?php echo  $member['faculty']; ?></h6>
                                <h6 style="text-align: center">Phone: <?php echo  $member['phone']; ?></h6>
                                <h6 style="text-align: center">Email: <?php echo  $member['email']; ?></h6>

                            </div>
                        </div>
                    </div>


                </div>

            <?php
            }
            ?>



        </div>
    </div>
</div>

<?php include '../Templates/footer.php'?>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>

