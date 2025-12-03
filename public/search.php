<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pretraga recepata - ReceptiApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'includes/nav.php'; ?>

<div class="container my-5">
    <h1 class="display-4 fw-bold mb-4"><i class="bi bi-search"></i> Pretražite recepte po sastojcima</h1>

    <!-- Forma za unos sastojaka -->
    <div class="card shadow-lg border-0 rounded-4 mb-5">
        <div class="card-body p-4">
            <h3 class="fw-bold mb-4">Unesite sastojke koje imate:</h3>

            <form id="searchForm" method="POST" action="rezultati_pretrage.php">
                <div id="ingredientsContainer">
                    <div class="input-group mb-3">
                        <input type="text" name="sastojci[]" class="form-control form-control-lg" placeholder="Sastojak 1 (npr. jaja, brašno, šećer...)" required>
                        <button class="btn btn-outline-danger" type="button" onclick="removeIngredient(this)" style="display: none;">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                </div>

                <button type="button" class="btn btn-success mb-4" onclick="addIngredient()">
                    <i class="bi bi-plus-circle"></i> Dodaj još sastojaka
                </button>

                <hr class="my-4">

                <h5 class="fw-bold mb-3">Tip pretrage:</h5>
                <div class="btn-group" role="group">
                    <input type="radio" class="btn-check" name="tip_pretrage" id="exact" value="exact" checked>
                    <label class="btn btn-outline-primary" for="exact">
                        <i class="bi bi-check-circle"></i> Samo recepti sa svim sastojcima
                    </label>

                    <input type="radio" class="btn-check" name="tip_pretrage" id="missing" value="missing">
                    <label class="btn btn-outline-primary" for="missing">
                        <i class="bi bi-dash-circle"></i> Prikaži i recepte sa manjkavim sastojcima
                    </label>
                </div>

                <button type="submit" class="btn btn-primary-custom btn-lg w-100 mt-4">
                    <i class="bi bi-search"></i> Pronađi recepte
                </button>
            </form>
        </div>
    </div>

    <!-- Predloženi sastojci -->
    <div class="card border-0 bg-light rounded-4">
        <div class="card-body p-4">
            <h5 class="fw-bold mb-3"><i class="bi bi-lightbulb"></i> Populrni sastojci:</h5>
            <div class="d-flex flex-wrap gap-2">
                <span class="badge bg-secondary" style="cursor: pointer;" onclick="quickAdd('Jaja')">Jaja</span>
                <span class="badge bg-secondary" style="cursor: pointer;" onclick="quickAdd('Brašno')">Brašno</span>
                <span class="badge bg-secondary" style="cursor: pointer;" onclick="quickAdd('Mleko')">Mleko</span>
                <span class="badge bg-secondary" style="cursor: pointer;" onclick="quickAdd('Šećer')">Šećer</span>
                <span class="badge bg-secondary" style="cursor: pointer;" onclick="quickAdd('Piletina')">Piletina</span>
                <span class="badge bg-secondary" style="cursor: pointer;" onclick="quickAdd('Paradajz')">Paradajz</span>
                <span class="badge bg-secondary" style="cursor: pointer;" onclick="quickAdd('Luk')">Luk</span>
                <span class="badge bg-secondary" style="cursor: pointer;" onclick="quickAdd('Beli luk')">Beli luk</span>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    let ingredientCount = 1;

    function addIngredient() {
        ingredientCount++;
        const container = document.getElementById('ingredientsContainer');
        const newInput = document.createElement('div');
        newInput.className = 'input-group mb-3';
        newInput.innerHTML = `
                <input type="text" name="sastojci[]" class="form-control form-control-lg" placeholder="Sastojak ${ingredientCount}" required>
                <button class="btn btn-outline-danger" type="button" onclick="removeIngredient(this)">
                    <i class="bi bi-trash"></i>
                </button>
            `;
        container.appendChild(newInput);
    }

    function removeIngredient(button) {
        button.parentElement.remove();
    }

    function quickAdd(ingredient) {
        const inputs = document.querySelectorAll('input[name="sastojci[]"]');
        const emptyInput = Array.from(inputs).find(input => input.value === '');

        if (emptyInput) {
            emptyInput.value = ingredient;
        } else {
            addIngredient();
            const newInputs = document.querySelectorAll('input[name="sastojci[]"]');
            newInputs[newInputs.length - 1].value = ingredient;
        }
    }
</script>
</body>
</html>