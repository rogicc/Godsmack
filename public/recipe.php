<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj recept - ReceptiApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'includes/nav.php'; ?>

<div class="container my-5">
    <h1 class="display-5 fw-bold mb-4"><i class="bi bi-plus-circle"></i> Dodaj novi recept</h1>

    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-4">
            <form method="POST" action="process_recept.php" enctype="multipart/form-data">

                <div class="mb-4">
                    <label class="form-label fw-semibold">Naziv recepta:</label>
                    <input type="text" name="naziv" class="form-control form-control-lg" placeholder="npr. Pasta Carbonara" required>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold">Slika recepta:</label>
                    <div class="border-3 border-dashed rounded-4 p-5 text-center" style="border-color: #dee2e6; cursor: pointer;" onclick="document.getElementById('fileInput').click()">
                        <i class="bi bi-camera" style="font-size: 3rem; color: var(--primary-color);"></i>
                        <p class="mt-3 mb-0 text-muted">Kliknite ili prevucite sliku ovde</p>
                        <input type="file" id="fileInput" name="slika" accept="image/*" class="d-none" onchange="previewImage(this)">
                    </div>
                    <div id="imagePreview" class="mt-3"></div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Tip jela:</label>
                        <select name="tip_jela" class="form-select form-select-lg" required>
                            <option value="">Izaberite...</option>
                            <option value="predjelo">Predjelo</option>
                            <option value="glavno">Glavno jelo</option>
                            <option value="desert">Desert</option>
                            <option value="salata">Salata</option>
                            <option value="juha">Juha/Čorba</option>
                            <option value="pice">Piće</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Vreme pripreme:</label>
                        <input type="text" name="vreme_pripreme" class="form-control form-control-lg" placeholder="npr. 30 minuta" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold">Broj porcija:</label>
                    <input type="number" name="broj_porcija" class="form-control form-control-lg" min="1" value="4" required>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold">Sastojci:</label>
                    <div id="ingredientsContainer">
                        <div class="row mb-2 align-items-end">
                            <div class="col-md-5">
                                <input type="text" name="sastojak_naziv[]" class="form-control" placeholder="Naziv sastojka" required>
                            </div>
                            <div class="col-md-3">
                                <input type="number" name="sastojak_kolicina[]" class="form-control" placeholder="Količina" step="0.01" required>
                            </div>
                            <div class="col-md-3">
                                <select name="sastojak_jedinica[]" class="form-select" required>
                                    <option value="g">g (gram)</option>
                                    <option value="kg">kg (kilogram)</option>
                                    <option value="ml">ml (mililitar)</option>
                                    <option value="l">l (litar)</option>
                                    <option value="kom">kom (komad)</option>
                                    <option value="kasika">kašika</option>
                                    <option value="kasicica">kašičica</option>
                                    <option value="solja">šolja</option>
                                </select>
                            </div>
                            <div class="col-md-1">
                                <button type="button" class="btn btn-outline-danger" onclick="removeIngredientRow(this)" style="display: none;">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-success mt-2" onclick="addIngredientRow()">
                        <i class="bi bi-plus"></i> Dodaj sastojak
                    </button>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold">Uputstvo za pripremu:</label>
                    <textarea name="uputstvo" rows="8" class="form-control" placeholder="Opišite korake pripreme..." required></textarea>
                </div>

                <div class="d-flex gap-3">
                    <button type="submit" class="btn btn-primary-custom btn-lg flex-grow-1">
                        <i class="bi bi-check-circle"></i> Objavi recept
                    </button>
                    <a href="index.php" class="btn btn-secondary btn-lg px-5">Otkaži</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function previewImage(input) {
        const preview = document.getElementById('imagePreview');
        preview.innerHTML = '';

        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.innerHTML = `<img src="${e.target.result}" class="img-fluid rounded-4" style="max-height: 300px;">`;
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function addIngredientRow() {
        const container = document.getElementById('ingredientsContainer');
        const newRow = document.createElement('div');
        newRow.className = 'row mb-2 align-items-end';
        newRow.innerHTML = `
                <div class="col-md-5">
                    <input type="text" name="sastojak_naziv[]" class="form-control" placeholder="Naziv sastojka" required>
                </div>
                <div class="col-md-3">
                    <input type="number" name="sastojak_kolicina[]" class="form-control" placeholder="Količina" step="0.01" required>
                </div>
                <div class="col-md-3">
                    <select name="sastojak_jedinica[]" class="form-select" required>
                        <option value="g">g (gram)</option>
                        <option value="kg">kg (kilogram)</option>
                        <option value="ml">ml (mililitar)</option>
                        <option value="l">l (litar)</option>
                        <option value="kom">kom (komad)</option>
                        <option value="kasika">kašika</option>
                        <option value="kasicica">kašičica</option>
                        <option value="solja">šolja</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-outline-danger" onclick="removeIngredientRow(this)">
                        <i class="bi bi-trash"></i>
                    </button>
                </div>
            `;
        container.appendChild(newRow);
    }

    function removeIngredientRow(button) {
        button.closest('.row').remove();
    }
</script>
</body>
</html>