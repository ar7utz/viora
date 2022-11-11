<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= arquivo('./index.php') ?>">Agenda Viora</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="<?= arquivo('modulos/pagina/index.php')?>">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Professores
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= arquivo('modulos/professores/listar.php')?>">Lista</a></li>
            <li><a class="dropdown-item" href="<?= arquivo('modulos/professores/criar.php')?>">Criar</a></li>

          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Alunos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= arquivo('modulos/alunos/listar.php')?>">Lista</a></li>
            <li><a class="dropdown-item" href="<?= arquivo('modulos/alunos/criar.php')?>">Criar</a></li>

          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Turmas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= arquivo('modulos/turma/listar.php')?>">Lista</a></li>
            <li><a class="dropdown-item" href="<?= arquivo('modulos/turma/criar.php')?>">Criar</a></li>

          </ul>
        </li>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="<?= arquivo('modulos/mensagem/msg.php')?>">Nova Mensagem</a>
        </li>
      </ul>
      <a class="btn btn-info" href="<?= arquivo('#') ?>">Perfil</a>
      <a class="btn btn-dark" href="<?= arquivo('modulos/login/sair.php')?>">Sair</a>
    </div>
  </div>
</nav>