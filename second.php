<?php
$password = $_GET["password"];

$paragrafo = $_GET["messaggio"];

?>

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>
<body>
    <main>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-3"> PHP 0.1</h1>

                <div class="mb-3">
                    <h2>Paragrafo: <?php echo str_replace("$password", "***", $paragrafo)?></h2>
                    <h4><?php echo $paragrafo ?></h4>
                    <h5>Caratteri: <?php echo strlen($paragrafo) ?></h5>
                </div>

                <div class="text-success">
                    <h2>Parola da cancellare: <?php echo $password ?></h2>
                    <h5>Caratteri: <?php echo strlen($password) ?></h5>
                </div>

            </div>
        </div>
    </main>
</body>