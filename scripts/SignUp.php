<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap css link cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- style css -->
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ЛОГОТИП</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link " aria-current="page" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link " href="../pages/reports.php">Reports</a>
                </li>
                </li>
                <li class="nav-item">
                <a class="nav-link " href="../pages/goods.php">Goods</a>
                </li>
                <li class="nav-item">
                <a class="nav-link " href="../pages/imports.php">Imports</a>
                </li>
            </ul>
            <a href="../scripts/LogIn.php" class="btn btn-outline-success button">Log in</a>
            <a href="../scripts/SignUp.php" class="btn btn-success button">Sign up</a>
            </div>
        </div>
    </nav>

    <!-- main content  -->
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <form action="../operations/SignUp.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Your name</label>
                    <input type="name" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="surname" class="form-label">Your surname</label>
                    <input type="text" class="form-control" id="surname" name="surname">
                </div>
                <div class="mb-3">
                    <label for="login" class="form-label">Login</label>
                    <input type="text" class="form-control" id="login" name="login">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Your status</label>
                    <select name="status" id="status">
                        <option value="shop owner">Shop owner</option>
                        <option value="shopa ssistant">Shop assistant</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-outline-success">Submit</button>
            </form>
        </div>
        <div class="col-4"></div>
    </div>



    <!-- bootstrap javascript link cdn -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>