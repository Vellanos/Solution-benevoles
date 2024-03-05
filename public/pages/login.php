<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La colonie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php include("../assets/components/header.php") ?>
    <main class="d-flex flex-column align-items-center text-center mt-3">
        <div class="form-wrapper d-flex flex-column gap-4">
            <h1> Bon retour parmis nous !</h1>
            <h2>Si vous êtes admin</h2>
            <form class="d-flex flex-column container justify-content-center align-items-center mb-2 gap-3">
                <div class="mb-3">
                    <label for="Username" class="form-label d-flex">Username</label>
                    <input type="text" class="form-control" id="Username">
                </div>
                <div class="mb-3">
                    <label for="Password" class="form-label d-flex">Password</label>
                    <input type="password" class="form-control" id="Password">
                </div>
                <button type="submit" class="btn btn-primary">Se connecter</button>
            </form>
            <h2>Si vous êtes bénévole</h2>
            <form class="d-flex flex-column container justify-content-center align-items-center gap-3">
                <div class="mb-3">
                    <label for="UniqueCode" class="form-label d-flex">Unique code</label>
                    <input type="password" class="form-control" id="UniqueCode">
                </div>
                <button type="submit" class="btn btn-primary">Se connecter</button>
            </form>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>