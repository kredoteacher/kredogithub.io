<nav class="navbar navbar-expand-sm navbar-dark bg-dark px-4">
    
    <a href="products.php" class="navbar-brand">
        <h1 class="h4 text-uppercase">Minimart Catalog</h1>
    </a>

    
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#main-nav">
        <span class="navbar-toggler-icon"></span>
    </button>

    
    <div class="collapse navbar-collapse" id="main-nav">
        
        <ul class="navbar-nav">
            <li class="nav-item"><a href="products.php" class="nav-link">Products</a></li>
            <li class="nav-item"><a href="sections.php" class="nav-link">Sections</a></li>
        </ul>
        
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a href="profile.php" class="nav-link fw-bold"><?= $_SESSION['username'] ?></a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link">Log out</a></li>
        </ul>
    </div>
</nav>