<?php
$db = new PDO('sqlite:diary.db');
$entries = $db->query("SELECT * FROM entries ORDER BY date DESC")->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: text/csv');
header('Content-Disposition: attachment;filename="dzienniczek.csv"');

$output = fopen('php://output', 'w');
fputcsv($output, ['ID', 'Data', 'Przedmiot', 'Temat', 'Zadania']);

foreach ($entries as $entry) {
    fputcsv($output, [$entry['id'], $entry['date'], $entry['subject'], $entry['content'], $entry['homework']]);
}
fclose($output);
exit;
