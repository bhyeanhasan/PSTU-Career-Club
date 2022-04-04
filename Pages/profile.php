<?php
include '../Database_Operations/Connection.php';

$connection = new Connection();
$connect = $connection->Connect();
$id = $_GET['id'];

$sql = "SELECT * FROM members WHERE id =" . $id;

$result = mysqli_query($connect, $sql);

if (!$result) {
    printf("Error: %s\n", mysqli_error($connect));
    exit();
}

$connect->close();

while ($profile = mysqli_fetch_array($result)) {
    ?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Profile</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"
              id="bootstrap-css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
              integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
              crossorigin="anonymous"/>
        <link rel="stylesheet" href="../Static/styles/css/style.css">
    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">


            <a class="navbar-brand" href="../index.php"> <img class="logo" src='../Static/picture/logo.jpg' alt=""> PSTU
                CC</a>
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
            <div class="col-md-3"></div>
            <div class="col-md-6">

                <div class="profile-box p-4 mt-5">
                    <div class="text-center mt-2">
                        <h5> <?php echo $profile['name'] ?> </h5>
                        <h6 style="color: #00a148" class=""><?php echo $profile['id'] ?></h6>
                        <h6 class="card-text"> ক্যারিয়ার ক্লাব </h6>
                        <h6 class="card-text"> পটুয়াখালী বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়</h6>
                    </div>


                    <table class="table table-striped my-3">

                        <tbody>

                        <tr>
                            <th><i class="bi bi-mortarboard"></i> ফ্যাকাল্টিঃ</th>
                            <td><?php echo $profile['faculty'] ?></td>
                        </tr>

                        <tr>
                            <th><i class="bi bi-geo-alt"></i> মোবাইলঃ</th>
                            <td><?php echo $profile['phone'] ?></td>
                        </tr>
                        <tr>
                            <th><i class="bi bi-signpost-split"></i> জন্মদিনঃ</th>
                            <td><?php echo $profile['birthday'] ?></td>
                        </tr>

                        <tr>
                            <th><i class="bi bi-envelope-plus"></i> ইমেইলঃ</th>
                            <td><a href="mailto:{{ user_profile.user.email }}"><?php echo $profile['email'] ?></a></td>
                        </tr>


                        </tbody>

                    </table>

                    <!--                {% if user == user_profile.user %}-->
                    <!---->
                    <!--                <div class="text-end">-->
                    <!--                    <a class="profile-box btn btn-danger" href="{% url 'update' %}">Edit Profile</a>-->
                    <!--                </div>-->
                    <!---->
                    <!--                {% endif %}-->


                </div>
            </div>
            <div class="col-md-3"></div>
        </div>

    </div>

    </body>
    </html>

<?php } ?>
