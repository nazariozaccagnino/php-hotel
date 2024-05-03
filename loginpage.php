<?php
include __DIR__ . "/Controllers/auth.php";



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link grity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">


    <title>Login</title>

</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-around align-items-center mt-5 login">
            <div class="logo d-flex justify-content-center align-items-center"><img src="./images/logo_hotel_3_copia.png" alt=""></div>
            <form id="loginform" action="loginpage.php" method="POST" class="flex-grow-1 p-2">
                <h1 class="text-center mt-4">Please log-in</h1>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                <?php echo $loginfailed ?>
            </form>
        </div>
    </div>
</body>

</html>