<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container">
    <?php 
    $page = "register";
    include_once("./components/navbar.php"); 
    ?>
    <form action="./saveStudent.php" method="post">
        <div class="mb-3 mt-3">
            <label class="form-label" for="name">Nome:</label>
            <input class="form-control border border-primary" type="text" name="name">
        </div>

        <div class="mb-3">
            <label class="form-label" for="birthday">Data de nascimento:</label>
            <input class="form-control border border-primary" type="date" name="birthday">
        </div>

        <div class="mb-3">
            <label class="form-label" for="course">Curso:</label>
            <select class="form-control border border-primary" name="course">
                <option value="Selecionar curso">Selecionar curso</option>
                <option value="Curso 1">Curso 1</option>
                <option value="Curso 2">Curso 2</option>
                <option value="Curso 3">Curso 3</option>
            </select>
        </div>

        <button class="btn btn-primary" type="submit">Cadastrar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
