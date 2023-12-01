<?php
// Inisialisasi nilai awal
$max = isset($_POST['max']) ? $_POST['max'] : 0;
$max = max(0, (int)$max); // Pastikan nilai minimal adalah 0

// Tangani permintaan Ajax untuk mengubah nilai max
if (isset($_POST['updateMax'])) {
    $change = $_POST['updateMax'];
    $max = max(0, (int)$max + $change); // Pastikan nilai minimal adalah 0
    echo $max;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Max Example</title>
</head>
<body>
    <h1>Nilai Max Saat Ini: <?php echo $max; ?></h1>

    <!-- Formulir untuk mengubah nilai max -->
    <form method="post" action="">
        <input type="hidden" name="max" value="<?php echo $max; ?>">
        <button type="submit" name="updateMax" value="-8">Kurangi Max</button>
        <button type="submit" name="updateMax" value="8">Tambah Max</button>
    </form>
</body>
</html>
