<?php
include "includes/auth.php";
include "includes/koneksi.php";
$page = isset($_GET['page']) ? $_GET['page'] : 'scan';
?>
<!DOCTYPE html>
<html>
<head>
    <?php include 'includes/header.php'; ?>
    <title>QR Absensi</title>
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
</head>

<body>

<?php include 'includes/navbar.php'; ?>

<div class="container">

    <h2>QR Absensi</h2>

    <div class="qr-section">
        <div id="reader" style="width: 100%; max-width: 400px; margin: 0 auto; border: 2px solid #ccc; border-radius: 8px; overflow: hidden; display: none;"></div>
        <button id="startScan" style="margin-top: 10px;">Buka Kamera</button>
        <button id="stopScan" style="margin-top: 10px; display: none;">Tutup Kamera</button>
        <div id="scanResult" style="margin-top: 15px;"></div>
    </div>

    <div class="kegiatan-list">
        <h3>Daftar Kegiatan Hari Ini</h3>
        <?php
        $today = date('Y-m-d');
        $query = "SELECT * FROM kegiatan WHERE tanggal = '$today'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $qr_url = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" . urlencode($row['nama_kegiatan'] . '|' . $row['id_kegiatan']);
                echo "<div class='kegiatan-card'>";
                echo "<img src='$qr_url' alt='QR Code' style='max-width:150px;'>";
                echo "<h4>" . htmlspecialchars($row['nama_kegiatan']) . "</h4>";
                echo "<p>Waktu: " . date('H:i', strtotime($row['waktu'])) . " | Lokasi: " . htmlspecialchars($row['lokasi']) . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>Tidak ada kegiatan hari ini.</p>";
        }
        ?>
    </div>

</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>