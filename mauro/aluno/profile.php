<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container">
    <?php 
    $page = "profile";
    include_once("./components/navbar.php");
    require_once("./Student.php");


    session_start();
    $student = null;

    if (isset($_SESSION["student"]))
        $student = unserialize($_SESSION["student"]);
    ?>
    <?php if ($student !== null): ?>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Informações</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Nome: <?= $student->name; ?><br>
                        Idade: <?= $student->calculateAge() ?><br>
                        Data de nascimento: <?= $student->birthday ?><br>
                        Curso: <?= $student->course; ?>
                    </p>      
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $student->name; ?></h5>
                <p class="card-text">
                    Idade: <?= $student->calculateAge() ?><br>
                    Data de nascimento: <?= $student->birthday ?><br>
                    Curso: <?= $student->course; ?>
                </p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Ver em modal
                </button>
            </div>
        </div>
    <?php else: ?>
        <p>Nenhum usuário foi cadstrado, volte para a página de <a href="./register.php">cadastro</a> para realiar</p>
    <?php endif; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>