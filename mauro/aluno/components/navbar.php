<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="../aluno/register.php">Estudante</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?= $page === "register" ? "active" : "" ?>" aria-current="page" href="../aluno/register.php">Cadastrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $page === "profile" ? "active" : "" ?>" href="../aluno/profile.php">Perfil</a>
        </li>
      </ul>

        <form action="../aluno/logout.php" method="post">
            <button class="btn btn-primary" type="submit">Deslogar</button>
        </form>
    </div>
  </div>
</nav>