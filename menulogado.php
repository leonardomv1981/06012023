<header>
    <div class="col-12">
        <nav class="navbar fixed-top navbar-light bg-light" id="nav">
            <a class="navbar-brand" id="logo" href="index.php">LOGO</a>
            <ul>
                <li><a href="">opção logada 1</a></li> 
                <li><a href="">opção logada 2</a></li> 
            </ul>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false"><?= strtoupper($_SESSION['nome']) ?></a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Perfil</a>
                    <a class="dropdown-item" href="#">Mensagem</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </li>
        </nav>
    </div>
</header>
