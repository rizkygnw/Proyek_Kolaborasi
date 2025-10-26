<?php
// Di sinilah keajaiban Docker Compose:
// Kita pakai NAMA SERVICE ('database') sebagai alamat host!
$db_host = 'database'; // <-- BUKAN 'localhost' atau 'host.docker.internal'
$db_user = 'root';
$db_pass = 'nyomet2304'; // Sesuai yang di docker-compose.yml
$db_name = 'db_proyek_kolaborasi'; // Sesuai yang di docker-compose.yml

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Koneksi GAGAL: " . $conn->connect_error);
}

echo "<h1>Koneksi dari Apache/PHP (Docker) ke MariaDB (Docker) BERHASIL!</h1>";
echo "Semua jalan di dalam Docker Compose WOI. 🐳";

$conn->close();
?>
