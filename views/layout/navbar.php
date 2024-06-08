<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="<?php echo BASE_URL; ?>">Mon école</a>

        <!-- Toggler/collapsible Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>/?page=accueil">Accueil</a>
                </li>
                <li class="nav-item <?php echo strpos($title, 'lasse') ? 'active' : '';?>">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>/?page=liste-classe">Classe</a>
                </li>
                <li class="nav-item <?php echo strpos($title, 'tudiant') ? 'active' : '';?>">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>/?page=liste-etudiant">Etudiant</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<main>