
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$view_bag['title']?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Internal CSS -->
    <link href="../css/stylesheet-crud.css" rel="stylesheet">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-bg fixed-nav-bar">
        <div class="container-xl">
            <a class="navbar-brand" href="../index.php">Home</a>

            <div class="collapse navbar-collapse d-flex flex-row-reverse">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown07XL" data-bs-toggle="dropdown" aria-expanded="false">Sort student</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown07XL">
                            <li><a class="dropdown-item" href="?sort=Student_ID">Student ID</a></li>
                            <li><a class="dropdown-item" href="?sort=Student_First_Name">First name</a></li>
                            <li><a class="dropdown-item" href="?sort=Student_Last_Name">Last name</a></li>
                            <li><a class="dropdown-item" href="?sort=Student_Sex">Sex</a></li>
                            <li><a class="dropdown-item" href="?sort=Student_Birthday">Birthday</a></li>
                            <li><a class="dropdown-item" href="?sort=Student_Address">Address</a></li>
                        </ul>
                    </li>
                </ul>
                <form method="get">
                    <input class="form-control" type="text" name="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>

    <?php require(APP_PATH . "page/$name-page.php")  ?>

    <!-- add button -->
    <button class="btn-add">+</button>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>