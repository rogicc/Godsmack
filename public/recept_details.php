<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasta Carbonara - ReceptiApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'includes/nav.php'; ?>

<div class="container my-5">
    <div class="row">
        <!-- Leva kolona - Slika i osnovne info -->
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden mb-4">
                <div class="position-relative">
                    <div style="height: 400px; background: linear-gradient(135deg, #ffd89b 0%, #19547b 100%); display: flex; align-items: center; justify-content: center; font-size: 10rem;">
                        🍝
                    </div>
                    <div class="position-absolute top-0 end-0 m-3">
                        <button class="btn btn-light rounded-circle" style="width: 50px; height: 50px;">
                            <i class="bi bi-bookmark fs-5"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-4">
                    <h1 class="fw-bold mb-3">Pasta Carbonara</h1>

                    <div class="d-flex gap-4 mb-4">
                        <div>
                            <i class="bi bi-clock text-primary"></i>
                            <span class="ms-2">30 minuta</span>
                        </div>
                        <div>
                            <i class="bi bi-star-fill text-warning"></i>
                            <span class="ms-2">4.8 (124 ocena)</span>
                        </div>
                        <div>
                            <i class="bi bi-people text-success"></i>
                            <span class="ms-2">4 porcije</span>
                        </div>
                    </div>

                    <div class="d-flex gap-2 mb-4">
                        <span class="badge bg-primary">Glavno jelo</span>
                        <span class="badge bg-success">Brzo</span>
                        <span class="badge bg-info">Italijanska kuhinja</span>
                    </div>

                    <div class="d-grid gap-2">
                        <button class="btn btn-primary-custom btn-lg">
                            <i class="bi bi-calendar-plus"></i> Dodaj u plan ishrane
                        </button>
                        <button class="btn btn-outline-success btn-lg">
                            <i class="bi bi-cart-plus"></i> Dodaj sastojke u shopping listu
                        </button>
                    </div>

                    <hr class="my-4">

                    <div class="text-center">
                        <p class="text-muted mb-2">Objavio: <strong>Marko Marković</strong></p>
                        <p class="text-muted small">03.12.2024. u 14:30</p>
                    </div>
                </div>
            </div>

            <!-- Ocenjivanje -->
            <div class="card shadow border-0 rounded-4 mb-4">
                <div class="card-body p-4">
                    <h5 class="fw-bold mb-3">Ocenite ovaj recept:</h5>
                    <div class="d-flex justify-content-center gap-2 fs-2 mb-3">
                        <i class="bi bi-star text-warning cursor-pointer" onclick="oceni(1)"></i>
                        <i class="bi bi-star text-warning cursor-pointer" onclick="oceni(2)"></i>
                        <i class="bi bi-star text-warning cursor-pointer" onclick="oceni(3)"></i>
                        <i class="bi bi-star text-warning cursor-pointer" onclick="oceni(4)"></i>
                        <i class="bi bi-star text-warning cursor-pointer" onclick="oceni(5)"></i>
                    </div>
                    <button class="btn btn-primary-custom w-100">Potvrdi ocenu</button>
                </div>
            </div>
        </div>

        <!-- Desna kolona - Sastojci i uputstvo -->
        <div class="col-lg-7">
            <!-- Sastojci -->
            <div class="card shadow border-0 rounded-4 mb-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="fw-bold mb-0"><i class="bi bi-list-check"></i> Sastojci</h3>
                        <div class="btn-group">
                            <button class="btn btn-sm btn-outline-primary">4 porcije</button>
                            <button class="btn btn-sm btn-outline-primary">6 porcija</button>
                            <button class="btn btn-sm btn-outline-primary">8 porcija</button>
                        </div>
                    </div>

                    <div class="list-group list-group-flush">
                        <?php
                        $sastojci = [
                            ['naziv' => 'Špagete', 'kolicina' => '400', 'jedinica' => 'g'],
                            ['naziv' => 'Slanina', 'kolicina' => '200', 'jedinica' => 'g'],
                            ['naziv' => 'Jaja', 'kolicina' => '4', 'jedinica' => 'kom'],
                            ['naziv' => 'Parmezan', 'kolicina' => '100', 'jedinica' => 'g'],
                            ['naziv' => 'Beli luk', 'kolicina' => '2', 'jedinica' => 'čena'],
                            ['naziv' => 'So i biber', 'kolicina' => '', 'jedinica' => 'po ukusu'],
                        ];
                        foreach($sastojci as $sastojak): ?>
                            <div class="list-group-item border-0 d-flex justify-content-between align-items-center py-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="sastojak<?php echo $sastojak['naziv']; ?>">
                                    <label class="form-check-label" for="sastojak<?php echo $sastojak['naziv']; ?>">
                                        <strong><?php echo $sastojak['naziv']; ?></strong>
                                    </label>
                                </div>
                                <span class="badge bg-light text-dark">
                                    <?php echo $sastojak['kolicina']; ?> <?php echo $sastojak['jedinica']; ?>
                                </span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Uputstvo -->
            <div class="card shadow border-0 rounded-4 mb-4">
                <div class="card-body p-4">
                    <h3 class="fw-bold mb-4"><i class="bi bi-card-list"></i> Uputstvo za pripremu</h3>

                    <div class="timeline">
                        <div class="timeline-item mb-4">
                            <div class="timeline-badge bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; float: left; margin-right: 15px;">
                                <strong>1</strong>
                            </div>
                            <div class="timeline-content">
                                <p>Prokuvajte špagete u posoljenoj vodi prema uputstvu na pakovanju. Sačuvajte šolju vode od kuvanja paste.</p>
                            </div>
                        </div>

                        <div class="timeline-item mb-4">
                            <div class="timeline-badge bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; float: left; margin-right: 15px;">
                                <strong>2</strong>
                            </div>
                            <div class="timeline-content">
                                <p>Na tavi pržite iseckanu slaninu dok ne postane hrskava. Dodajte sitno seckan beli luk i pržite još minut.</p>
                            </div>
                        </div>

                        <div class="timeline-item mb-4">
                            <div class="timeline-badge bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; float: left; margin-right: 15px;">
                                <strong>3</strong>
                            </div>
                            <div class="timeline-content">
                                <p>U činiji umutite jaja sa rendanim parmezanom. Dodajte biber po ukusu.</p>
                            </div>
                        </div>

                        <div class="timeline-item mb-4">
                            <div class="timeline-badge bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; float: left; margin-right: 15px;">
                                <strong>4</strong>
                            </div>
                            <div class="timeline-content">
                                <p>Procedite špagete i odmah ih dodajte u tiganj sa slaninom. Sklonite sa vatre.</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-badge bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; float: left; margin-right: 15px;">
                                <strong>5</strong>
                            </div>
                            <div class="timeline-content">
                                <p>Brzo umešajte jaja sa sirom u toplu pastu. Dodajte malo vode od paste da bi sos bio kremast. Poslužite odmah sa dodatnim parmezanom.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Komentari -->
            <div class="card shadow border-0 rounded-4">
                <div class="card-body p-4">
                    <h3 class="fw-bold mb-4"><i class="bi bi-chat-dots"></i> Komentari (8)</h3>

                    <!-- Forma za novi komentar -->
                    <div class="mb-4">
                        <textarea class="form-control mb-2" rows="3" placeholder="Napišite komentar..."></textarea>
                        <button class="btn btn-primary-custom">
                            <i class="bi bi-send"></i> Objavi komentar
                        </button>
                    </div>

                    <hr>

                    <!-- Lista komentara -->
                    <?php
                    $komentari = [
                        ['korisnik' => 'Ana Anić', 'datum' => '02.12.2024', 'tekst' => 'Odličan recept! Probala sam ga sinoć i porodica je oduševljena. 👍'],
                        ['korisnik' => 'Petar Petrović', 'datum' => '01.12.2024', 'tekst' => 'Može li se koristiti pavlaka umesto jaja?'],
                        ['korisnik' => 'Milica Milić', 'datum' => '30.11.2024', 'tekst' => 'Savršeno objašnjeno! Prvi put sam radila carbonaru i ispala je odlično.'],
                    ];

                    foreach($komentari as $komentar): ?>
                        <div class="d-flex gap-3 mb-4">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; flex-shrink: 0;">
                                <strong><?php echo substr($komentar['korisnik'], 0, 1); ?></strong>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start mb-1">
                                    <h6 class="mb-0 fw-bold"><?php echo $komentar['korisnik']; ?></h6>
                                    <small class="text-muted"><?php echo $komentar['datum']; ?></small>
                                </div>
                                <p class="mb-0"><?php echo $komentar['tekst']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>