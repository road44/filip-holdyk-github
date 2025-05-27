<?php
$db = new PDO('sqlite:diary.db');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Tworzenie tabeli jeśli nie istnieje
$db->exec("CREATE TABLE IF NOT EXISTS entries (
    id INTEGER PRIMARY KEY,
    date TEXT,
    subject TEXT,
    content TEXT,
    homework TEXT
)");


// Dodawanie wpisu
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_entry'])) {
    $stmt = $db->prepare("INSERT INTO entries (date, subject, content, homework) VALUES (?, ?, ?, ?)");
    $stmt->execute([$_POST['date'], $_POST['subject'], $_POST['content'], $_POST['homework']]);
    header("Location: index.php");
    exit;
}

// Usuwanie wpisu
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_entry'])) {
    $stmt = $db->prepare("DELETE FROM entries WHERE id = ?");
    $stmt->execute([$_POST['entry_id']]);
    header("Location: index.php");
    exit;
}

// Pobieranie wpisów
$entries = $db->query("SELECT * FROM entries ORDER BY date DESC")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dzienniczek ucznia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <h1 class="mb-4">📘 Dzienniczek ucznia</h1>

    <form method="post" class="row g-3 mb-4">
        <div class="col-md-2">
            <input type="date" name="date" class="form-control" required>
        </div>
        <div class="col-md-2">
            <input type="text" name="subject" class="form-control" placeholder="Przedmiot" required>
        </div>
        <div class="col-md-3">
            <input type="text" name="content" class="form-control" placeholder="Temat" required>
        </div>
        <div class="col-md-3">
            <input type="text" name="homework" class="form-control" placeholder="Zadanie domowe">
        </div>
        <div class="col-md-2">
            <button type="submit" name="add_entry" class="btn btn-primary w-100">Dodaj wpis</button>
        </div>
    </form>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Data</th>
                <th>Przedmiot</th>
                <th>Temat</th>
                <th>Zadania</th>
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($entries as $entry): ?>
                <tr>
                    <td><?= htmlspecialchars($entry['id']) ?></td>
                    <td><?= htmlspecialchars($entry['date']) ?></td>
                    <td><?= htmlspecialchars($entry['subject']) ?></td>
                    <td><?= htmlspecialchars($entry['content']) ?></td>
                    <td><?= htmlspecialchars($entry['homework']) ?></td>
                    <td>
                        <form method="post" class="d-inline">
                            <input type="hidden" name="entry_id" value="<?= $entry['id'] ?>">
                            <button type="submit" name="delete_entry" class="btn btn-danger btn-sm">Usuń</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="mt-3">
        <a href="export_csv.php" class="btn btn-outline-secondary">Eksportuj do CSV</a>
    </div>
</div>
</body>
</html>
