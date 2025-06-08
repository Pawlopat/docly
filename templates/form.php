<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Docly – Generator Umowy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-4">
    <h1>Umowa zlecenie</h1>
    <form action="<?= BASE_PATH ?>/generate" method="POST" class="mt-4">
        <input type="text" name="date" placeholder="Data" class="form-control mb-2" required>
        <input type="text" name="employer_name" placeholder="Zleceniodawca" class="form-control mb-2" required>
        <input type="text" name="contractor_name" placeholder="Zleceniobiorca" class="form-control mb-2" required>
        <input type="text" name="rate" placeholder="Stawka (PLN/h)" class="form-control mb-2" required>
        <button class="btn btn-primary">Wygeneruj dokument</button>
    </form>
</body>
</html>
