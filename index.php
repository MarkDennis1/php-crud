<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Internal CSS -->
    <link href="css/stylesheet-index.css" rel="stylesheet">
</head>

<body>
    <div class="px-4 pt-5 my-5 text-center bg-color">
        <h1 class="display-4 fw-bold">What is CRUD?</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">CRUD is an acronym for Create, Read, Update, and Delete. CRUD operations are basic data manipulation for database. In this project, we'll display a simple PHP application to perform all these operations on a MySQL database table at one place.</p>
            <p class="lead mb-4">Press the button bellow to display the sample database.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                <a href="controls/crud.php">
                    <button type="button" class="btn button-bg">Student database</button>
                </a>
            </div>
        </div>
        <div class="overflow-hidden" style="max-height: 30vh;">
            <div class="container px-5">
                <img src="images/crud-sample.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
            </div>
        </div>
    </div>

    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Alcachupas</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Gamil</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Gerongga</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Sanchez</a></li>
            </ul>
            <p class="text-center text-muted">2021 PHP-CRUD Final Project</p>
        </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>