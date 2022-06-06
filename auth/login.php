<!DOCTYPE html>
<html lang="en">

<head>
    <title>Qlox</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../auth/assets/css/global.css">
    <link rel="stylesheet" href="../auth/assets/css/form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</head>

<body>
    <div class="centered">
        <div class="card card-qlox" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title auth-title">Login</h5>
                <form method="post" action="../php/login-check.php" class="needs-validation" novalidate>
     	        <?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-dark" role="alert">
                    <?php echo $_GET['error']; ?>
                    </div>
     	        <?php } ?>
                    <div class="mb-3">
                        <input type="text" name="uname" class="form-control text-dark" placeholder="Username">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control text-dark" placeholder="Passcode">
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-dark" type="submit">Continue</button>
                    </div>
                </form>
                <p class="card-text dont-have mt-2">Don't have an account yet? <a href="/auth/register.php">Register</a>!</p>
            </div>
        </div>
    </div>
</body>

</html>