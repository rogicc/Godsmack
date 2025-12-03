<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping lista - ReceptiApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'includes/nav.php'; ?>

<div class="container my-5">
    <h1 class="display-5 fw-bold mb-4"><i class="bi bi-cart-check"></i> Moja shopping lista</h1>

    <div class="row">
        <div class="col-lg-8">
            <!-- Dodavanje nove stavke -->
            <div class="card shadow border-0 rounded-4 mb-4">
                <div class="card-body p-4">
                    <form method="POST" action="process_shopping.php" class="d-flex gap-3">
                        <input type="text" name="stavka" class="form-control form-control-lg" placeholder="Dodaj stavku u listu..." required>
                        <button type="submit" class="btn btn-success btn-lg px-4">
                            <i class="bi bi-plus-circle"></i> Dodaj
                        </button>
                    </form>
                </div>
            </div>

            <!-- Lista stavki -->
            <div class="card shadow border-0 rounded-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="fw-bold mb-0">Stavke za kupovinu (8)</h4>
                        <button class="btn btn-outline-danger" onclick="obrisiOdabrane()">
                            <i class="bi bi-trash"></i> Obriši odabrane
                        </button>
                    </div>

                    <div class="list-group list-group-flush">
                        <?php
                        $stavke = [
                            ['id' => 1, 'naziv' => 'Jaja', 'kolicina' => '10 kom', 'checked' => false],
                            ['id' => 2, 'naziv' => 'Brašno', 'kolicina' => '1 kg', 'checked' => true],
                            ['id' => 3, 'naziv' => 'Šećer', 'kolicina' => '500 g', 'checked' => false],
                            ['id' => 4, 'naziv' => 'Mleko', 'kolicina' => '1 l', 'checked' => false],
                            ['id' => 5, 'naziv' => 'Paradajz', 'kolicina' => '500 g', 'checked' => false],
                            ['id' => 6, 'naziv' => 'Piletina', 'kolicina' => '750 g', 'checked' => true],
                            ['id' => 7, 'naziv' => 'Luk', 'kolicina' => '3 kom', 'checked' => false],
                            ['id' => 8, 'naziv' => 'Beli luk', 'kolicina' => '2 čena', 'checked' => false],
                        ];

                        foreach($stavke as $stavka): ?>
                            <div class="list-group-item border-0 py-3 px-0 d-flex align-items-center gap-3 hover-bg-light">
                                <input type="checkbox" class="form-check-input fs-5" <?php echo $stavka['checked'] ? 'checked' : ''; ?>>
                                <div class="flex-grow-1">
                                    <h6 class="mb-0 <?php echo $stavka['checked'] ? 'text-decoration-line-through text-muted' : ''; ?>">
                                        <?php echo $stavka['naziv']; ?>
                                    </h6>
                                    <small class="text-muted"><?php echo $stavka['kolicina']; ?></small>
                                </div>
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar sa savetima -->
        <div class="col-lg-4">
            <div class="card border-0 rounded-4 mb-4" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));">
                <div class="card-body p-4 text-white">
                    <h5 class="fw-bold mb-3"><i class="bi bi-lightbulb"></i> Korisni saveti</h5>
                    <ul class="mb-0">
                        <li class="mb-2">Dodajte stavke direktno iz recepata</li>
                        <li class="mb-2">Označite šta ste već kupili</li>
                        <li class="mb-2">Delite listu sa članovima porodice</li>
                    </ul>
                </div>
            </div>

            <div class="card shadow border-0 rounded-4">
                <div class="card-body p-4">
                    <h5 class="fw-bold mb-3">Kategorije</h5>
                    <div class="d-flex flex-column gap-2">
                        <button class="btn btn-outline-secondary text-start">
                            <i class="bi bi-egg"></i> Mlečni proizvodi (2)
                        </button>
                        <button class="btn btn-outline-secondary text-start">
                            <i class="bi bi-basket"></i> Voće i povrće (3)
                        </button>
                        <button class="btn btn-outline-secondary text-start">
                            <i class="bi bi-shop"></i> Meso (1)
                        </button>
                        <button class="btn btn-outline-secondary text-start">
                            <i class="bi bi-box"></i> Ostalo (2)
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function obrisiOdabrane() {
        if(confirm('Da li ste sigurni da želite da obrišete odabrane stavke?')) {
            console.log('Brisanje odabranih stavki...');
        }
    }
</script>
</body>
</html>