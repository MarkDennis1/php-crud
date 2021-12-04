<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $view_bag['title'] ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Internal CSS -->
    <link href="../css/stylesheet-crud.css" rel="stylesheet">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-bg fixed-nav-bar">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sort student list
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="?sort=Student_ID">Student ID</a></li>
                            <li><a class="dropdown-item" href="?sort=Student_First_Name">First name</a></li>
                            <li><a class="dropdown-item" href="?sort=Student_Last_Name">Last name</a></li>
                            <li><a class="dropdown-item" href="?sort=Student_Sex">Sex</a></li>
                            <li><a class="dropdown-item" href="?sort=Student_Birthday">Birthday</a></li>
                            <li><a class="dropdown-item" href="?sort=Student_Address">Address</a></li>
                        </ul>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                    <button class="btn button-bg" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <?php require(APP_PATH . "page/$name-page.php")  ?>

    <!-- Add button -->
    <button class="btn-add" data-bs-toggle="modal" data-bs-target="#showAddModal">+</button>

    <!-- Modal for add button-->
    <div class="modal fade" id="showAddModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header header-bg">
                    <h5 class="modal-title" id="showAddModalLabel">Add new student record</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="mb-3">
                            <label for="student-id" class="col-form-label">Student ID:</label>
                            <input type="text" class="form-control" id="student-id" name="student-id" minlength="10" maxlength="10">
                            <label for="student-fname" class="col-form-label">First name:</label>
                            <input type="text" class="form-control" id="student-fname" name="student-fname" maxlength="50">
                            <label for="student-mname" class="col-form-label">Middle Name:</label>
                            <input type="text" class="form-control" id="student-mname" name="student-mname" maxlength="50">
                            <label for="student-lname" class="col-form-label">Last name:</label>
                            <input type="text" class="form-control" id="student-lname" name="student-lname" maxlength="50">
                            <label for="student-suffix" class="col-form-label">Suffix:</label>
                            <input type="text" class="form-control" id="student-suffix" name="student-suffix" maxlength="10">
                            <label for="student-section" class="col-form-label">Section:</label>
                            <input type="text" class="form-control" id="student-section" name="student-section" maxlength="50">
                            <label for="student-sex" class="col-form-label">Sex:</label>
                            <input type="text" class="form-control" id="student-sex" name="student-sex">
                            <label for="student-birthday" class="col-form-label">Birthday:</label>
                            <input type="date" class="form-control" id="student-birthday" name="student-birthday">
                            <label for="student-address" class="col-form-label">Address:</label>
                            <input type="text" class="form-control" id="student-address" name="student-address" maxlength="100">
                            <label for="student-number" class="col-form-label">Contact number:</label>
                            <input type="text" class="form-control" id="student-number" name="student-number" maxlength="11">
                            <label for="student-email" class="col-form-label">E-mail address:</label>
                            <input type="text" class="form-control" id="student-email" name="student-email">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn button-bg" name="btnAddStudent">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <!-- CDN js for modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>