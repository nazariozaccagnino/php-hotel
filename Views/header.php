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
    <link rel="stylesheet" href="css/style.css">

    <script src="js/script.js" type="text/javascript" defer></script>
    <title>PHP hotel</title>

</head>

<header>
    <div class="container d-flex justify-content-between">
        <h1>Hotels</h1>
        <div>
            <form action="index.php" method="GET" class="d-flex align-items-center">
                <div>
                    <select class="form-select" name="stats">
                        <option value="">All</option>
                        <option value="parking">Parcheggio presente</option>
                        <option value="vote">3 stelle o più</option>
                    </select>
                </div>
                <div><button class="btn btn-success" type="submit">Filtra</button></div>
            </form>
        </div>


    </div>
</header>