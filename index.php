<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Godsmack - Recipes & Food</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body>
<!-- Navigacija -->
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <i class="bi bi-egg-fried"></i> godsmack
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="public/search.php"><i class="bi bi-search"></i> Search</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="public/recipe.php"><i class="bi bi-book"></i> Recipe</a>
                </li>
                <!-- Za goste -->
                <li class="nav-item">
                    <a class="nav-link" href="public/login.php"><i class="bi bi-box-arrow-in-right"></i> Sign in</a>
                </li>
                <li class="nav-item ms-2">
                    <a href="public/register.php" class="btn btn-primary-custom btn-sm">Register</a>
                </li>

                <!-- Za ulogovane korisnike (sakriveno za goste) -->
                <!--
                <li class="nav-item">
                    <a class="nav-link" href="dodaj_recept.php"><i class="bi bi-plus-circle"></i> Dodaj recept</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shopping_lista.php"><i class="bi bi-cart"></i> Shopping lista</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="plan_ishrane.php"><i class="bi bi-calendar3"></i> Plan ishrane</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profil.php"><i class="bi bi-person-circle"></i> Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="odjava.php"><i class="bi bi-box-arrow-right"></i> Odjava</a>
                </li>
                -->
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Sekcija -->
<section class="hero-section">
    <div class="container">
        <i class="bi bi-egg-fried" style="font-size: 5rem; margin-bottom: 1rem;"></i>
        <h1>Welcome to the World of Flavours</h1>
        <p>Discover perfect recipes with ingredients you already have</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="public/search.php" class="btn btn-light btn-lg px-5">
                <i class="bi bi-search"></i> Search recipes
            </a>
            <a href="public/register.php" class="btn btn-outline-light btn-lg px-5">
                Register for free
            </a>
        </div>
    </div>
</section>

<!-- Popularni recepti -->
<section class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold"><i class="bi bi-fire text-danger"></i> Popular recipes</h2>
        <a href="recepti.php" class="text-decoration-none fw-semibold" style="color: var(--primary-color);">
            See everything <i class="bi bi-arrow-right"></i>
        </a>
    </div>

    <div class="row">
        <!-- Recept 1 -->
        <div class="col-md-6 col-lg-3">
            <div class="recipe-card">
                <div class="recipe-card-img">🍝</div>
                <div class="recipe-card-body">
                    <h3 class="recipe-card-title">Pasta Carbonara</h3>
                    <div class="recipe-meta">
                        <span><i class="bi bi-clock"></i> 30min</span>
                        <span><i class="bi bi-star-fill"></i> 4.8</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">5 sastojaka</small>
                        <small class="text-muted"><i class="bi bi-chat"></i> 24</small>
                    </div>
                    <a href="recept_detalji.php?id=1" class="btn btn-primary-custom w-100 mt-3">Vidi recept</a>
                </div>
            </div>
        </div>

        <!-- Recept 2 -->
        <div class="col-md-6 col-lg-3">
            <div class="recipe-card">
                <div class="recipe-card-img" style="background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);">🍗</div>
                <div class="recipe-card-body">
                    <h3 class="recipe-card-title">Piletina sa povrćem</h3>
                    <div class="recipe-meta">
                        <span><i class="bi bi-clock"></i> 45min</span>
                        <span><i class="bi bi-star-fill"></i> 4.6</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">7 sastojaka</small>
                        <small class="text-muted"><i class="bi bi-chat"></i> 18</small>
                    </div>
                    <a href="recept_detalji.php?id=2" class="btn btn-primary-custom w-100 mt-3">Vidi recept</a>
                </div>
            </div>
        </div>

        <!-- Recept 3 -->
        <div class="col-md-6 col-lg-3">
            <div class="recipe-card">
                <div class="recipe-card-img" style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);">🍰</div>
                <div class="recipe-card-body">
                    <h3 class="recipe-card-title">Čokoladna torta</h3>
                    <div class="recipe-meta">
                        <span><i class="bi bi-clock"></i> 60min</span>
                        <span><i class="bi bi-star-fill"></i> 4.9</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">8 sastojaka</small>
                        <small class="text-muted"><i class="bi bi-chat"></i> 32</small>
                    </div>
                    <a href="recept_detalji.php?id=3" class="btn btn-primary-custom w-100 mt-3">Vidi recept</a>
                </div>
            </div>
        </div>

        <!-- Recept 4 -->
        <div class="col-md-6 col-lg-3">
            <div class="recipe-card">
                <div class="recipe-card-img" style="background: linear-gradient(135deg, #c3ec52 0%, #0ba29d 100%);">🥗</div>
                <div class="recipe-card-body">
                    <h3 class="recipe-card-title">Cezar salata</h3>
                    <div class="recipe-meta">
                        <span><i class="bi bi-clock"></i> 15min</span>
                        <span><i class="bi bi-star-fill"></i> 4.5</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">6 sastojaka</small>
                        <small class="text-muted"><i class="bi bi-chat"></i> 12</small>
                    </div>
                    <a href="recept_detalji.php?id=4" class="btn btn-primary-custom w-100 mt-3">Vidi recept</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Sekcija -->
<section class="features-section">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Why choose our app?</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card">
                    <i class="bi bi-search"></i>
                    <h3>Smart search</h3>
                    <p>Enter the ingredients you have and get the perfect recipe. The system recommends recipes with available ingredients and shows the ones with the least amount of missing ingredients.</p>                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <i class="bi bi-cart-check"></i>
                    <h3>Shopping list</h3>
                    <p>Automatski generiše listu za kupovinu. Dodajte sastojke direktno iz recepata jednim klikom i nikad više ne zaboravite šta treba da kupite.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <i class="bi bi-calendar-week"></i>
                    <h3>Planiranje ishrane</h3>
                    <p>Organizujte obroke za celu nedelju. Povežite recepte sa danima i obrocima i imajte jasan pregled vaše ishrane.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3"><i class="bi bi-egg-fried"></i> ReceptiApp</h5>
                <p class="opacity-75">Vaš digitalni kuvar koji vam pomaže da otkrijete nove recepte i organizujete ishranu.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3">Brzi linkovi</h5>
                <div class="footer-links d-flex flex-column gap-2">
                    <a href="index.php">Početna</a>
                    <a href="pretraga.php">Pretraga</a>
                    <a href="recepti.php">Svi recepti</a>
                    <a href="registracija.php">Registracija</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3">Kontakt</h5>
                <div class="footer-links d-flex flex-column gap-2">
                    <a href="mailto:info@receptiapp.rs"><i class="bi bi-envelope"></i> info@receptiapp.rs</a>
                    <a href="#"><i class="bi bi-facebook"></i> Facebook</a>
                    <a href="#"><i class="bi bi-instagram"></i> Instagram</a>
                </div>
            </div>
        </div>
        <hr class="opacity-25 my-4">
        <div class="text-center opacity-75">
            <p class="mb-0">&copy; 2025 GODSMACK. All rights reserved.</p>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>