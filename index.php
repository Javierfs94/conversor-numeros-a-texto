<?php
include('./conversor/conversor.php');

$resultado = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['numero'])) {
    $numero = trim($_POST['numero']);

    if (preg_match('/^\d+(\.\d{1,2})?$/', $numero)) {
        $resultado = conversor($numero, 3);
    } else {
        $error = 'Formato incorrecto. Usa solo números con punto decimal. Ejemplo: 1234.56';
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Números</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="conversor-box bg-white p-5 rounded shadow">
            <h1 class="mb-4 text-center">Conversor de Números</h1>

            <form method="POST" action="">
                <div class="mb-3">
                    <label for="numero" class="form-label">Introduce un número</label>
                    <input type="text" name="numero" id="numero" class="form-control" placeholder="Ej: 1234.56" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Convertir</button>
            </form>

            <?php if ($resultado): ?>
                <div class="alert alert-success mt-4 text-center" role="alert">
                    <?= $resultado ?>
                </div>
            <?php elseif ($error): ?>
                <div class="alert alert-danger mt-4 text-center" role="alert">
                    <?= $error ?>
                </div>
            <?php endif; ?>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script type="module" src="js/main.js"></script>
</body>

</html>