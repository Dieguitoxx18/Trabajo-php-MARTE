<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gracias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/estilos.css">
</head>
<body class="bloque-gris d-flex align-items-center justify-content-center vh-100">

    <div class="bg-white p-5 text-center shadow-sm" style="max-width: 500px;">
        <h2 class="fw-bold mb-3">A</h2>
        <h3 class="fw-normal mb-3">¡Gracias por escribirnos!</h3>
        <p class="text-secondary small mb-4">
            <?php if (isset($_POST['nombre'])): ?>
                Hola <strong><?= htmlspecialchars($_POST['nombre']) ?></strong>, recibimos tu solicitud y te llamaremos pronto al número <strong><?= htmlspecialchars($_POST['telefono']) ?></strong>.
            <?php else: ?>
                Recibimos tus datos correctamente y nos pondremos en contacto contigo muy pronto.
            <?php endif; ?>
        </p>
        <a href="../index.php" class="boton-redondo">Volver</a>
    </div>

</body>
</html>