<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prijava - ReceptiApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="min-vh-100 d-flex align-items-center" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 col-lg-4">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <i class="bi bi-egg-fried" style="font-size: 4rem; color: var(--primary-color);"></i>
                            <h2 class="fw-bold mt-3">Prijava</h2>
                            <p class="text-muted">Dobrodošli nazad!</p>
                        </div>

                        <?php if(isset($_GET['msg'])): ?>
                            <div class="alert alert-info">
                                Uspešno ste se registrovali! Proverite e-mail za verifikaciju.
                            </div>
                        <?php endif; ?>

                        <form method="POST" action="process_prijava.php">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">E-mail adresa:</label>
                                <input type="email" name="email" class="form-control form-control-lg" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Lozinka:</label>
                                <input type="password" name="lozinka" class="form-control form-control-lg" required>
                            </div>

                            <div class="mb-4 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="zapamti">
                                <label class="form-check-label" for="remember">
                                    Zapamti me
                                </label>
                            </div>

                            <button type="submit" class="btn btn-primary-custom btn-lg w-100 mb-3">
                                <i class="bi bi-box-arrow-in-right"></i> Prijavi se
                            </button>

                            <div class="text-center">
                                <a href="zaboravljena_lozinka.php" class="text-muted small">Zaboravili ste lozinku?</a>
                            </div>

                            <hr class="my-4">

                            <div class="text-center">
                                <p class="mb-0">Nemate nalog? <a href="registracija.php" class="fw-semibold">Registrujte se</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>