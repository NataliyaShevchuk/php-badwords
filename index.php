<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>
<body>
    <main>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-3"> PHP 0.1</h1>

            <form action="second.php" method="GET">
                <div class="mb-3">
                    <label for="">Paragrafo</label>
                    <input class="form-control" type="text" name="messaggio">
                </div>

                <div class="mb-3">
                    <label for="">Parola da censurare</label>
                    <input class="form-control" type="text" name="password">
                </div>

                <button class="btn btn-danger">Invia</button>
            </form>

            </div>
        </div>
    </main>

</body>
</html>